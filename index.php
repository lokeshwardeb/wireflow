<?php

// initalizing the path of the server
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



// register routes
$Routes = [

    "/" => __DIR__ . "/views/pages/views.login.php",
<<<<<<< HEAD
    "/login" => __DIR__ . "/views/pages/views.login.php",
    "/dashboard" => __DIR__ . "/views/pages/views.dashboard.php",
    "/employee_info_management" => __DIR__ . "/views/pages/views.employee_info_management.php",
    "/settings" => __DIR__ . "/views/pages/views.settings.php",
    "/logout" => __DIR__ . "/views/pages/views.logout.php",
    
=======
    "/dashboard" => __DIR__ . "/views/pages/views.dashboard.php",
    "/form" => __DIR__ . "/views/pages/views.form.php",
>>>>>>> 32517b3 (added all the features and functionalities, added ajax and connected it with the php backend for the add employeers features and functionalities. Now working with the add employeers features and functionalities to add and complete all the employeers data and information to the database.)
    

];

// applying the conditions
if(array_key_exists($uri, $Routes)){
    require $Routes[$uri];
}else{
    require __DIR__ . '/views/error_pages/views.error.php';
}






?>