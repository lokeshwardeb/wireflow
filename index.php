<?php

// initalizing the path of the server
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



// register routes
$Routes = [

    "/" => __DIR__ . "/views/pages/views.login.php",
    "/login" => __DIR__ . "/views/pages/views.login.php",
    "/dashboard" => __DIR__ . "/views/pages/views.dashboard.php",
    "/employee_info_management" => __DIR__ . "/views/pages/views.employee_info_management.php",
    "/settings" => __DIR__ . "/views/pages/views.settings.php",
    "/logout" => __DIR__ . "/views/pages/views.logout.php",
    
    

];

// applying the conditions
if(array_key_exists($uri, $Routes)){
    require $Routes[$uri];
}else{
    require __DIR__ . '/views/error_pages/views.error.php';
}






?>