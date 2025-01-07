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
    <title>Wireflow || Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/club_logo.jpg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.0/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.bootstrap5.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <main>
        <div class="main_section">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <!-- Sidebar -->
                    <div class="desktop_sidebar">
                        <div class="desktop_sidebar_main_contents mt-4">
                            <div class="software_name_section text-center fs-4">Wireflow</div>
                            <hr>
                            <ul class="mt-4">
                                <li class="nav"><a href="#" class="nav-link cus_sidebar_nav_link">Dashboard</a></li>
                                <li class="nav"><a href="#" class="nav-link cus_sidebar_nav_link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 col-sm-12">
                    <!-- Dashboard Main Content -->
                    <div class="main_contents">
                        <div class="dashboard_section mt-4">
                            <div class="section_title fs-3 pt-3">Dashboard</div>
                            <hr>

                            <!-- Employee Table -->
                            <div class="dashboard_employee_table_section mt-4">
                                <div class="container">
                                    <table class="table" id="employee_info_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Employee Name</th>
                                                <th scope="col">Age</th>
                                                <th scope="col">Mobile No</th>
                                                <th scope="col">Job Role</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result_get_employee_data = $controllers->get_data("employees");
                                            if ($result_get_employee_data && $result_get_employee_data->num_rows > 0) {
                                                $sl_no = 1;
                                                while ($row = $result_get_employee_data->fetch_assoc()) {
                                                    echo "
                                                        <tr>
                                                            <th scope='row'>$sl_no</th>
                                                            <td>{$row['emp_name']}</td>
                                                            <td>{$row['emp_age']}</td>
                                                            <td>{$row['emp_mobile_no']}</td>
                                                            <td>{$row['emp_job_role']}</td>
                                                            <td>Edit | Delete</td>
                                                        </tr>";
                                                    $sl_no++;
                                                }
                                            } else {
                                                echo "<tr><td colspan='6' class='text-center'>No employees found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.2.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.0/js/dataTables.bootstrap5.js"></script>

    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.colVis.min.js"></script>

    <!-- Custom Scripts -->
    <script src="/assets/js/scripts.js"></script>
</body>

</html>
