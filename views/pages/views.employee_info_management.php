<?php
// session_start();

// add the active title name or the page name if you want to configure
// $active_title_name = "Dashboard";

// add the active sidebar variable for activate sidebar and also give the sidebar link name which you want to activate to your particular page

// $active_sidebar = "dashboard" ; you can use it to add the active link to the dashboard sidebar link and activate the sidebar link

$active_sidebar = "dashboard";


// add the header.php after the required mvc files
require_once __DIR__ . '/inc/_header.php';


// $get_emp_id = $controllers->pure_data($_GET['get_emp_id']);

// if (!isset($_GET['get_emp_id'])) {
//     // that means the employee id is not set and it should not continue the process
//     echo '
//     <script>
//         window.location.href="/dashboard";
//     </script>
//     ';

//     return;

// }


if (empty($_GET['get_emp_id'])) {
    // Redirect to the dashboard if get_emp_id is not set or is empty

    echo '
        <script>
            window.location.href="/dashboard";
        </script>
        ';

    return;

    // header("Location: /dashboard");
    // exit;
}




$get_emp_id = $controllers->pure_data($_GET['get_emp_id']);


// add the employee delete methdo for the employee deleting features 
$controllers->delete_employee();




?>




<!-- main code starts here -->

<!-- <script>
        success_alert("the check", "alert runs");
    </script> -->

<main>
    <div class="main_section">
        <div class="row display_main_row ">
            <div class="col-md-2 dektop_sidebar_display_tracker   col-sm-12">
                <div class="desktop_sidebar">
                    <?php

                    require_once __DIR__ . '/inc/_desktop_sidebar.php';

                    ?>
                </div>


            </div>
            <div class="col-md-10 col-sm-12">

                <div class="main_page_contents">
                    <div class="main_contents">
                        <div class="page main_content_page mt-3 ">
                            <div class="">
                                <div class="dashboard_section mt-4  ">
                                    <div class="dashboard_and_mobile_nav_section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="dashboard_wrapper ms-4">
                                                    <div class="section_title fs-3  pt-3 ">
                                                        Employee Information
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mobile_navbar_inc_section  d-xl-none   mt-4 ">
                                                    <div class="container">
                                                        <?php

                                                        require_once __DIR__ . '/inc/_mobile_sidebar.php';

                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <hr>


                                    <div class="employee_info_section mt-4 pt-4 ">
                                        <div class="container">
                                            <div class="employee_info_main_section">

                                                <?php
                                                $result_get_emp_info = $controllers->get_data_where("employees", " `emp_id` = '$get_emp_id' ");

                                                if ($result_get_emp_info) {
                                                    if ($result_get_emp_info->num_rows > 0) {
                                                        // that means the user has exists on the software
                                                
                                                        while ($row = $result_get_emp_info->fetch_assoc()) {
                                                            $get_emp_name = $row['emp_name'];
                                                            $get_emp_age = $row['emp_age'];
                                                            $get_emp_mobile_no = $row['emp_mobile_no'];
                                                            $get_emp_address = $row['emp_address'];
                                                            $get_emp_job_role = $row['emp_job_role'];
                                                            $get_emp_salary_structure = $row['emp_salary_structure'];
                                                            $get_emp_assigned_shifts = $row['emp_assigned_shifts'];
                                                        }


                                                    } else {
                                                        // that means the user doesnot exist to the software
                                                

                                                        $get_emp_name = '';
                                                        $get_emp_age = '';
                                                        $get_emp_mobile_no = '';
                                                        $get_emp_address = '';
                                                        $get_emp_job_role = '';
                                                        $get_emp_salary_structure = '';
                                                        $get_emp_assigned_shifts = '';


                                                    }
                                                }




                                                ?>


                                                <div class="emp_id m-4 ">
                                                    <input type="hidden" name="emp_id" id="emp_id" value="<?php echo $get_emp_id; ?>" >
                                                </div>
                                                <div class="emp_name m-4 ">
                                                    <span
                                                        class="emp_info_section_title  inknut_regular text-primary fw-bold  ">
                                                        Employee Name :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_name;
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="emp_age m-4   ">
                                                    <span
                                                        class="emp_info_section_title inknut_regular fw-bold text-primary ">
                                                        Age :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_age;
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="emp_mobile m-4   ">
                                                    <span
                                                        class="emp_info_section_title inknut_regular text-primary fw-bold  ">
                                                        Mobile No :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_mobile_no;
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="emp_address m-4 ">
                                                    <span
                                                        class="emp_info_section_title text-primary inknut_regular fw-bold  ">
                                                        Employee Address :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_address;
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="emp_job_role m-4 ">
                                                    <span
                                                        class="emp_info_section_title text-primary inknut_regular fw-bold  ">
                                                        Employee Job Role :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_job_role;
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="emp_salary_structure m-4 ">
                                                    <span
                                                        class="emp_info_section_title text-primary inknut_regular fw-bold  ">
                                                        Employee Salary structure :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_salary_structure;
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="emp_assigned_shifts m-4 ">
                                                    <span
                                                        class="emp_info_section_title inknut_regular fw-bold text-primary ">
                                                        Assigned shifts :
                                                    </span>
                                                    <span class="emp_info ps-2 pe-2  ">
                                                        <?php
                                                        echo $get_emp_assigned_shifts;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <?php

                                    require_once __DIR__ . '/inc/_update_employee_component.php';

                                    ?>
                                    




                                    <!-- <div class="dashboard_employee_table_section mt-4 pt-4 ">
                                        <div class="container">
                                            <div class="dashboard_employee_table table-responsive mt-4 ">
                                                <table class="table mb-5  " id="datatable_info_table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Employee name</th>
                                                            <th scope="col">Age</th>
                                                            <th scope="col">Mobile No</th>
                                                            <th scope="col">Job Role</th>
                                                            <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        $result_get_employee_data = $controllers->get_data("employees");

                                                        if ($result_get_employee_data) {
                                                            if ($result_get_employee_data->num_rows > 0) {
                                                                // that means the table is not blank
                                                        
                                                                $sl_no = 1;

                                                                while ($row_emp_data = $result_get_employee_data->fetch_assoc()) {
                                                                    echo '
                                                                                <tr class="hover_table" >
                                                                                    <th scope="row">' . $sl_no . '</th>
                                                                                    <td>' . $row_emp_data['emp_name'] . '</td>
                                                                                    <td>' . $row_emp_data['emp_age'] . '</td>
                                                                                    <td>' . $row_emp_data['emp_mobile_no'] . '</td>
                                                                                    <td>' . $row_emp_data['emp_job_role'] . '</td>
                                                                                    <td></td>
                                                                                    
                                                                                </tr>
                                                                            ';
                                                                    $sl_no++;
                                                                }

                                                            }
                                                        }



                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="check_table">
                                                <?php

                                                // require_once __DIR__ . '/inc/_employee_table_datatable_ex_template.php';
                                                
                                                ?>
                                            </div>

                                        </div>
                                    </div> -->






                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- main code ends here -->



<?php

require_once __DIR__ . '/inc/_footer_script.php';

?>

<!-- <script src="/assets/js/scripts.js"></script>

    <script src="/assets/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>