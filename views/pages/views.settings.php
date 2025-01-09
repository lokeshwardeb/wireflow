<?php

// session_start();

// add the active title name or the page name if you want to configure
$active_title_name = "Settings";

// add the active sidebar variable for activate sidebar and also give the sidebar link name which you want to activate to your particular page

// $active_sidebar = "dashboard" ; you can use it to add the active link to the dashboard sidebar link and activate the sidebar link

$active_sidebar = "settings";


// add the header.php after the required mvc files
require_once __DIR__ . '/inc/_header.php';



$controllers->add_admin_user();


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
                                                        Settings
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="mobile_navbar_inc_section  d-xl-none   mt-4 ">
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

                                    <div class="dashboard_info_section ">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12">
                                                <div class="card m-4 " style="width: 18rem;">

                                                    <div class="card-body ">
                                                        <h5 class="card-title inknut_regular  ">Total Admin Users</h5>
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

                                    require_once __DIR__ . '/inc/_add_admin_user_component.php';

                                    ?>



                                    <div class="dashboard_admin_table_section mt-4 pt-4 ">
                                        <div class="container">
                                            <div class="dashboard_admin_table table-responsive mt-4 ">
                                                <table class="table mb-5 " id="datatable_info_table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Admin name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Joined Datetime</th>
                                                            <!-- <th scope="col">Job Role</th>
                                                            <th scope="col">Handle</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        $result_get_admin_data = $controllers->get_data("admin_users");

                                                        if ($result_get_admin_data) {
                                                            if ($result_get_admin_data->num_rows > 0) {
                                                                // that means the table is not blank
                                                        
                                                                $sl_no = 1;

                                                                while ($row_admin_data = $result_get_admin_data->fetch_assoc()) {
                                                                    echo '
                                                                                <tr class="hover_table" >
                                                                                    <th scope="row">' . $sl_no . '</th>
                                                                                    <td>' . $row_admin_data['admin_name'] . '</td>
                                                                                    <td>' . $row_admin_data['admin_email'] . '</td>
                                                                                    <td>' . date("d-M-Y h:s:i a", strtotime($row_admin_data['datetime'])) . '</td>
                                                                                   
                                                                                    
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

                                                // require_once __DIR__ . '/inc/_admin_table_datatable_ex_template.php';
                                                
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