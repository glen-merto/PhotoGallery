<?php include "includes/header.php"; ?>

<?php

if(isset($_GET['userid'])){
    $userid = $_GET['userid'];

    $query = "SELECT * FROM table_name WHERE id = '{$userid}'";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title = $row['title'];
        $photographer = $row['photographer'];
        $category = $row['category'];
        $image = $row['image'];
        $description = $row['description'];
        $upload_date = $row['upload_date'];
    }
}


date_default_timezone_set('Asia/Manila');

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $photographer = $_POST['photographer'];
    $category = $_POST['category'];

    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    $description = $_POST['description'];

    move_uploaded_file($image_temp, "../images/$image");

    if(empty($image)){
        $query = "SELECT * FROM table_name WHERE id = {$userid}";
        $image_query = mysqli_query($con, $query);
        
        while($row = mysqli_fetch_assoc($image_query)){
            $image = $row['image'];
        }
    }

    $query = "UPDATE table_name SET 
                    title = '{$title}', 
                    photographer = '{$photographer}', 
                    category = '{$category}', 
                    image = '{$image}', 
                    description = '{$description}', 
                    upload_date = now() 
                    WHERE id = '{$userid}'";
    $update_query = mysqli_query($con, $query);

    if(!$update_query){
        die("Error:" . mysqli_error($con));
    } else {
        echo "<script>alert('Update successful');</script>";
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
                <div class="card-header text-white bg-secondary">Update</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="title" name="title" class="form-control" placeholder="title" required="required" autofocus="autofocus" value="<?php echo $title; ?>">
                                <label for="title">Title</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="photographer" name="photographer" class="form-control" placeholder="Photographer" required="required" value="<?php echo $photographer; ?>">
                                <label for="photographer">Photographer</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <select name="category" class="custom-select form-control">
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="All time">All time</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Picture input</label><br>
                                    <img width="250" src="../images/<?php echo $image; ?>" alt="">
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?php echo $description; ?></textarea>
                        </div>

                        <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
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