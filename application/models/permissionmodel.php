<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PermissionModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

//select user type from table user
    public function addPermission($data) {
        $this->db->insert('permission', $data);
    }
    
    public function getRespondingRequest($id){
        
         $this->db->select('manager_reply');
        $this->db->from('permission');
        $this->db->where('employee_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
         
    }
    

}

?>
