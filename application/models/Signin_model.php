<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signin_model extends CI_Model {
	

    public function login_model($username,$password) {
      
           $query=$this->db->query("select Id from signintable where username = '$username' and password = '$password'");
           $row=$query->num_rows();
           if($row>0)
           { 
            return true;  
           }
           else
           {
             return false;
           }
        }
    }

    
    



?>