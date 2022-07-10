<?php

class SigninCtrl extends CI_Controller{
    public function _construct() {
        parent::_construct();
    }

    public function index(){
        $this->load->view('header1');
        $this->load->view('signin');
        $this->load->view('footer');
      
    }
    public function login_validation(){
        // $this->load->helper("form");
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('Signin_model');

            if($this->Signin_model->login_model($username,$password))
            {
                $session_data=array(
                    'username'=>$username,
                    'password'=>$password
                );
                $this->session->set_userdata($session_data);
                redirect('VisitorformCtrl/displayUI');
            }
            else
            {
               $this->session->set_flashdata('error','Invalid Username or Password');
               redirect('SigninCtrl/index');
            }
        }   
    }   
}