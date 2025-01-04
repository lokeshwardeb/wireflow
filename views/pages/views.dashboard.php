<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../models/models.php';
require_once __DIR__ . '/../../controllers/controllers.php';

$controllers = new controllers;





?>


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

    <!-- custom css files -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/alert.js"></script>

    <script src="/assets/js/jquery_3.7.1_min.js"></script>
    <script src="/assets/js/scripts.js"></script>


</head>

<body class="">

    <!-- main code starts here -->

    <script>
        success_alert("the check", "alert runs");
    </script>

    <main>
        <div class="main_section">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="desktop_sidebar">
                        <div class="desktop_sidebar_main_contents mt-4 ">
                            <div class="mt-4 pt-2 ">
                                <div class="brand_name_section">
                                    <div class="software_name_section">
                                        <div class="software_name text-center fs-4">
                                            Wireflow
                                        </div>
                                        <div class="software_tagline ms-2 mt-4 mb-4  ">
                                            <div class="container">
                                                <span>A full-fledge EMS Software for your company</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <ul class="mt-4">
                                    <li class="nav ">
                                        <a href="" class="nav-link cus_sidebar_nav_link "> Dashboard </a>
                                    </li>
                                    <li class="nav">
                                        <a href="" class="nav-link cus_sidebar_nav_link "> Logout </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-10 col-sm-12">

                    <div class="main_page_contents">
                        <div class="main_contents">
                            <div class="page main_content_page mt-3 ">
                                <div class="">
                                    <div class="dashboard_section mt-4  ">
                                        <div class="dashboard_wrapper ms-4">
                                            <div class="section_title fs-3  pt-3 ">
                                                Dashboard
                                            </div>
                                        </div>


                                        <hr>

                                        <div class="dashboard_info_section">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="card m-4 " style="width: 18rem;">

                                                        <div class="card-body">
                                                            <h5 class="card-title">Total Employees</h5>
                                                            <p class="card-text">
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

</body>

</html>