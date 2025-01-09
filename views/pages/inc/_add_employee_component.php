<div class="dashboard_add_employee_section">
    <div class="dashboard_employee_btn_section">

        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <button class="btn btn-primary mt-4 ms-4  " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasAddEmployee" aria-controls="offcanvasAddEmployee">
                        Add Employee
                    </button>

                </div>
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-3 col-sm-12"></div>
            </div>

            <div class="off_canvas_section">

                <div class="offcanvas w-75 offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasAddEmployee"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            Add Employee Details
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body  ">
                        <div>
                            Here you can add your employee with their details
                        </div>

                        <div class="add_employee_form_section">
                            <div class="add_employee_form">
                                <div class="container m-4 ">
                                    <div class=" ">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="add_employee_name">Employee
                                                        name</label>
                                                    <input type="text" id="add_employee_name" name="add_employee_name"
                                                        class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="add_employee_age">Age</label>
                                                    <input type="text" id="add_employee_age" name="add_employee_age"
                                                        class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="add_employee_mobile_no">Employee
                                                        Mobile No</label>
                                                    <input type="text" id="add_employee_mobile_no"
                                                        name="add_employee_mobile_no" class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-12 col-sm-12 ">
                                                    <label for="add_employee_address">Employee
                                                        Address</label>
                                                    <textarea type="text" cols="30" rows="10" id="add_employee_address"
                                                        name="add_employee_address"
                                                        class="form-control mt-2"></textarea>
                                                </div>

                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="add_job_role">
                                                        Job Roll</label>
                                                    <input type="text" id="add_job_role" name="add_job_role"
                                                        class="form-control mt-2">
                                                </div>

                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="add_employee_salary_structure">
                                                        Salary Structure
                                                    </label>
                                                    <input type="text" id="add_employee_salary_structure"
                                                        name="add_employee_salary_structure" class="form-control mt-2">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12 ">
                                                    <label for="add_employee_assigned_shifts">
                                                        Assigned Shifts </label>

                                                    <select name="add_employee_assigned_shifts"
                                                        class="form-control mt-2 " id="add_employee_assigned_shifts">
                                                        <option value="">Select Assigned Shifts</option>
                                                        <option value="day_shift">Day Shifts</option>
                                                        <option value="night_shift">Night Shifts</option>
                                                    </select>

                                                </div>
                                                <div class="mb-3 col-md-12 col-sm-12 ">

                                                    <button type="submit" onclick="add_employee(event)"
                                                        class="btn btn-primary mt-4">Add Employee</button>

                                                    <!-- <button type="submit" onclick="add_employee()" class="btn btn-primary mt-4 ">Add Employee</button> -->

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