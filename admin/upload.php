<?php include "includes/header.php"; ?>

<?php
date_default_timezone_set('Asia/Manila');


if(isset($_POST['upload'])){
    $title = $_POST['title'];
    $photographer = $_POST['photographer'];
    $category = $_POST['category'];

    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    $description = $_POST['description'];


    move_uploaded_file($image_temp, "../images/$image");


    $query = "INSERT INTO table_name(title, photographer, category, image, description, upload_date) VALUES('{$title}', '{$photographer}', '{$category}', '{$image}', '{$description}', now())";
    $create_query = mysqli_query($con, $query);

    if(!$create_query){
        die("Error uploading file: " . mysqli_error($con));
    } else {
        echo "<script>alert('Upload successful!');</script>";
    }

}


?>


<?php include "includes/nav.php"; ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Upload</a>
                </li>
                <li class="breadcrumb-item active"></li>
            </ol>


            <div class="card card-register mx-auto">
                <div class="card-header text-white bg-secondary">Upload photo</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="title" name="title" class="form-control" placeholder="title" required="required" autofocus="autofocus">
                                <label for="title">Title</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="photographer" name="photographer" class="form-control" placeholder="Photographer" required="required">
                                <label for="photographer">Photographer</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <select name="category" class="custom-select form-control">
                                <option value="">Select Category</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="All time">All time</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <input type="submit" name="upload" class="btn btn-primary btn-block" value="Upload">
                    </form>
                </div>
            </div>





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