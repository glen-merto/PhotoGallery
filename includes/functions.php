<?php

// Curation All
function showpix($rem){
    global $con;
    $query = "SELECT * FROM table_name";
    $result = mysqli_query($con, $query);
    $ctr = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['image'];
        $title = $row['title'];

        if ($ctr % 3 == $rem) {
            
            echo "<a href='images/{$image}' data-lightbox='AllTime' data-title='{$title}'>
            <img src='images/{$image}' class='imgS'>
            </a>";
            
        }
        $ctr++;
    }
}

// Curation Category
function showpixC($cat){
    global $con;
    $query = "SELECT * FROM table_name WHERE category='{$cat}'";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['image'];
        $title = $row['title'];

        echo "<div class='col-lg-4'>";
            echo "<a href='images/{$image}' data-lightbox='images' data-title='{$title}'>
                  <img src='images/{$image}' class='imgS'>
                  </a>";
        echo "</div>";

    }
}



?>