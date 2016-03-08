<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller {

    public function index()
    {
        $this->load->view('layout/include/header');
        $this->load->view('Service');
        $this->load->view('layout/include/footer');
    }
}