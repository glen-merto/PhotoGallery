<?php

    include "includes/database.php";

    if(isset($_GET['userid'])){
        $userid = $_GET['userid'];
        
        $query = "DELETE FROM table_name WHERE id = {$userid}";
        $del_query = mysqli_query($con, $query);
        
        if(!$del_query){
            die("Error:" . mysqli_error($con));
        } else {
            echo "<script>alert('Delete successful');</script>";
            header("Location: index.php");
        }
            
    }

?>