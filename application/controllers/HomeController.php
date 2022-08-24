<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function index()
    {

        $data['services'] = $this->db->get('services')->result();
        $data['about_me'] = $this->db->get_where('my_profile', ['id' => 1])->row_array();

        $data['porto'] = $this->db->get('portofolio', 0, 9)->result();

        $this->load->view('frontend/template/v_header', $data);
        $this->load->view('frontend/page/v_home');
        $this->load->view('frontend/template/v_footer');
    }
}