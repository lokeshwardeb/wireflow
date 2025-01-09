
<div class="dashboard_add_employee_section">
                                            <div class="dashboard_employee_btn_section">

                                                <div class="container">

                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-12">
                                                            <button class="btn btn-primary mt-4  " type="button"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasAddAdminUser"
                                                                aria-controls="offcanvasAddAdminUser">
                                                                Add New Admin User
                                                            </button>

                                                        </div>
                                                        <div class="col-md-3 col-sm-12"></div>
                                                        <div class="col-md-3 col-sm-12"></div>
                                                        <div class="col-md-3 col-sm-12"></div>
                                                    </div>

                                                    <div class="off_canvas_section">

                                                        <div class="offcanvas w-75 offcanvas-end" data-bs-scroll="true"
                                                            tabindex="-1" id="offcanvasAddAdminUser"
                                                            aria-labelledby="offcanvasExampleLabel">
                                                            <div class="offcanvas-header">
                                                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                                                                    Add Admin User Details
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body  ">
                                                                <div>
                                                                    Here you can add your admin user with their details
                                                                </div>

                                                                <div class="add_employee_form_section">
                                                                    <div class="add_employee_form">
                                                                        <div class="container m-4 ">
                                                                            <div class=" ">
                                                                                <form action="" method="post">
                                                                                    <div class="row">
                                                                                        <div class="mb-3">
                                                                                            <label
                                                                                                for="add_admin_user_name">Admin 
                                                                                                name</label>
                                                                                            <input type="text"
                                                                                                id="add_admin_user_name"
                                                                                                name="add_admin_user_name"
                                                                                                class="form-control mt-2">
                                                                                        </div>
                                                                                        <div
                                                                                            class="mb-3 col-md-6 col-sm-12 ">
                                                                                            <label
                                                                                                for="add_admin_user_email">Email</label>
                                                                                            <input type="text"
                                                                                                id="add_admin_user_email"
                                                                                                name="add_admin_user_email"
                                                                                                class="form-control mt-2">
                                                                                        </div>
                                                                                        <div
                                                                                            class="mb-3 col-md-6 col-sm-12 ">
                                                                                            <label
                                                                                                for="add_admin_user_password">Password</label>
                                                                                            <input type="text"
                                                                                                id="add_admin_user_password"
                                                                                                name="add_admin_user_password"
                                                                                                class="form-control mt-2">
                                                                                        </div>
                                                                                        <div
                                                                                            class="mb-3 col-md-6 col-sm-12 ">
                                                                                            <label
                                                                                                for="add_admin_user_cpassword">Confirm Password</label>
                                                                                            <input type="text"
                                                                                                id="add_admin_user_cpassword"
                                                                                                name="add_admin_user_cpassword"
                                                                                                class="form-control mt-2">
                                                                                        </div>
       
                                                                                        <div
                                                                                            class="mb-3 col-md-12 col-sm-12 ">

                                                                                            <button type="submit" onclick="add_admin_user(event)" name="add_user_admin_btn" class="btn btn-primary mt-4">Add Admin User</button>

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
