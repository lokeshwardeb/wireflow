<div class="dashboard_update_employee_section">
    <div class="dashboard_employee_btn_section">

        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <button class="btn btn-primary mt-4 ms-4 " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasAddEmployee" aria-controls="offcanvasAddEmployee">
                        Update Employee
                    </button>

                </div>
                <div class="col-md-3 col-sm-12">
                    <!-- add the delete button -->
                     <div class="delete_button_section mt-4 ">
                        <form action="" method="post">
                        <button type="submit" class="btn btn-outline-danger" name="delete_employee" >Delete Employee</button>
                        </form>
                     </div>
                </div>
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-3 col-sm-12"></div>
            </div>

            <div class="off_canvas_section">

                <div class="offcanvas w-75 offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasAddEmployee"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            Update Employee Details
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body  ">
                        <div>
                            Here you can update your employee details
                        </div>

                        <div class="update_employee_form_section">
                            <div class="update_employee_form">
                                <div class="container m-4 ">
                                    <div class=" ">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="update_employee_name">Employee
                                                        name</label>
                                                    <input type="text" id="update_employee_name" name="update_employee_name" value="<?php echo $get_emp_name; ?>" 
                                                        class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="update_employee_age">Age</label>
                                                    <input type="text" id="update_employee_age" name="update_employee_age" value="<?php echo $get_emp_name; ?>"
                                                        class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="update_employee_mobile_no">Employee
                                                        Mobile No</label>
                                                    <input type="text" id="update_employee_mobile_no"
                                                        name="update_employee_mobile_no" value="<?php echo $get_emp_mobile_no; ?>" class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-12 col-sm-12 ">
                                                    <label for="update_employee_address">Employee
                                                        Address</label>
                                                    <textarea type="text" cols="30" rows="10" id="update_employee_address"
                                                        name="update_employee_address"
                                                        class="form-control mt-2"><?php echo $get_emp_address; ?></textarea>
                                                </div>

                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="add_job_role">
                                                        Job Roll</label>
                                                    <input type="text" id="add_job_role" name="update_job_role" value="<?php echo $get_emp_job_role; ?>"
                                                        class="form-control mt-2">
                                                </div>

                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="update_employee_salary_structure">
                                                        Salary Structure
                                                    </label>
                                                    <input type="text" id="update_employee_salary_structure"
                                                        name="update_employee_salary_structure" value="<?php echo $get_emp_salary_structure; ?>" class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="update_employee_assigned_shifts">
                                                        Assigned Shifts </label>

                                                    <select name="update_employee_assigned_shifts"
                                                        class="form-control mt-2 " id="update_employee_assigned_shifts">
                                                        <option value="">Select Assigned Shifts</option>
                                                        <option value="day_shift" <?php
                                                        
                                                        if($get_emp_assigned_shifts == 'day_shift'){
                                                            echo "selected";
                                                        }

                                                        ?>  >Day Shifts</option>
                                                        <option  value="night_shift" <?php
                                                        
                                                        if($get_emp_assigned_shifts == 'night_shift'){
                                                            echo "selected";
                                                        }

                                                        ?> >Night Shifts</option>
                                                    </select>

                                                </div>
                                                <div class="mb-3 col-md-12 col-sm-12 ">

                                                    <button type="submit" onclick="update_employee(event)"
                                                        class="btn btn-primary mt-4">Update Employee</button>

                                                    <!-- <button type="submit" onclick="update_employee()" class="btn btn-primary mt-4 ">Add Employee</button> -->

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- offcanvas section ends here -->

            </div>


        </div>


    </div>




</div>