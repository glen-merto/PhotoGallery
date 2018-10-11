
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Users</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email address</th>
                        <th>Password</th>
                        <th>Userlevel</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email address</th>
                        <th>Password</th>
                        <th>Userlevel</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $query = "SELECT * FROM table_users";
                    $user_query = mysqli_query($con, $query);

                    if(!$user_query){
                        die("Error: " . mysqli_error($con));
                    } else {

                        while($row = mysqli_fetch_assoc($user_query)){
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $email = $row['email'];
                            $password = $row['password'];
                            $userlevel = $row['userlevel'];

                            $password = str_repeat("*", 12);

                            echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$firstname</td>";
                                echo "<td>$lastname</td>";
                                echo "<td>$email</td>";
                                echo "<td>$password</td>";
                                echo "<td>$userlevel</td>";
                                echo "<td><a href='includes/edituser.php?id={$id}'>Edit</a></td>";
                                echo "<td><a href='includes/deleteuser.php?id={$id}'>Delete</a></td>";
                            echo "</tr>";
                        }

                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>