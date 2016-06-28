<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class EmployeeModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    //insert into employee table
    public function AddEmployee_query($name, $email, $birthDate, $address, $phone, $id, $salary, $date_from, $date_to, $date_of_employment, $img, $contract, $type, $gender, $password, $zkt_id) {

        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'image' => $img,
            'fixed_salary' => $salary,
            'coming_from' => $date_from,
            'coming_to' => $date_to,
            'date_of_employment' => $date_of_employment,
            'contract_of_employment' => $contract,
            'type_id' => $type,
            'zkt_id' => $zkt_id,
            'password' => $password,
            'address' => $address,
            'date_of_birth' => $birthDate,
            'employee_id' => $id,
            'gender_id' => $gender,
            'position_id' => 1
        );

        $this->db->insert('employee', $data);
    }

    public function Addrequest_query($date, $request_type, $way_of_pay, $purpose, $period,
         $commission, $area1, $area2, $area3, $area4, $size, $floors, $rooms, $reception, $bathroom, 
         $notes,$finishing_id, $check_date1, $check_date2, $check_date3, $extra, $customer_name, $customer_job,
          $customer_phone2, $customer_phone1, $source, $form_type ,$employee_id
         )
    {
      
        $data = array(
            'date' => $date,
            'request_type' => $request_type,
            'way_of_pay_id' => $way_of_pay,
            'purpose' => $purpose,
            'period' => $period,
            'commission' => $commission,
            'area1' => $area1,
            'area2' => $area2,
            'area3' => $area3,
            'area4' => $area4,
            'size' => $size,
            'floors' => $floors,
            'rooms' => $rooms,
            'reception' => $reception,
            'bathroom' => $bathroom,
            'notes' => $notes,
            'finishing_id' => $finishing_id,

            'check_date1' => $check_date1,
            'check_date2' => $check_date2,
            'check_date3' => $check_date3,
            'extra' => $extra,
            'customer_name' => $customer_name,
            'customer_job' => $customer_job,
            'customer_phone2' => $customer_phone2,
            'customer_phone1' => $customer_phone1,
            'source' => $source,
            'form_type' => $form_type,
            'employee_id'=>$employee_id


        );

        $this->db->insert('customer', $data);



    }

    //get employee data from db
    public function employeedata($id) {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        //  print_r($result) ;
        //echo "<br>";
        //echo($result[0]->name) ;
        return $result;
    }

    public function updateEmployee_query($name, $email, $birthDate, $address, $phone, $id, $salary, $date_from, $date_to, $date_of_employment, $img, $contract, $type, $gender, $password, $zkt_id) {

        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'image' => $img,
            'fixed_salary' => $salary,
            'coming_from' => $date_from,
            'coming_to' => $date_to,
            'date_of_employment' => $date_of_employment,
            'contract_of_employment' => $contract,
            'type_id' => $type,
            'zkt_id' => $zkt_id,
            'password' => $password,
            'address' => $address,
            'date_of_birth' => $birthDate,
            'employee_id' => $id,
            'gender_id' => $gender,
            
        );
        $this->db->where('id', '1');
        $this->db->update('employee', $data);
    }

    // public function employeename($id) {

    //     $this->db->select('name');
    //     $this->db->from('employee');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get();
    //     $result = $query->result();
    //     //print_r($result) ;
    //     //echo "<br>";
    //     //echo($result[0]->name) ;
    //     return $result;
    // }

    public function alldemands_query($form_type) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->join('employee', 'employee.id = customer.employee_id', 'left outer');
         $this->db->where('form_type', $form_type);
        $query = $this->db->get();
        $result = $query->result();
      //  print_r($result) ;
        //echo "<br>";
        //echo($result[0]->name) ;
        return $result;
    }

   function login($username, $password) {
        
        $this->db->select('id,type_id,name, password');
        $this->db->from('employee');
        $this->db->where('name', $username);
        $this->db->where('password',$password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
         
        
    }

    public function alloffers_query($form_type) {
        $query = $this->db->query("SELECT c.id AS custid,c . *,e . *
        FROM customer AS c
        INNER JOIN employee AS e ON ( e.id = c.employee_id )
        WHERE (
        c.form_type =$form_type
        )");
        $result = $query->result();
        return $result;
    }

    public function allemployee_query() {
        $this->db->select('*');
        $this->db->from('employee');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function Deleteemployee_query($id) {
        $this->db->query('DELETE FROM `employee` WHERE `id`=' . $id); //handle for FK to keep up the data
    }

    public function Deleteoffer_query($id) {
        $this->db->query('DELETE FROM `customer` WHERE `id`=' . $id); //handle for FK to keep up the data
    }
    public function position_query() {
        $this->db->select('*');
        $this->db->from('position');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function type_query() {

        $this->db->select('*');
        $this->db->from('type');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }


    public function request_type()
    {

        $this->db->select('*');
        $this->db->from('request_type');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }


    public function finishing()
    {

        $this->db->select('*');
        $this->db->from('finishing');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function way_of_pay()
    {

        $this->db->select('*');
        $this->db->from('way_of_pay');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}

?>