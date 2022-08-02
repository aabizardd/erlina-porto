<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function index()
    {
        $this->load->view('frontend/template/v_header');
        $this->load->view('frontend/page/v_home');
        $this->load->view('frontend/template/v_footer');
    }
}