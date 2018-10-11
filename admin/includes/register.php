<?php

$firstName = $lastName = $email = "";

if(isset($_POST['register'])){
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['inputEmail']);
    $inputPassword = mysqli_real_escape_string($con, $_POST['inputPassword']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirmPassword']);

    if($inputPassword !== $confirmPassword){
        echo "<script>alert('Password did not match!');</script>";
    } else {

        $query = "SELECT * from table_users WHERE email='{$email}'";
        $result = mysqli_query($con, $query);
        $rowcount = mysqli_num_rows($result);
        

        if($rowcount > 0){

            echo "<script>alert('Email already registered!');</script>";

        } else {

            $password = password_hash('$inputPassword', PASSWORD_ARGON2I);

            $query = "INSERT INTO table_users(firstname, lastname, password, email, userlevel) VALUES('{$firstName}', '{$lastName}', '{$password}', '{$email}', '1')";
            $register_query = mysqli_query($con, $query);

            if(!$register_query){
                die("Registration error: " . mysqli_error($con));
            } else {
                echo "<script>alert('Registration successful!');</script>";
            }

        }

    }


}



?>


<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Users</a>
    </li>
    <li class="breadcrumb-item active">Register</li>
</ol>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                <label for="firstName">First name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required="required">
                        <label for="inputEmail">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" id="submit" name="register" class="btn btn-primary btn-lg btn-block">
                </div>
            </form>

        </div>
    </div>
</div>
