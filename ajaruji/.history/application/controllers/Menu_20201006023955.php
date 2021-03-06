<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Menu_model');
        //$this->load->model('Usermenu_model');
        $this->load->library('form_validation');
        $this->load->helper('form_helper');
    }

    public function submenu(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu ID', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('temp/dashboard_top', $data);
            $this->load->view('temp/dashboard_side', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('temp/dashboard_foot');
            
        } else {
            $data = [
                'menu_id'   => $this->input->post('menu_id'),
                'title'     => $this->input->post('title'),
                'url'       => $this->input->post('url'),
                'is_active' => $this->input->post('is_active')
            ];
            //$this->db->insert('user_sub_menu', ['menu' => $this->input->post('menu')]); 
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!
            </div>');
            redirect('menu/submenu');
        }
    }

}