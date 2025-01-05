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

    public function check_login()
    {
        if(!isset($_SESSION['admin_user_name'])){
            // that means the user is not loggedin and it shoud return the user to the login page
            echo '
            <script>
                window.location.href="/login";
            </script>
            ';
        }
    }

<<<<<<< HEAD
    public function login_page_check_login(){
        if(isset($_SESSION['admin_user_name'])){
            // that means the user is loggedin and it should return the user to the dashboard page
            echo '
            <script>
                window.location.href="/dashboard";
            </script>
            ';
        }
    }


    public function login_admin_user(){
        if(isset($_POST['login'])){
            $email = $this->pure_data($_POST['email']);
            $password = $this->pure_data($_POST['password']);

            // check if the data is blank or not
            if($email == '' || $password == ''){
                // that means the data is blank and if should not continue the process
                echo '
                
                <script>
                    danger_alert("Error !!", "The data cannot be blank !! Please put your credentials to login !!");
                </script>
                
                ';

                return;
            }

            // now check if the user exist or not into the software
            $result_check_user = $this->get_data_where("admin_users", " `admin_email` = '$email' ");

            if($result_check_user){
                if($result_check_user->num_rows > 0){
                    // that means the user is exsits on the software

                    while($row = $result_check_user->fetch_assoc()){
                        $admin_name = $row['admin_name'];
                        $admin_db_hash_pass = $row['admin_password'];
                        $admin_email = $row['admin_email'];
                        $admin_added_datetime = $row['datetime'];

                        if(password_verify($password, $admin_db_hash_pass)){
                            // that means the password is matched and the user is authentic

                            $_SESSION['loggedin_status'] = true;
                            $_SESSION['loggedin_status_msg'] = "loggedin_successful";
                            $_SESSION['admin_user_name'] = $admin_name;
                            $_SESSION['admin_email'] = $admin_email;
                            $_SESSION['admin_added_datetime'] = $admin_added_datetime;

                            // now redirect the user to the dashboard

                            echo '
                            
                            
                            <script>
                            window.location.href="/dashboard";
                            </script>
                            
                            ';






                        }else{
                            // that means the user creadential is not matched
                            echo '
                            <script>
                                danger_alert("Error !!", "Password doesnot matched !! Please give your valid credentials to login the software !!");
                            </script>
                            ';
                        }

                        



                    }

                }else{
                    // that means the user is not exist to the software
                    echo '
                    <script>
                        danger_alert("Error !!", "The user doesnot exists to the software !! Please use your valid credentials to login the software !!");
                    </script>
                    ';
                }
            }

            
            
        }
    }



    public function add_admin_user()
    {
        if (isset($_POST['add_user_admin_btn']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

            $admin_name = $this->pure_data($_POST['admin_name']);
            $admin_email = $this->pure_data($_POST['admin_email']);
            $admin_password = $this->pure_data($_POST['admin_password']);
            $admin_cpassword = $this->pure_data($_POST['admin_cpassword']);

            if ($admin_name == '' || $admin_email == '' || $admin_password == '' || $admin_cpassword == '') {
=======
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
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
                // that means the data is blank and it should through an error

                $info = [

                    "status" => "error",
                    "msg" => "The data cannot be empty or blank !!",

                ];

                echo json_encode($info);

                // return json_encode($info);
                return;


            }

<<<<<<< HEAD
            // check if the password and cpassword match or not
            if ($admin_password != $admin_cpassword) {
                // that means the password does not matched and it should through an error and stop the process

                $info = [

                    "status" => "error",
                    "msg" => "The Passwords are not matched !! Please provide the correct credentials !!",

                ];

                echo json_encode($info);

                // return json_encode($info);
                return;


            }

            // make the hash of the password
            $hash = password_hash($admin_password, PASSWORD_DEFAULT);


            // now check if the admin user already exist into the software with the credentials
            $result_check_admin_user = $this->get_data_where("admin_users", " `admin_name` = '$admin_name' AND `admin_email` = '$admin_email';");

            if($result_check_admin_user){

                if($result_check_admin_user->num_rows > 0){
                    // that means the admin user already exists with the creadentials and the same user cannot be added again to the software and it should through and error and stop the process

                $info = [
                    "status" => "error",
                    "msg" => "The admin user already exists to the software with the credentials !!",
                ];

                echo json_encode($info);

                return;
                }

                

                

            }


            // now the admin user should add into the software


            // now add the admin user into the software with the informations
            $result_add_admin_user = $this->insert("admin_users", "`admin_name`, `admin_email`, `admin_password`", "'$admin_name', '$admin_email', '$hash'");

            if ($result_add_admin_user) {
                // that means the admin user has been successfully added into the software
                $info = [
                    "status" => "success",
                    "msg" => "The admin user has been added successfully !!",
                ];

                echo json_encode($info);

                return;

            } else {
                // that means there were some errors while adding the user into the software
                $info = [
                    "status" => "success",
                    "msg" => "There were something error while added the admin users into the software !!",
                ];

                echo json_encode($info);

                return;

            }




            // $info = [

            //     "status" => "success",
            //     "msg" => "The post request runs",

            // ];

            // echo json_encode($info);

            // return;

        } 
        
    }



    public function add_employee()
    {
        if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
            // that means the user has submitted the form
            $emp_name = $this->pure_data($_POST['emp_name']);
            $emp_age = $this->pure_data($_POST['emp_age']);
            $emp_mobile_no = $this->pure_data($_POST['emp_mobile_no']);
            $emp_address = $this->pure_data($_POST['emp_address']);
            $emp_job_role = $this->pure_data($_POST['emp_job_role']);
            $emp_salary_structure = $this->pure_data($_POST['emp_salary_structure']);
            $emp_assigned_shifts = $this->pure_data($_POST['emp_assigned_shifts']);

            if ($emp_name == '' || $emp_age == '' || $emp_age == '' || $emp_mobile_no == '' || $emp_address == '' || $emp_job_role == '' || $emp_salary_structure == '' || $emp_assigned_shifts == '') {

                // that means the data is blank and it should through an error

                $info = [

                    "status" => "error",
                    "msg" => "The data cannot be empty or blank !!",

                ];

                echo json_encode($info);

                // return json_encode($info);
                return;


            }

=======
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
            // that means the data is not blank and it should be continue the insertion process

            // now first check if the data is already exist or not to the software
            $result_check_data = $this->get_data_where("employees", "`emp_name` = '$emp_name' AND `emp_age` = '$emp_age' AND `emp_mobile_no` = '$emp_mobile_no' AND `emp_address` = '$emp_address' AND `emp_job_role` = '$emp_job_role' AND `emp_salary_structure` = '$emp_salary_structure' AND `emp_assigned_shifts` = '$emp_assigned_shifts'");


<<<<<<< HEAD
            if ($result_check_data->num_rows > 0) {
=======
            if($result_check_data->num_rows > 0){
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
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

<<<<<<< HEAD
            if ($result_add_employee) {
                // that means the employee added successfully

=======
            if($result_add_employee){
                // that means the employee added successfully
                
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
                $info = [

                    "status" => "success",
                    "msg" => "The employee has been added successfully !!",

                ];
<<<<<<< HEAD

=======
                
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
                echo json_encode($info);

                return;

<<<<<<< HEAD
            } else {
=======
            }else{
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
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

    public function update_employee()
    {
        if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
            // that means the user has submitted the form
            $emp_id = $this->pure_data($_POST['emp_id']);
            $emp_name = $this->pure_data($_POST['emp_name']);
            $emp_age = $this->pure_data($_POST['emp_age']);
            $emp_mobile_no = $this->pure_data($_POST['emp_mobile_no']);
            $emp_address = $this->pure_data($_POST['emp_address']);
            $emp_job_role = $this->pure_data($_POST['emp_job_role']);
            $emp_salary_structure = $this->pure_data($_POST['emp_salary_structure']);
            $emp_assigned_shifts = $this->pure_data($_POST['emp_assigned_shifts']);

            if ($emp_name == '' || $emp_age == '' || $emp_age == '' || $emp_mobile_no == '' || $emp_address == '' || $emp_job_role == '' || $emp_salary_structure == '' || $emp_assigned_shifts == '') {

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


            // if ($result_check_data->num_rows > 0) {
            //     // that means the user is exist in the software and it should be continue the process

            //     // while($result_update_emp_row = $result_check_data->fetch_assoc()){
            //     //     $get_emp_id 
            //     // }

            // }



            // if the employee details is not exists to the software then continue the process and add it to the software

            // $result_add_employee = $this->insert("employees", "`emp_name`, `emp_age`, `emp_mobile_no`, `emp_address`, `emp_job_role`, `emp_salary_structure`, `emp_assigned_shifts`", "'$emp_name', '$emp_age', '$emp_mobile_no', '$emp_address', '$emp_job_role', '$emp_salary_structure', '$emp_assigned_shifts'");



            $result_update_employee = $this->update_where("employees", " `emp_name` = '$emp_name', `emp_age` = '$emp_age', `emp_mobile_no` = '$emp_mobile_no', `emp_address` = '$emp_address', `emp_job_role` = '$emp_job_role', `emp_salary_structure` = '$emp_salary_structure', `emp_assigned_shifts` = '$emp_assigned_shifts'", " `emp_id` = '$emp_id' ");

            if ($result_update_employee) {
                // that means the employee added successfully

                $info = [

                    "status" => "success",
                    "msg" => "The employee has been updated successfully !!",

                ];

                echo json_encode($info);

                return;

            } else {
                // that means there was something error while adding the employee to the software
                $info = [
                    "status" => "error",
                    "msg" => "There was something error while updating the employee info to the software !!",
                ];

                echo json_encode($info);

                return;

            }




        }
    }



    public function delete_employee(){
        if(isset($_POST['delete_employee'])){
            $get_emp_id = $this->pure_data($_GET['get_emp_id']);

            // check if the data already exists or not
            $result_check = $this->get_data_where("employees", " `emp_id` = '$get_emp_id' ");

            if($result_check){
                if($result_check->num_rows < 0){
                    // that means the user doesnot exists to the software and it should not continue the process

                    echo '
                    <script>
                        danger_alert("Error !!", "The user does not exist to the software and you cannot delete the user !! Note that a major technical error happened !! Please contact the developer of the software to resolve it !!");
                    </script>
                    ';

                    return;
                    

                }
            }

            // now that means the user is exist and we should continue the process

            // now delete the user from the software
            $result_delete_employee = $this->delete("employees", " `emp_id` = '$get_emp_id' ");

            if($result_delete_employee){
                // that means the employee deleted successfully
                echo '
                <script>
                    success_alert("Sucess !!", "The employee has been deleted successfully !!");
                </script>
                ';
            }else{
                // that means there was something error while deleting the employee from the software

                echo '
                <script>
                    danger_alert("Error !!", "There was something major technical error while deleting the user from the software !! Please immediately contact to the developer for resolve !!");
                </script>
                ';


            }


        }
    }




}
