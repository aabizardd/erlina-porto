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

    public function alert_dismiss($type, $text)
    {

        $alert = '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
		' . $text . '
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
		</div>';

        return $alert;
    }
}