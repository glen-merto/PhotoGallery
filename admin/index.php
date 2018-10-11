<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-images"></i>
                            </div>
                            <div class="mr-5"><?php readCat("Weekly"); ?> Weekly!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="index.php?posts=weekly">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-images"></i>
                            </div>
                            <div class="mr-5"><?php readCat("Monthly"); ?> Monthly!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="index.php?posts=monthly">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-images"></i>
                            </div>
                            <div class="mr-5"><?php readCat("Yearly"); ?> Yearly!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="index.php?posts=yearly">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-images"></i>
                            </div>
                            <div class="mr-5"><?php readAll(); ?> All Time!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="index.php">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- DataTables for All Posts -->
            <?php

            if(isset($_GET['posts'])){
                $posts = $_GET['posts'];
            } else {
                $posts = "";
            }


            switch($posts){
                case 'weekly': include 'includes/weekly.php';
                break;
                case 'monthly': include 'includes/monthly.php';
                break;
                case 'yearly': include 'includes/yearly.php';
                break;
                default: include 'includes/alltime.php';
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