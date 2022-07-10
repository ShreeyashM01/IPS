<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VisitorformCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form','url');
       $this->load->model('Visitorform_model');
       
    }

    public function index() {
		//$this->load->view('about');
        $this->load->view('header');
        $arrData['visitor_detail'] = $this->Visitorform_model->get_all_visitor_detail();
        $this->load->view('listvisitorform', $arrData);
        $this->load->view('footer');
    }
    // public function visitorform(){
    //     $this->load->helper("form");
        
    // }

    public function displayUI() {
		//$this->load->view('about');
        $this->load->view('header');
        $arrData['visitor_detail'] = $this->Visitorform_model->get_specific_visitor_detail();
        $this->load->view('dashboard', $arrData);
        $this->load->view('footer');
    }

    public function add() {
        $this->load->view('header');
        if ($this->input->post('btnadd')) {
            $arrData['Id'] = $this->input->post('txtId');
            $arrData['Name'] = $this->input->post('txtName');
            $arrData['Address'] = $this->input->post('txtAddress');
            
            $arrData['Mobile'] = $this->input->post('txtMobile');
            $arrData['Location'] = $this->input->post('txtLocation');
            $arrData['Day'] = $this->input->post('txtDate');
            $arrData['In_time'] = $this->input->post('txtIn_time');
            $arrData['Out_time'] = $this->input->post('txtOut_time');
            $arrData['Card_no'] = $this->input->post('txtCard_no');

            $this->load->library('form_validation');
            $this->load->helper('form','url');
            
            $this->form_validation->set_rules('txtId','Id','is_unique[visitorinfo.Id]|required|min_length[5]');
            $this->form_validation->set_rules('txtName','Name','required|alpha');
            $this->form_validation->set_rules('txtAddress','Address','required');
            $this->form_validation->set_rules('txtMobile','Mobile','required|min_length[10]|numeric');
            $this->form_validation->set_rules('txtLocation','Location','required');
            $this->form_validation->set_rules('txtDate','Date','required');
            $this->form_validation->set_rules('txtIn_time','In_time','required');
            $this->form_validation->set_rules('txtOut_time','Out_time','required');
            $this->form_validation->set_rules('txtCard_no','Card_no','required|min_length[5]');

            if ($this->form_validation->run() == TRUE)
                {
                    //$this->load->view('listbeaconform');
                    $insert = $this->Visitorform_model->insert($arrData);
                    redirect('VisitorformCtrl/index');
                }
    
        }
    
        $this->load->view('addvisitorform');
        $this->load->view('footer');
    }

    public function edit($id) {
        $this->load->view('header');
        $arrData['visitor_detail'] = $this->Visitorform_model->get_id_wise_visitor_detail($id);

        if ($this->input->post('btnEdit')) {
            //$editData['Id'] = $this->input->post('txtId');
            $editData['Name'] = $this->input->post('txtName');
            $editData['Address'] = $this->input->post('txtAddress');
            $editData['Mobile'] = $this->input->post('txtMobile');
            $editData['Location'] = $this->input->post('txtLocation');
            $editData['Day'] = $this->input->post('txtDate');
            $editData['In_time'] = $this->input->post('txtIn_time');
            $editData['Out_time']  = $this->input->post('txtOut_time');
            $editData['Card_no'] = $this->input->post('txtCard_no');

            $update = $this->Visitorform_model->update($editData, $id);
            if ($update) {
                redirect('VisitorformCtrl/index');
            }
        }
        $this->load->view('editvisitorform', $arrData);
        $this->load->view('footer');
    }

    public function delete($id) {
        $delete = $this->Visitorform_model->delete($id);
        if ($delete) {
            redirect('VisitorformCtrl/index');
        }
    }

}