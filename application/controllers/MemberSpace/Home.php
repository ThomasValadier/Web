<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function index()
    {
        $this->load->view('MemberSpace/Home');
    }
    
    public function login_endpoint($login_infos = null){
        exit(var_dump($login_infos));
        
    }
}


