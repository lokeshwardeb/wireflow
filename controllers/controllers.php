<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/models.php';


class controllers extends models
{

    public function alert($alert_type, $alert_data)
    {
        if ($alert_type == 'success') {
            return ('<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success !!</strong> ' . $alert_data . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        if ($alert_type == 'danger') {
            return ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error !!</strong> ' . $alert_data . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
    }

    public function check_login(){
        
    }

    public function add_employee(){
        if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
            // that means the user has submitted the form
            $emp_name = $this->pure_data($_POST['emp_name']);
            $emp_age = $this->pure_data($_POST['emp_age']);
            $emp_mobile_no = $this->pure_data($_POST['emp_mobile_no']);
            $emp_address = $this->pure_data($_POST['emp_address']);
            $emp_job_role = $this->pure_data($_POST['emp_job_role']);
            $emp_salary_structure = $this->pure_data($_POST['emp_salary_structure']);
            $emp_assigned_shifts = $this->pure_data($_POST['emp_assigned_shifts']);

            if($emp_name == '' || $emp_age == '' || $emp_age == '' || $emp_mobile_no == '' || $emp_address == '' || $emp_job_role == '' || $emp_salary_structure == '' || $emp_assigned_shifts == '' ){
                // that means the data is blank and it should through an error

                $info = [

                    "status" => "error",
                    "msg" => "The data cannot be empty or blank !!",

                ];
                
                echo json_encode($info);

                // return json_encode($info);
                return;


            }

            // that means the data is not blank and it should be continue the insertion process

            // now first check if the data is already exist or not to the software
            $result_check_data = $this->get_data_where("employees", "`emp_name` = '$emp_name' AND `emp_age` = '$emp_age' AND `emp_mobile_no` = '$emp_mobile_no' AND `emp_address` = '$emp_address' AND `emp_job_role` = '$emp_job_role' AND `emp_salary_structure` = '$emp_salary_structure' AND `emp_assigned_shifts` = '$emp_assigned_shifts'");


            if($result_check_data->num_rows > 0){
                // that means the data is exist and it should be through and error and it should not continue to the process
                $info = [
                    "status" => "error",
                    "msg" => "The employee already exists to the software !!",
                ];
                echo json_encode($info);

                return;
            }



            // if the employee details is not exists to the software then continue the process and add it to the software

            $result_add_employee = $this->insert("employees", "`emp_name`, `emp_age`, `emp_mobile_no`, `emp_address`, `emp_job_role`, `emp_salary_structure`, `emp_assigned_shifts`", "'$emp_name', '$emp_age', '$emp_mobile_no', '$emp_address', '$emp_job_role', '$emp_salary_structure', '$emp_assigned_shifts'");

            if($result_add_employee){
                // that means the employee added successfully
                
                $info = [

                    "status" => "success",
                    "msg" => "The employee has been added successfully !!",

                ];
                
                echo json_encode($info);

                return;

            }else{
                // that means there was something error while adding the employee to the software
                $info = [
                    "status" => "error",
                    "msg" => "There was something error while adding the employee info to the software !!",
                ];

                echo json_encode($info);

                return;

            }




        }
    }
}
