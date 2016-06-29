<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Header('Content-Type: text/html; charset=UTF-8');

class employee extends CI_Controller {

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
    }

    public function index() {
        $this->load->view('Employees/AddEmployee');
    }

//employee table 
    public function editemployeeview() {
        $this->load->view('Employees/employeedata');
    }

    public function upload_image() {
        $Empphoto = NULL;
        $config['upload_path'] = './_/images';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|bmp';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('profile')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $Empphoto = $data['file_name'];
        }
        return $Empphoto;
    }

    public function upload_contract() {
        $Empphoto = NULL;
        $config['upload_path'] = './_/images';
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('contract')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            //echo $data[0];
            $Empphoto = $data['file_name'];
        }
        return $Empphoto;
    }

    public function insertemployee() {
        //echo "aya";
        $name = $this->input->post('emp_name');
        $email = $this->input->post('emp_email');
        $birthDate = $this->input->post('emp_birthdate');
        $address = $this->input->post('emp_address');
        $phone = $this->input->post('emp_mobile');
        $id = $this->input->post('emp_id');
        $salary = $this->input->post('emp_salary');
        $date_from = $this->input->post('emp_fromdate');
        $date_to = $this->input->post('emp_todate');
        $date_of_employment = $this->input->post('employment_date');
        $img = $this->upload_image();
        $contract = $this->upload_contract();
        $gender = $this->input->post('gender');
        $password = $this->input->post('password');
        $zkt_id = $this->input->post('zkt_id');


        $type = $this->input->post('department');

        $this->EmployeeModel->AddEmployee_query($name, $email, $birthDate, $address, $phone, $id, $salary, $date_from, $date_to, $date_of_employment, $img, $contract, $type, $gender, $password, $zkt_id);

        header('location:' . $this->config->base_url() . 'index.php/employee');
    }

    public function editemployee() {

        //$id = $this->uri->segment(3);
        $id = 1;
        $data['employee'] = $this->EmployeeModel->employeedata($id);
        //echo $data['employee'][0]->name;
        $this->load->view('Employees/employeedata', $data['employee'][0]);
    }

    public function updateemployee() {
        $name = $this->input->post('emp_name');
        $email = $this->input->post('emp_email');
        $birthDate = $this->input->post('emp_birthdate');
        $address = $this->input->post('emp_address');
        $phone = $this->input->post('emp_mobile');
        $id = $this->input->post('emp_id');
        $salary = $this->input->post('emp_salary');
        $date_from = $this->input->post('emp_fromdate');
        $date_to = $this->input->post('emp_todate');
        $date_of_employment = $this->input->post('employment_date');
        $img = $this->upload_image();
        $contract = $this->upload_contract();
        $gender = $this->input->post('gender');
        $password = $this->input->post('password');
        $zkt_id = $this->input->post('zkt_id');

        $type = $this->input->post('department');

        $this->EmployeeModel->updateEmployee_query($name, $email, $birthDate, $address, $phone, $id, $salary, $date_from, $date_to, $date_of_employment, $img, $contract, $type, $gender, $password, $zkt_id);

        header('location:' . $this->config->base_url() . 'employee/showemployee');
    }

    //customer table
    // public function alldemands() {
    //     $form_type = 0;
    //     //$data['students'] = $this->update_model->show_students();
    //     $data['demands'] = $this->EmployeeModel->alldemands_query($form_type);
    //     $employee_id = $data['demands'][0]->employee_id;
    //     $data['employee_name'] = $this->EmployeeModel->employeename($employee_id);
    //     $this->load->view('Requests/demand', $data);
    // }
    // public function alloffers() {
    //     $form_type = 1;
    //     //$data['students'] = $this->update_model->show_students();
    //     $data['offers'] = $this->EmployeeModel->alloffers_query($form_type);
    //     //echo $data['offers'];
    //     $employee_id = $data['offers'][0]->employee_id;
    //     $data['employee_name'] = $this->EmployeeModel->employeename($employee_id);
    //     $this->load->view('Requests/offer', $data);
    // }

    public function showemployee() {
        $data['allemployee'] = $this->EmployeeModel->allemployee_query();
        $data['types'] = $this->EmployeeModel->type_query();
        $data['position'] = $this->EmployeeModel->position_query();

        // $id=$data['alllemployee']=$this->EmployeeModel->position_query();
        $this->load->view('Employees/ShowEmployee', $data);
    }

    public function offersform() {
        $form_type = 0;
        //$data['students'] = $this->update_model->show_students();
        $data['offers'] = $this->EmployeeModel->alloffers_query($form_type);
        //echo $data['offers'];
        $employee_id = $data['offers'][0]->employee_id;
        //  $data['employee_name'] = $this->EmployeeModel->employeename($employee_id);

        $data['request_type'] = $this->EmployeeModel->request_type();
        $data['finishing'] = $this->EmployeeModel->finishing();
        $data['way_of_pay'] = $this->EmployeeModel->way_of_pay();
        $this->load->view('Requests/offer', $data);
        //  $this->load->view('Requests/offer');
    }

    public function demandsform() {
        $form_type = 1;
        //$data['students'] = $this->update_model->show_students();
        $data['demands'] = $this->EmployeeModel->alldemands_query($form_type);
        $employee_id = $data['demands'][0]->employee_id;
        //$data['employee_name'] = $this->EmployeeModel->employeename($employee_id);
        $this->load->view('Requests/demand', $data);
        // $this->load->view('Requests/demand');
    }

    public function addoffer() {
        $date = $this->input->post('date');
        $request_type = $this->input->post('requesttype');
        $way_of_pay = $this->input->post('pay');
        $purpose = $this->input->post('purpose');
        $period = $this->input->post('period');
        $commission = $this->input->post('commision');
        $area1 = $this->input->post('Areas1');
        $area2 = $this->input->post('Areas2');
        $area3 = $this->input->post('Areas3');
        $area4 = $this->input->post('Areas4');
        $size = $this->input->post('size');
        $floors = $this->input->post('floors');
        $rooms = $this->input->post('rooms');
        $reception = $this->input->post('reception');
        $bathroom = $this->input->post('bathroom');
        $notes = $this->input->post('note');
        $finishing_id = $this->input->post('finishing');
        $check_date1 = $this->input->post('date1');
        $check_date2 = $this->input->post('date2');
        $check_date3 = $this->input->post('date3');
        $extra = $this->input->post('notes');

        $customer_name = $this->input->post('name');
        $job = $this->input->post('job');
        $customer_phone2 = $this->input->post('tele2');
        $customer_phone1 = $this->input->post('tele1');
        $source = $this->input->post('source');
        $form_type = 0; //offers && demands=1
        $employee_id = 1;

        $this->EmployeeModel->Addrequest_query($date, $request_type, $way_of_pay, $purpose, $period, $commission, $area1, $area2, $area3, $area4, $size, $floors, $rooms, $reception, $bathroom, $notes, $finishing_id, $check_date1, $check_date2, $check_date3, $extra, $customer_name, $job, $customer_phone2, $customer_phone1, $source, $form_type, $employee_id
        );

        header('location:' . $this->config->base_url() . 'employee/offersform');
    }

    public function adddemand() {
        $date = $this->input->post('date');
        $request_type = $this->input->post('requesttype');
        $way_of_pay = $this->input->post('pay');
        $purpose = $this->input->post('purpose');
        $period = $this->input->post('period');
        $commission = $this->input->post('commision');
        $area1 = $this->input->post('Areas1');
        $area2 = $this->input->post('Areas2');
        $area3 = $this->input->post('Areas3');
        $area4 = $this->input->post('Areas4');
        $size = $this->input->post('size');
        $floors = $this->input->post('floors');
        $rooms = $this->input->post('rooms');
        $reception = $this->input->post('reception');
        $bathroom = $this->input->post('bathroom');
        $notes = $this->input->post('note');
        $finishing_id = $this->input->post('finishing');
        $check_date1 = $this->input->post('date1');
        $check_date2 = $this->input->post('date2');
        $check_date3 = $this->input->post('date3');
        $extra = $this->input->post('notes');

        $customer_name = $this->input->post('name');
        $job = $this->input->post('job');
        $customer_phone2 = $this->input->post('tele2');
        $customer_phone1 = $this->input->post('tele1');
        $source = $this->input->post('source');
        $form_type = 1; //offers && demands=1
        $employee_id = 1;

        $this->EmployeeModel->Addrequest_query($date, $request_type, $way_of_pay, $purpose, $period, $commission, $area1, $area2, $area3, $area4, $size, $floors, $rooms, $reception, $bathroom, $notes, $finishing_id, $check_date1, $check_date2, $check_date3, $extra, $customer_name, $job, $customer_phone2, $customer_phone1, $source, $form_type, $employee_id
        );

        header('location:' . $this->config->base_url() . 'employee/offersform');
    }

    public function deleteemployee() {
        $id = $this->input->post('delete_employeeid');
        // echo $id;
        $del_result = $this->EmployeeModel->Deleteemployee_query($id);
        header('location:' . $this->config->base_url() . 'employee/ShowEmployee');
    }

    public function deleteoffer() {
        $id = $this->input->post('delete_offerid');
        echo $id;
        $del_result = $this->EmployeeModel->Deleteoffer_query($id);
        header('location:' . $this->config->base_url() . 'employee/offersform');
    }

    public function downloadFile() {

        $fileName = $this->input->post('filepath');
        $path = base_url() . '_/images/';
        header("Cache-control:public");
        header("content-Disposition: attachment; filename=$path");
        header("content-type:application/zip");
        // ob_clean();
        ob_end_clean();
        $data = file_get_contents(base_url() . '_/images/' . $fileName);
        force_download($fileName, $data);
        //readfile('base_url()'.'_/images/'.$fileName);
        //exit($data);
//      $filedown = pathinfo($this->input->post('filepath'),PATHINFO_BASENAME);
//      $datas = file_get_contents(base_url().'_/images/'.$filedown);
// header("content-type:audio/mpeg3");
// header('content-Disposition: attachment; filename="'.$filedown.'"');
// readfile('base_url()'.'_/images/'.$filedown);
// exit();
        // force_download($filedown, $datas);
    }

    //sarah
    public function Inbox() {
        header('location:' . $this->config->base_url() . 'employee/sendRequest');
    }

    public function Discounts() {
        $disdata['discounts'] = $this->TimemangeModel->selectDiscount();
        $this->load->view('Treasury/Discount', $disdata);
    }

    public function commission() {
        $commission['commission'] = $this->TimemangeModel->selectCommissions();
        $this->load->view('Treasury/Commission', $commission);
    }

    public function adddiscount() {
        $this->form_validation->set_rules('late_time', 'Late Time', 'trim|numeric|xss_clean');
        $this->form_validation->set_rules('late_price', 'Late Price', 'trim|numeric');
        $data['late_time'] = $this->input->post('late_time');
        $data['late_price'] = $this->input->post('late_price');
        $this->TimemangeModel->AddTime($data);
        $disdata['discounts'] = $this->TimemangeModel->selectDiscount();
//       echo"<pre>"; print_r($disdata);
//                die();
        $this->load->view('Treasury/Discount', $disdata);
    }

    public function addCommission() {
        $this->form_validation->set_rules('late_time', 'Late Time', 'trim|numeric|xss_clean');
        $this->form_validation->set_rules('late_price', 'Late Price', 'trim|numeric');
        $data['overtime_time'] = $this->input->post('overtime_time');
        $data['overtime_money'] = $this->input->post('overtime_money');
        $this->TimemangeModel->AddTime($data);
        $commission['commission'] = $this->TimemangeModel->selectCommissions();
//       echo"<pre>"; print_r($disdata);
//                die();
        $this->load->view('Treasury/Commission', $commission);
    }

    public function editDiscount() {
        $id = $this->input->post('id');
        $_lateTime = $this->input->post('late_time');
        $_latePrice = $this->input->post('late_price');
        $this->TimemangeModel->editDisc($_lateTime, $_latePrice, $id);
        header('location:' . $this->config->base_url() . 'employee/Discounts');
    }

    public function deleteDiscount() {
        $id = $this->input->post('id');
        $this->TimemangeModel->deleteDis($id);
        header('location:' . $this->config->base_url() . 'employee/Discounts');
    }

    public function deletecomm() {
        $id = $this->input->post('id');
        $this->TimemangeModel->deleteDis($id);
        header('location:' . $this->config->base_url() . 'employee/Commission');
    }

    public function Request() {
        $this->load->view('manger/permissions');
    }

    public function tookpermission() {
        //  $id = $this->input->post('id');

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $id = $session_data['id'];
            // var_dump($id);
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            $dtFrom = date('Y-m-d H:i:s', strtotime($from));
            //var_dump($dtFrom);

            $dtTo = date('Y-m-d H:i:s', strtotime($to));
            // var_dump($dtTo);
            // die();
            if ($from > $to) {
                // die('mm');
                echo"can't insert";
                $this->form_validation->set_message('check_date', 'الوقت من لابد ان يكون اصغر من وقت الي');
            } else {
                // die('sarah');
                $data['date_to'] = $dtTo;
                $data['date_from'] = $dtFrom;
                $data['employee_id'] = $id;
                // var_dump($data);
                $this->PermissionModel->addPermission($data);

                echo 'تم اضافه الاذن بنجاح انتظر موافقه المدير';

                //  header('location:' . $this->config->base_url() . 'employee/sendRequest');
            }
        }
    }

    public function sendRequest() {

        //if new data enter in database get all data if manger response =0 and add notifications +1
        //when manger open find new message with data from databases 
        //select permission of this employee id manger response =0
        $data['count'] = $this->PermissionModel->countRequest();
        $data['requests'] = $this->PermissionModel->getRespondingRequest();
//        if ($result) {
//            foreach ($result as $row) {
//                $mangerReply['replay'] = $row->manager_reply;
//                $mangerReply['date_to'] = $row->date_to;
//                $mangerReply['date_from'] = $row->date_from;
//            }
        $this->load->view('Inbox/inbox', $data);

        //  $this->load->view('toolbar.php', $mangerReply);
//        }
    }

    public function editCommission() {
        $id = $this->input->post('id');
        $_overTime = $this->input->post('overtime_time');
        $_overPrice = $this->input->post('overtime_money');
        $this->TimemangeModel->editComm($_overTime, $_overPrice, $id);
        header('location:' . $this->config->base_url() . 'employee/Commission');
    }

    //to agree request from manger edit data base with 1 at this employee id and add another column with agrement or refuse
    public function agreeRequest() {
        $id = $this->input->post('employeeid');
        $this->EmployeeModel->editRequest($id);
        $this->EmployeeModel->addAgreement($id);
    }

    public function RefuseRequest() {
        $id = $this->input->post('employeeid');
        $this->EmployeeModel->RefuseRequest($id);
    }

    public function employeeInbox() {
        header('location:' . $this->config->base_url() . 'employee/recevieRequest');
    }

//recieve request to employee inbox where id is for employee
    public function recevieRequest() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $id = $session_data['id'];
            $data['count'] = $this->PermissionModel->countemployeeRequest($id);
            $data['replays'] = $this->PermissionModel->getRecievedRequest($id);
            $this->load->view('Inbox/UserInbox', $data);
        }
    }

    //when employee read msg it will be appear again in notification bar
    //update table employee and make readmessage=1
    public function readMsg() {
        $employeeId = $this->input->post('employeeid');
        var_dump($employeeId);
        $msgId = $this->input->post('msgid');
        var_dump($msgId);
        $this->PermissionModel->readMsg($employeeId,$msgId);
    }

}
