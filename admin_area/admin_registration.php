<?php
 include('../includes/connect.php');
 include('../functions/common_function.php');
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    body{
        overflow: hidden;
        display: contents;

    }
    .img{
        width: 80%;
        height: 90%;
    }
</style>
<body>
    <div class="container-fuild m-3">
    <h2 class="text-center mb-5">Admin Registration</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-xl-5">
            <img src="../images/admin.jpg" alt="Admin Registration" class="img">
        </div>
        <div class="col-lg-6 col-xl-4">
          <form action="" method="post">
            <div class="form-outline mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" required="required"class="form-control">

            </div>
            <div class="form-outline mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" required="required"class="form-control">
            </div>
            <div class="form-outline mb-4">
                <label for="password" class="form-label">password</label>
                <input type="password" id="password" required="required"class="form-control">

            </div>
            <div class="form-outline mb-4">
                <label for="confirm_password" class="form-label">Confirm password</label>
                <input type="confirm_password" placeholder="Enter your confirm_password" name="confirm_password" required="required"class="form-control">

            </div>
            <div>
                <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registrastion" value="Register">
                <p class= "smoll fw-bold mt-2 pt-1">Do you have an account to login
                <a href="admin_login.php">Login</a></class></p>
            </div>
          </form>
        </div>
    </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['admin_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
 
    //$user_ip = getIPAddress();
    


    $select_query="Select * from `user_table` where username=' $user_username' or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('username and email already exist')</script>";
    }else if($user_password!=$conf_user_password){
        echo "<script>alert('password do not match')</script>";
    }
    
    else{
          // Move uploaded file to designated folder
    //move_uploaded_file($user_image_tmp, "./user_images/$user_image");

    // SQL query to insert user data into database
    $insert_query = "INSERT INTO `user_table` (username, user_email, user_password) 
                    VALUES ('$user_username', '$user_email', '$hash_password')";

    // Execute SQL query
    $sql_execute = mysqli_query($con, $insert_query);
    }
}
    ?>
