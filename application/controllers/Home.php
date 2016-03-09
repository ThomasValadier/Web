<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index($data = null)
    {
        $this->load->library('session');
        $this->load->view('layout/include/header');
        $this->load->view('Home', $data); 
        $this->load->view('layout/include/footer');
    }
}