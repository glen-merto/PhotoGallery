<?php

// Curation All
function showpix($rem){
    global $con;
    $query = "SELECT * FROM table_name";
    $result = mysqli_query($con, $query);
    $ctr = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $img = $row['image'];

        if ($ctr % 3 == $rem) {
            echo "<img src='images/{$img}' class='imgS'>";
        }
        $ctr++;
    }
}

// Curation Category
function showpixC($cat, $rem){
    global $con;
    $query = "SELECT * FROM table_name WHERE category='{$cat}'";
    $result = mysqli_query($con, $query);
    $ctr = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $img = $row['image'];

        if ($ctr % 3 == $rem) {
            echo "<img src='images/{$img}' class='imgS'>";
        }
        $ctr++;
    }
}



?>