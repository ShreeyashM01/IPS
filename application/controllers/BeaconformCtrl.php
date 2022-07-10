<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class BeaconformCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('Beaconform_model');
       
    }

    public function index() {
		//$this->load->view('about');
        $this->load->view('header');
        $arrData['beacon_detail'] = $this->Beaconform_model->get_all_beacon_detail();
        $this->load->view('listbeaconform', $arrData);
      

		// $this->load->library('form_validation');
        // $this->load->helper('form');
        // $this->form_validation->set_rules('bId','BeaconID','required|min_length[20]|is_unique[beaconinfo.bId]');
        // $this->form_validation->set_rules('bLocation','Location','required|alpha');
        // $this->form_validation->set_rules('bPosition','Position','required|alpha');

		// if ($this->form_validation->run() == FALSE)
		// {
		// 	$this->load->view('addbeaconform');
		// }
		// else
		// {
		// 	$this->load->view('listbeaconform');
		// }
        $this->load->view('footer');
    }
   

    public function add() {
        $this->load->view('header');
        if ($this->input->post('btnadd')) {
            $arrData['BeaconID'] = $this->input->post('bId');
            $arrData['Location'] = $this->input->post('bLocation');
            $arrData['Position'] = $this->input->post('bPosition');
           
            $this->load->library('form_validation');
            $this->load->helper('form','url');

            $this->form_validation->set_rules('bId','BeaconID','required|min_length[20]');
            $this->form_validation->set_rules('bLocation','Location','required');
            $this->form_validation->set_rules('bPosition','Position','required|alpha');
        

            if ($this->form_validation->run() == TRUE)
		    {
                //$this->load->view('listbeaconform');
                $insert = $this->Beaconform_model->insert($arrData);
                redirect('BeaconformCtrl/index');
            }
               
        }
        $this->load->view('addbeaconform');
        $this->load->view('footer');
    }

    public function edit($id) {
        $this->load->view('header');
        $arrData['beacon_detail'] = $this->Beaconform_model->get_id_wise_beacon_detail($id);

        if ($this->input->post('btnEdit')) {
            $editData['Location'] = $this->input->post('bLocation');
            $editData['Position'] = $this->input->post('bPosition');

            $update = $this->Beaconform_model->update($editData, $id);
            if ($update) {
                redirect('BeaconformCtrl/index');
            }
        }
        $this->load->view('editbeaconform', $arrData);
        $this->load->view('footer');
    }

    public function delete($id) {
        $delete = $this->Beaconform_model->delete($id);
        if ($delete) {
            redirect('BeaconformCtrl/index');
        }
    }

    // public function login_validation(){
    //     // $this->load->helper("form");
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('bId','BeaconID','required|min_length[20]');
    //     $this->form_validation->set_rules('bLocation','Location','required');
    //     $this->form_validation->set_rules('bPosition','Position','required');
    //     if($this->form_validation->run() == FALSE)
    //     {
    //         $this->load->view('addbeaconform'); 
    //         // $bId=$this->input->post('bId');
    //         // $bLocation=$this->input->post('bLocation');
    //         // $bPosition=$this->input->post('bPosition');
    //         // $this->load->model('Beaconform_model');

    //         // if($this->Beaconform_model->login_model($bId))
    //         // {
    //         //     $session_data=array(
    //         //         'username'=>$username,
    //         //         'password'=>$password
    //         //     );
    //         //     $this->session->set_userdata($session_data);
    //         //     redirect('VisitorformCtrl/index');
    //         // }
    //         // else
    //         // {
    //         //    $this->session->set_flashdata('error','Invalid Username or Password');
    //         //    redirect('SigninCtrl/index');
    //         // }

    //         // if($this->Signin_model->login_model($username,$password))
    //         // {
    //         //     $session_data=array(
    //         //         'username'=>$username,
    //         //         'password'=>$password
    //         //     );
    //         //     $this->session->set_userdata($session_data);
    //         //     redirect('VisitorformCtrl/index');
    //         // }
    //         // else
    //         // {
    //         //    $this->session->set_flashdata('error','Invalid Username or Password');
    //         //    redirect('SigninCtrl/index');
    //         // }


    //     }
    //     else { 
    //         $this->load->view('listbeaconform'); 
    //      } 
    // }

}
