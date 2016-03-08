<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index($params = null)
    {
        $this->load->view('layout/include/header');
        $this->load->view('Home', $params);
        $this->load->view('layout/include/footer');
    }
}