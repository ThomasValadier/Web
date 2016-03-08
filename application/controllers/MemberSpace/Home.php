<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('MemberSpace/Home');
    }
    
    public function login_endpoint($login_infos = null){
        if($login_infos == null){
            $this->load->view('Home/index', array("error" => "Une erreur est survenue, merci de ré-essayer un peu plus tard."));
        }
        
        $this->load->view('MemberSpace/Home', $login_infos);
    }
}


