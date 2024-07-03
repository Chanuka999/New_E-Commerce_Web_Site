<?php 
session_start();

include('../includes/connect.php');
include('../functions/common_function.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>

body{
    overflow-x: hidden;
   /* background-color: #111;*/
}

.profile_img{
    width: 90%;
    margin: auto;
    display: block;
 object-fit: contain;
}
.edit_image{
  width:100px;
  margin: auto;
  display: block;
  object-fit: contain;
}
.footer{
  padding: 3px;
  background-color: rgba(33, 136, 177, 0.568);
  text-align: center;
 }
  
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: #111;
  }
  
</style>
</head>
<body>
 
<nav style="background-color:blueviolet">

    <ul>
   
    <li><a href="#" class="cool">LOGO</a></li>
      <li><a href="../index.php" class="active">Home</a></li>
      <li><a href="../display_all.php">Product</a></li>
      <li><a href="profile.php">My Account</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a></li>
      <li><a href="#">Total Price:<?php total_cart_price(); ?></a></li>
     
    
    <form class="kill" style="display:flex;" action="../search_product.php" method="get">
      <input class="form-control me-2" type="search" placeholder="search" aria-label="search" style="text-align:center; padding:2px; margin:8px" name="search_data">
      <!-- <button class="btn btn-outline-light" type="submit">search</button> -->
       <input type="submit" value="search" class="btn btn-outline-light" style="margin:2px" name="search_data_product">
    </form>
    </ul>
  </nav>

  <?php  
   cart();
  
  ?>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
<?php
  if(!isset($_SESSION['username'])) {
    echo "<li class='nav-item'>
             <a class='nav-link' href='#'>Welcome guest</a>
          </li>
          <li class='nav-item'>
             <a class='nav-link' href='./users_area/user_login.php'>Login</a>
          </li>";
} else {
    echo "<li class='nav-item'>
             <a class='nav-link' href='#'>Welcome " . $_SESSION['username'] . "</a>
          </li>
          <li class='nav-item'>
             <a class='nav-link' href='./users_area/logout.php'>Logout</a>
          </li>";
}
    
  
?>
  </ul>
</nav>

<div class="bg-light">
  <h3 class="text-center">Hidden store</h3>
  <p class="text-center">Communication is at the heart of e-commerce and community</p>


</div>

<div class="row">
    <div class="col-md-2">
        <ul class="navbar-nav bg-secondary text-center" style="height:100vh">
        <li class="nav link bg-info">
            <a class="nav-link text-light" href="#"><h4>Your profile</h4></a>
        </li>

     <?php 
$username=$_SESSION['username'];
$user_image="Select * from `user_table` where username='$username'";
$user_image=mysqli_query($con,$user_image);
$row_image=mysqli_fetch_array($user_image);
$user_image=$row_image['user_image'];
echo " <li class='nav item'>
            <img src='./user_images/$user_image'  class='profile_img my-4'alt=''>
        </li>";






?>



       
        <li class="nav item">
            <a class="nav-link text-light" href="profile.php">Pending orders</a>
        </li>
        <li class="nav item">
            <a class="nav-link text-light" href="profile.php?edit_account">Edit Accout</a>
        </li>
        <li class="nav item">
            <a class="nav-link text-light" href="profile.php?my_orders">My order</a>
        </li>
        <li class="nav item">
            <a class="nav-link text-light" href="profile.php?delete_account">Delete account</a>
        </li>
        <li class="nav item">
            <a class="nav-link text-light" href="logout.php">Logout</a>
        </li>
    </ul>
    </div>
    <div class="col-md-10 text-center">
      <?php  get_user_order_details();
      if(isset($_GET['edit_account'])){
       include('edit_account.php');
      }
      if(isset($_GET['my_orders'])){
        include('user_orders.php');
       }
        ?> 
    </div>
</div>

<?php  include("../includes/footer.php") ?>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>