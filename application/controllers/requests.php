
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Header('Content-Type: text/html; charset=UTF-8');
class Requests extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'url'));
        $this->load->helper('download');
        $this->load->library(array('form_validation', 'email'));
        $this->load->model('EmployeeModel');
        $this->load->model('PermissionModel');
        $this->load->model('TimemangeModel');
        $this->load->model('DealsModel');
    }
}