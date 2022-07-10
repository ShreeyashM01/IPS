<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visitorform_model extends CI_Model {
	public $Id;
	public $Name;
	public $Address;
	public $Mobile;
	public $Location;
	public $Day;
	public $In_time;
	public $Out_time;
	public $Card_no;

    public function __construct() {
        $this->load->database('default');
        $this->load->library('session');

        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_visitor_detail() {
        /*$this->db->select('*');
        $this->db->from('visitorinfo');
        $objQuery = $this->db->get();
        return $objQuery->result_array();*/
		
		$sql = "select * from visitorinfo";
			$visitorform_model = array();
			$i=0;
			$query = $this->db->query($sql, array());
			if ($query->num_rows() > 0) {			
				foreach ($query->result() as $row) {
					
					$visitorform_model[$i] = new Visitorform_model();
					$visitorform_model[$i]->Id = $row->Id;
					$visitorform_model[$i]->Name = $row->Name;
					$visitorform_model[$i]->Address = $row->Address;
					$visitorform_model[$i]->Mobile = $row->Mobile;
					$visitorform_model[$i]->Location = $row->Location;
					$visitorform_model[$i]->Day = $row->Day;
					$visitorform_model[$i]->In_time = $row->In_time;
					$visitorform_model[$i]->Out_time = $row->Out_time;
					$visitorform_model[$i]->Card_no = $row->Card_no;
					
					$i++;
    }
    }
			return $visitorform_model;
    }

    public function get_specific_visitor_detail() {
        /*$this->db->select('*');
        $this->db->from('visitorinfo');
        $objQuery = $this->db->get();
        return $objQuery->result_array();*/
		
		$sql = "select * from visitorloc";
			$visitorform_model = array();
			$i=0;
			$query = $this->db->query($sql, array());
			if ($query->num_rows() > 0) {			
				foreach ($query->result() as $row) {
					
					$visitorform_model[$i] = new Visitorform_model();
					$visitorform_model[$i]->Id = $row->Id;
					$visitorform_model[$i]->Name = $row->Name;
                    $visitorform_model[$i]->Card_no = $row->Card_no;
					$visitorform_model[$i]->Location = $row->Location;
					$i++;
    }
    }
			return $visitorform_model;
    }

    public function get_id_wise_visitor_detail($id) {
        $this->db->select('*');
        $this->db->from('visitorinfo');
        $this->db->where('Id', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function insert($arrData) {
        if ($this->db->insert('visitorinfo', $arrData)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($editData, $id) {
        $this->db->where('Id', $id);

        if ($this->db->update('visitorinfo', $editData)) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id) {

        if ($this->db->delete('visitorinfo', array('Id' => $id))) {
            return true;
        } else {
            return false;
        }
    }

}

?>