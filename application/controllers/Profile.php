<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

    public function index()
    {
        $this->load->view('layout/include/header');
        $this->load->view('Profile');
        $this->load->view('layout/include/footer');
    }
}