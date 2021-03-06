<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
        
        public function __construct(){
                parent::__construct();
                $this->load->library('form_validation');
        }

	public function index(){
                $data['title'] = 'Login';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
        }
        
        public function register(){

                $this->form_validation->set_rules('name', 'Name', 'required|trim');

                if($this->form_validation->run() == false){
                        
                        $data['title'] = 'Register';
                        $this->load->view('templates/auth_header', $data);
                        $this->load->view('auth/register');
                        $this->load->view('templates/auth_footer');  
                }else{

                }
                      
        }
}
