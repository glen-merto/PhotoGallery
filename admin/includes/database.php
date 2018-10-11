<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'database_name';

    $con = mysqli_connect("$host", "$username", "$password", "$dbname");

    if(!$con){
        die("Error connecting to database: " . mysqli_error($con));
    }

?>