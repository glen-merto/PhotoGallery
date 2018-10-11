<br><br><br>

<div class="container">
<div class="row">
    
<?php

$query = "SELECT * FROM table_name";
$result = mysqli_query($con, $query);
$counter = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $img = $row['image'];

    if ($counter % 3 == 0) {
        echo "<div class='row'>";
        echo "<div class='col-sm-4'>";
        echo "<img src='images/{$img}' class='imgThumb'>";
        echo "</div>";
    } else if ($counter % 3 == 1) {
        echo "<div class='col-sm-4'>";
        echo "<img src='images/{$img}' class='imgThumb'>";
        echo "</div>";
    } else {
        echo "<div class='col-sm-4 mb-3'>";
        echo "<img src='images/{$img}' class='imgThumb'>";
        echo "</div>";
        echo "</div>";
    }

    $counter++;
}

?>

</div>
</div>