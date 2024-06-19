<?php 

include('includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce web site using php and mysql</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
 
<nav>

    <ul>
   
    <li><a href="#" class="cool">LOGO</a></li>
      <li><a href="#" class="active">Home</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="#">Register</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></li>
      <li><a href="#">Total Price:100/=</a></li>
     
    
    <form class="kill">
      <input class="form" type="search" placeholder="search" aria-label="search">
      <button class="btn" type="submit">search</button>
    </form>
    </ul>
  </nav>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>

<div class="bg-light">
  <h3 class="text-center">Hidden store</h3>
  <p class="text-center">Communication is at the heart of e-commerce and community</p>


</div>

<div class="row">
  <div class="col-md-10">
    <div class="row">

    <?php 
$select_query="Select  * from `products`";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_disription=$row['product_disription'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo $product_title;
}
?> 
     <div class="col-md-4 mb-2">
     <div class="card" >
      <img src="./images/apple.webp" height:200px; class="card-img-top" alt="apple">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
</div>
</div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>
      <?php   
      
      $select_brands="Select * from `brands`";
      $result_brands=mysqli_query($con,$select_brands);
     // $row_data=mysqli_fetch_assoc($result_brands);
     // echo $row_data['brand_title'];
     // echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
       echo "<li class='nav-item'>
       <a href='index.php?brand=$brand_id' class='nav-light text-light'>$brand_title</a>
        </li>";
     
     }
      
      ?>
    
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info ">
        <a href="#" class="nav-link text-light "><h4>categories</h4></a>
      </li>
      <?php   
      
      $select_categories="Select * from `categories`";
      $result_categories=mysqli_query($con,$select_categories);
     // $row_data=mysqli_fetch_assoc($result_brands);
     // echo $row_data['brand_title'];
     // echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
       echo "<li class='nav-item'>
       <a href='index.php?category=$category_id' class='nav-light text-light'>$category_title</a>
        </li>";
     
     }
      
      ?>

    </ul>
  </div>
</div>


  <div class="footer">
    <p>All right reserved o- designed by chanuka-2024</p>
  </div> 
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>