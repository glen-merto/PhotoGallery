<?php include "includes/database.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navbar.php"; ?>

<?php
if(isset($_GET['cat'])){
    $cat = $_GET['cat'];
} else {
    $cat = "";
}

switch($cat){
    case 'weekly': include "includes/weekly.php";
    break;
    case 'monthly': include "includes/monthly.php";
    break;
    case 'yearly': include "includes/yearly.php";
    break;
    default: include "includes/alltime.php";
    break;
}
?>






    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
            </div>
        </div>
    </footer>



<?php include "includes/login.php"; ?>
<?php include "includes/footer.php"; ?>