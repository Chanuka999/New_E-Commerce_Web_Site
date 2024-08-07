<?php
 include('../includes/connect.php');
 include('../functions/common_function.php');
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
body{
        overflow-x: hidden;
        background-image:url('../images/logopic4.webp');
        background-repeat: no-repeat;
        background-size:cover;
       
        
    }
    .container{
        box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
  border-radius: 8px;
  padding: 50px;
  /*-fluid my-3*/
  margin-top: 3%;
  position:relative;
  width:800px;
  height: 840px;
  background: transparent;
  backdrop-filter: blur(10px);
  

  
  
    }
    .form{
        text-decoration: double;
        color: black;
        text-size-adjust:initial;
        
    }
    </style>
<body>
    <div class="container">
        <h2 class="text-center">New User Registation</h2>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form cavtion="" method="post" enctype="multipart/form_data">
                    <div class="form-outline mb-4">
                     <label for="user_username" class="form">Username</label>  
                     <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username">
                    </div>

                    <div class="form-outline mb-4">
                    <label for="user_email" class="form">Email</label>  
                     <input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="user_email">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_image" class="form">User Image</label>  
                        <input type="file" id="user_image" class="form-control" required="required" name="user_image">
                    </div>

                    <div class="form-outline mb-4">
                    <label for="user_password" class="form">Password</label>  
                     <input type="password" id="user_password" class="form-control"  required="required" name="user_password">
                    </div>

                    <div class="form-outline mb-4">
                    <label for="conf_user_password" class="form">Confirm Password</label>  
                     <input type="password" id="conf_user_password" class="form-control" placeholder="confirm password"  required="required" name="conf_user_password">
                    </div>

                   
                    <div class="form-outline mb-4">
                     <label for="user_address" class="form">Address</label>  
                     <input type="text" id="user_address" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_address">
                    </div>

                    
                    <div class="form-outline mb-4">
                     <label for="user_contact" class="form">Contact</label>  
                     <input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required="required" name="user_contact">
                    </div>

                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">all ready have an account ?<a href="user_login.php" class="text-danger"> Login</a></p>
                    </div>
                </form>

            

            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();
    


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
    move_uploaded_file($user_image_tmp, "./user_images/$user_image");

    // SQL query to insert user data into database
    $insert_query = "INSERT INTO `user_table` (username, user_email, user_password, user_image, user_ip, user_address, user_mobile) 
                    VALUES ('$user_username', '$user_email', '$hash_password', '$user_image', '$user_ip', '$user_address', '$user_contact')";

    // Execute SQL query
    $sql_execute = mysqli_query($con, $insert_query);
    }
  
    $select_cart_items="Select * form `cart_details` where ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']= $user_username;
        echo "<script>('You have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }else{
        echo "<script>window.open('../index.php','_self')</script>";
    }
   
}
?>
