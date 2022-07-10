<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beaconform_model extends CI_Model {
	public $BeaconID;
	public $Location;
    public $Position;
	
    public function __construct() {
        $this->load->database('default');
        $this->load->library('session');

        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_beacon_detail() {
        /*$this->db->select('*');
        $this->db->from('visitorinfo');
        $objQuery = $this->db->get();
        return $objQuery->result_array();*/
		
		$sql = "select * from beaconinfo";
			$beaconform_model = array();
			$i=0;
			$query = $this->db->query($sql, array());
			if ($query->num_rows() > 0) {			
				foreach ($query->result() as $row) {
					
					$beaconform_model[$i] = new Beaconform_model();
					$beaconform_model[$i]->BeaconID = $row->BeaconID;
					$beaconform_model[$i]->Location = $row->Location;
					$beaconform_model[$i]->Position = $row->Position;
					$i++;
    }
    }
			return $beaconform_model;
    }

    public function get_id_wise_beacon_detail($id) {
        $this->db->select('*');
        $this->db->from('beaconinfo');
        $this->db->where('BeaconID', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function insert($arrData) {
        if ($this->db->insert('beaconinfo', $arrData)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($editData, $id) {
        $this->db->where('BeaconID', $id);

        if ($this->db->update('beaconinfo', $editData)) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id) {

        if ($this->db->delete('beaconinfo', array('BeaconID' => $id))) {
            return true;
        } else {
            return false;
        }
    }

}

?>