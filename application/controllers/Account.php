<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('accountmodel');
    }
    
    public function index()
    { 
        set_status_header(404);
    }
    
    public function Register(){
        return $this->view("register");
    }
    
    public function Login($email, $password){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Mot-de-passe', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged'])){
                $this->load->view('Logged/Home/index');
            }
            else{
                $this->load->view('Home');
            }
        } 
        else {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $result = $this->accountmodel->tryLogin($data);
            
            if ($result) {
                $email = $this->input->post('email');
                $result = $this->accountmodel->read($email);
                if ($result != false) {
                    $session_data = array(
                        'email' => $result[0]->email,
                        'password' => $result[0]->password,
                    );
                    $this->session->set_userdata('logged', $session_data);
                    $this->load->view('Logged/Home');
                }
            } 
            else {
                $data = array(
                    'popup_error' => 'Identifiants invalides'
                );
                $this->load->view('Home', $data);
           }
        }
    }
     
    public function Logout(){
        $sess_array = array(
            'email' => ''
        );
        $this->session->unset_userdata('logged', $sess_array);
        $data['popup_success'] = 'Vous avez bien été déconnecté !';
        $this->load->view('Home', $data);
    }
    
    public function Recover(){
        
    }
    
    public function Create(){
        
    }
}
