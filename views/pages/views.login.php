<?php

session_start();

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../models/models.php';
require_once __DIR__ . '/../../controllers/controllers.php';

$controllers = new controllers;

$controllers->login_page_check_login();

$controllers->login_admin_user();

// danger_alert



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Wireflow  <?php echo isset($active_title_name) ? ' || ' . $active_title_name : ''; ?></title>

    <!-- favicon icon logo -->
    <link rel="shortcut icon" href="/assets/img/club_logo.jpg" type="image/x-icon">

    <!-- bootstrap css files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css
    https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css -->



    <!-- datatables css files -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.bootstrap5.css">



    <!-- custom css files -->
     <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">



    <!-- sweetalertjs files -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/alert.js"></script>

    <!-- jquery js -->

    <script src="/assets/js/jquery_3.7.1_min.js"></script>


    <!-- datatable js -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <!-- datatable button and features js -->
      <!-- DataTables Buttons extension for export functionality -->
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>



    <!-- important custom js files -->
    <script src="/assets/js/datatable_js_library_config.js"></script>
    <script src="/assets/js/scripts.js"></script>


</head>

<body class="">

    <!-- main code starts here -->

    <?php

$controllers->login_admin_user();

    ?>


    <main>
        <div class="main_section">
            <div class="login_section mt-4 pt-4  ">
                <div class="container mt-4 pt-4 ">
                    <div class="page rounded-2 ">
                        <div class="login_form p-4  ">
                            <div class="container">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <img src="/assets/img/login_img.jpg" class="img-fluid mb-4 " alt="">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                      <div class="login_page_main_section">
                                      <div class="mb-3">
                                            <div class="login_welcome_section text-center mt-2 ">
                                                <div class="container">
                                                    <div class="login_welcome_title fs-2 ">
                                                        
                                                        <?php echo ucwords("Welcome to wireflow"); ?>

                                                    </div>
                                                    <div class="login_welcome_sub_title mt-2 ">
                                                        <?php echo ucwords("A full-fledge EMS Software for your company"); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="login_form_contents">
                                                <div class="container mt-4 ms-2 ">
                                                    <!-- <form action="" method="post"> -->
                                                        <div class="mb-3">
                                                            <label for="email">Email</label>
                                                            <input type="email" name="email" class=" mt-2 form-control">
                                                        </div>
                                                        <div class="mb-3 mt-4 ">
                                                            <label for="email">Password</label>
                                                            <input type="password" name="password" class=" mt-2 form-control">
                                                        </div>

                                                        <div class="mb-3 mt-4 pt-4  ">
                                                            <button type="submit" name="login" 
                                                                class="btn btn-outline-primary ps-3 pe-3  ">Login</button>
                                                        </div>

                                                    <!-- </form> -->
                                                </div>
                                            </div>

                                        </div>
                                      </div>

                                    </div>
                                </div>
                            </form>
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