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

            if($emp_name == '' || $emp_age){
                // that means the employee name is blank and it should through an error

                $info = [

                    "status" => "error",
                    "msg" => "The data cannot be empty or blank !!",

                ];
                
                echo json_encode($info);

                // return json_encode($info);
                return;


            }




        }
    }
}
