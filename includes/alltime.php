<br><br><br>

<div class="container">
<div class="row">
    
<?php

$query = "SELECT * FROM table_name";
$result = mysqli_query($con, $query);
$counter = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $img = $row['image'];

    
        echo "<div class='col-sm-4'>";
            if ($counter % 3 == 0) {
            echo "<img src='images/{$img}' width='370px'>";
            }
        echo "</div>";

        echo "<div class='col-sm-4'>";
        if ($counter % 3 == 1) {
            echo "<img src='images/{$img}' width='370px'>";
            }
        echo "</div>";

        echo "<div class='col-sm-4'>";
        if ($counter % 3 == 2) {
            echo "<img src='images/{$img}' width='370px'>";
            }
        echo "</div>";
    

    $counter++;
}

?>

</div>
</div>