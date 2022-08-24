<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->status_lock() == 1) {
            $this->lock();
        }

        // $this->load->model('Auth_Model');
    }

    public function index()
    {
        $this->load->view('backend/template/v_header');
        $this->load->view('backend/page/v_admin');
        $this->load->view('backend/template/v_footer');
    }

    protected function status_lock()
    {

        $lock = $this->db->get('app_lock')->row_array();

        return $lock['is_lock'];

    }

    public function lock()
    {

        $this->load->view('backend/template/v_header');
        $this->load->view('backend/page/v_lock');
        $this->load->view('backend/template/v_footer');
    }

    public function unlock_admin()
    {

        $password = htmlspecialchars($this->input->post('password'), true);
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->lock();

        } else {

            if ($password != "abiganteng") {

                $this->session->set_flashdata('message', $this->alert_dismiss('danger', 'Password salah!'));
                redirect('login');

            } else {

                $this->db->update('app_lock', ['is_lock' => 0], ['id' => 1]);
                redirect('login');

            }

        }

    }

    public function login()
    {

        if ($this->session->userdata('id')) {
            redirect('admin');
        }

        $this->load->view('backend/template/v_header');
        $this->load->view('backend/page/v_login');
        $this->load->view('backend/template/v_footer');
    }

    public function do_login()
    {

        $email = htmlspecialchars($this->input->post('email'), true);
        $password = htmlspecialchars($this->input->post('password'), true);

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        if ($admin) {

            if ($password == $admin['password']) {

                $data = [
                    'email' => $admin['email'],
                    'id' => $admin['id'],
                ];

                $this->session->set_userdata($data);

                redirect('admin');

            } else {
                $this->session->set_flashdata('message', $this->alert_dismiss('danger', 'Password salah!'));
                redirect('login');
            }

        } else {

            $this->session->set_flashdata('message', $this->alert_dismiss('danger', 'Email salah!'));
            redirect('login');
        }

    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('login');
    }

    public function portofolio()
    {

        $porto = $this->db->get('portofolio')->result();
        $data['porto'] = $porto;

        $this->load->view('backend/template/v_header', $data);
        $this->load->view('backend/page/v_data_portofolio');
        $this->load->view('backend/template/v_footer');
    }

    public function add_porto()
    {

        // echo "Hai";

        $image = $this->_uploadFile('foto_porto', 'assets/frontend/images/portofolio/');

        $title = htmlspecialchars($this->input->post('title'));
        $tag = htmlspecialchars($this->input->post('tag'));
        $description = htmlspecialchars($this->input->post('description'));
        $link = htmlspecialchars($this->input->post('link'));

        $data = [
            'title' => $title,
            'tag' => $tag,
            'description' => $description,
            'link' => $link,
            'image' => $image,
        ];

        $this->db->insert('portofolio', $data);

        $flashdata = $this->alert_dismiss('success', 'Berhasil menambahkan data portofolio');
        $this->session->set_flashdata('message', $flashdata);

        redirect($_SERVER['HTTP_REFERER']);

        // var_dump($role);die();

    }

    public function update_porto()
    {

        // echo "Hai";

        $id_porto = $this->input->post('id_porto');

        // $image = $this->_uploadFile('foto_porto', 'assets/frontend/images/portofolio/');

        $title = htmlspecialchars($this->input->post('title'));
        $tag = htmlspecialchars($this->input->post('tag'));
        $description = htmlspecialchars($this->input->post('description'));
        $link = htmlspecialchars($this->input->post('link'));

        $gambar = $_FILES['foto_porto']['name'];

        // var_dump($role);die();

        if ($gambar == "") {
            $image_new = $this->input->post('image_old');
        } else {
            $image_new = $this->_uploadFile('foto_porto', 'assets/frontend/images/portofolio/');
        }

        $data = [
            'title' => $title,
            'tag' => $tag,
            'description' => $description,
            'link' => $link,
            'image' => $image_new,
        ];

        $this->db->update('portofolio', $data, ['id' => $id_porto]);

        $flashdata = $this->alert_dismiss('success', 'Berhasil update data portofolio');
        $this->session->set_flashdata('message', $flashdata);

        redirect($_SERVER['HTTP_REFERER']);

        // var_dump($role);die();

    }

    public function hapus_porto($id)
    {

        $this->db->delete('portofolio', ['id' => $id]);

        $flashdata = $this->alert_dismiss('success', 'Berhasil hapus data portofolio');
        $this->session->set_flashdata('message', $flashdata);

        redirect($_SERVER['HTTP_REFERER']);
    }

    private function _uploadFile($file_name, $file_directory)
    {
        $namaFiles = $_FILES[$file_name]['name'];
        $ukuranFile = $_FILES[$file_name]['size'];
        $type = $_FILES[$file_name]['type'];
        $eror = $_FILES[$file_name]['error'];

        // $nama_file = str_replace(" ", "_", $namaFiles);
        $tmpName = $_FILES[$file_name]['tmp_name'];

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

        $ekstensiGambar = explode('.', $namaFiles);

        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            $flashdata = $this->alert_dismiss('danger', 'Yang kamu pilih bukan gambar!');
            $this->session->set_flashdata('message', $flashdata);
            redirect($_SERVER['HTTP_REFERER']);
            return false;
        }

        $namaFilesBaru = "porto-";
        $namaFilesBaru .= uniqid();
        $namaFilesBaru .= '.';
        $namaFilesBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, $file_directory . $namaFilesBaru);

        // 'assets/img/profile/'

        return $namaFilesBaru;
    }

    public function alert_dismiss($type, $text)
    {

        // <div class="alert alert-primary alert-dismissible fade show">
        //     <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
        //                 class="mdi mdi-close"></i></span>
        //     </button>
        //     <strong>Success!</strong> Message has been sent.
        // </div>

        $alert = '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">

		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
        <span><i class="mdi mdi-close"></i></span>
        </button>
        ' . $text . '
		</div>';

        return $alert;
    }
}