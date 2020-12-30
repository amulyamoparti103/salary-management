<?php

//print_r($_SESSION);

define('SITE_URL','http://localhost/salary_management');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','salary_management');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if(mysqli_connect_error())
{
    error_log("Please, check your Database connectivity:".mysqli_connect_error());
}
?>