<br><br><br>

<div class="container">
    <div class="row">

        <?php
        
        $query = "SELECT * FROM table_name";
        $result = mysqli_query($con, $query);
        $num_rows = mysqli_num_rows($result);

        while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['image'];
        $title = $row['title'];
        
        
        echo count($row) . "<br>";

        }
        
        ?>

        <!-- <div class='col-sm-4'>
            <?php showpix(0); ?>
        </div>

        <div class='col-sm-4'>
            <?php showpix(1); ?>
        </div>

        <div class='col-sm-4'>
            <?php showpix(2); ?>
        </div> -->

    </div>
</div>