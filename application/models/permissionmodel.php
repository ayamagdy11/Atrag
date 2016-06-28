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

}

?>
