<?php
    ob_start();
    session_start();

    define('SITEURL','http://localhost/food-ordering-system/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-ordering-system');

    $conn = mysqli_connect(LOCALHOST, DB_NAME, DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

   
?>