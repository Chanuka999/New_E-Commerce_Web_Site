<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();

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
    <h2 class="text-center mb-5">Admin Login</h2>
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
                <label for="password" class="form-label">password</label>
                <input type="password" id="password" required="required"class="form-control">

            </div>
           
            <div>
                <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration.php" value="Register">
                <p class= "smoll fw-bold mt-2 pt-1">Don't you have an account
                <a href="admin_login_php">Register</a></class></p>
            </div>
          </form>
        </div>
    </div>
    </div>
</body>
</html>

<?php  
if(isset($_POST['admin_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];

    $select_query="Select * from `user_table` where username='$user_username'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result); 
   // $user_ip=getIpAddress();

   if($row_count>0){
    $_SESSION['username']= $user_username;
  if(password_verify($user_password,$row_data['user_password'])){
   echo "<script>alert('Login successfull')</script>";
   if($row_count==1 and $row_count_cart==0){
    $_SESSION['username']= $user_username;
    echo "<script>alert('Login successfull')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
   }
//    else{
//     $_SESSION['username']= $user_username;
//     echo "<script>alert('Login successfull')</script>";
//     echo "<script>window.open('payment.php','_self')</script>";
//    }
//   }else{
//     echo "<script>alert('Invalid Credantials')</script>";
//   }
  }
}else{
    echo "<script>alert('Invalid Credantials')</script>";
}

}
?>