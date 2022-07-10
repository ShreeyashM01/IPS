<?php

class HomeCtrl extends CI_Controller{
    public function _construct() {
        parent::_construct();
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
      
    }
}