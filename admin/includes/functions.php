<?php

function readAll(){
    global $con;
    $query = "SELECT * FROM table_name";
    $read_query = mysqli_query($con, $query);
    $rowcount = mysqli_num_rows($read_query);
    echo $rowcount;
}

function readCat($cat){
    global $con;
    $query = "SELECT * FROM table_name WHERE category='$cat'";
    $read_query = mysqli_query($con, $query);
    $rowcount = mysqli_num_rows($read_query);
    echo $rowcount;
}

?>