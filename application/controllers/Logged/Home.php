<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('layout/include/header');
        $this->load->view('Logged/Home');
        $this->load->view('layout/include/footer');
    }
    
    public function login_endpoint($login_infos = null){
        exit(var_dump($login_infos));   
    }
}


