<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function index(){
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        echo 'user';
        // $this->load->view('temp/header', $data);
        //$this->load->view('temp/navbar');
        //$this->load->view('index');
        //$this->load->view('temp/footer');
    }


}