<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>

    <div id="content-wrapper">

        <div class="container-fluid">


            <!-- DataTables for All Posts -->
            <?php

            if(isset($_GET['user'])){
                $user = $_GET['user'];
            } else {
                $user = "";
            }


            switch($user){
                case 'register': include 'includes/register.php';
                    break;
                default: include 'includes/userlist.php';
                    break;
            }

            ?>





        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php include "includes/logout.php"; ?>

<?php include "includes/footer.php"; ?>