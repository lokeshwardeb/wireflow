<?php
// session_start();

// add the active title name or the page name if you want to configure
// $active_title_name = "Dashboard";

// add the active sidebar variable for activate sidebar and also give the sidebar link name which you want to activate to your particular page

// $active_sidebar = "dashboard" ; you can use it to add the active link to the dashboard sidebar link and activate the sidebar link

$active_sidebar = "dashboard";


// add the header.php after the required mvc files
require_once __DIR__ . '/inc/_header.php';



?>


<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireflow || Dashboard </title>

    <!-- favicon icon logo -->
    <link rel="shortcut icon" href="/assets/img/club_logo.jpg" type="image/x-icon">

    <!-- bootstrap css files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css
    https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css -->

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css"> -->



    <!-- custom css files -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/alert.js"></script>

    <script src="/assets/js/jquery_3.7.1_min.js"></script>

    <!-- https://code.jquery.com/jquery-3.7.1.js -->
    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js -->

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>


    <!-- https://cdn.datatables.net/2.1.8/js/dataTables.js
https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js -->

    <script src="/assets/js/scripts.js"></script>
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)


<!-- main code starts here -->

<<<<<<< HEAD
<!-- <script>
=======
<body class="">

    <!-- main code starts here -->

    <!-- <script>
>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
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
                                                        Dashboard
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
<<<<<<< HEAD
=======

                                        <?php

                                        require_once __DIR__ . '/inc/_add_employee_component.php';

                                        ?>



                                        <div class="dashboard_employee_table_section mt-4 pt-4 ">
                                            <div class="container">
                                                <div class="dashboard_employee_table">
                                                    <table class="table" id="employee_info_table">
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
                                                                                    <th scope="row">'. $sl_no .'</th>
                                                                                    <td>'. $row_emp_data['emp_name'] .'</td>
                                                                                    <td>'. $row_emp_data['emp_age'] .'</td>
                                                                                    <td>'. $row_emp_data['emp_mobile_no'] .'</td>
                                                                                    <td>'. $row_emp_data['emp_job_role'] .'</td>
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
                                        </div>






>>>>>>> 707ca36 (added the datatable js library and all the other features and functionalities on the software. Now working with the employee info table on the dashboard)
                                    </div>


                                    <hr>

                                    <div class="dashboard_info_section ">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12">
                                                <div class="card m-4 " style="width: 18rem;">

                                                    <div class="card-body ">
                                                        <h5 class="card-title inknut_regular  ">Total Employees</h5>
                                                        <p class="card-text p-2 ">
                                                            100
                                                        </p>
                                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12"></div>
                                            <div class="col-md-3 col-sm-12"></div>
                                            <div class="col-md-3 col-sm-12"></div>
                                        </div>
                                    </div>

                                    <?php

                                    require_once __DIR__ . '/inc/_add_employee_component.php';

                                    ?>



                                    <div class="dashboard_employee_table_section mt-4 pt-4 ">
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
                                                                                    <td>
                                                                                    <a href="/employee_info_management?get_emp_id='. $row_emp_data['emp_id'] .'" >
                                                                                    <button class="btn btn-outline-dark btn-sm " >
                                                                                    
                                                                                    View details

                                                                                    </button>
                                                                                    </a>
                                                                                    </td>
                                                                                    
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
                                    </div>






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