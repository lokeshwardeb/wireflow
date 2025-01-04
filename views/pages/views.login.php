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
    <title></title>

    <!-- favicon icon logo -->
    <link rel="shortcut icon" href="/assets/img/club_logo.jpg" type="image/x-icon">

    <!-- bootstrap css files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- custom css files -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/alert.js"></script>


</head>

<body class="">

    <!-- main code starts here -->


    <main>
        <div class="main_section">
            <div class="login_section mt-4 pt-4  ">
                <div class="container mt-4 pt-4 ">
                    <div class="page rounded-2 ">
                        <div class="login_form p-4  ">
                            <div class="container">
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
                                                        Welcome to wireflow
                                                    </div>
                                                    <div class="login_welcome_sub_title mt-2 ">
                                                        A full-fledge EMS Software for your company
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="login_form_contents">
                                                <div class="container mt-4 ms-2 ">
                                                    <form action="" method="post">
                                                        <div class="mb-3">
                                                            <label for="email">Email</label>
                                                            <input type="email" class=" mt-2 form-control">
                                                        </div>
                                                        <div class="mb-3 mt-4 ">
                                                            <label for="email">Password</label>
                                                            <input type="password" class=" mt-2 form-control">
                                                        </div>

                                                        <div class="mb-3 mt-4 pt-4  ">
                                                            <button type="submit"
                                                                class="btn btn-outline-primary ps-3 pe-3  ">Login</button>
                                                        </div>

                                                    </form>
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
        </div>
    </main>



    <!-- main code ends here -->



    <?php

    require_once __DIR__ . '/inc/_footer_script.php';

    ?>

</body>

</html>