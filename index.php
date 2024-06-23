<?php 

include('includes/connect.php');
include('functions/common_function.php');

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
 
<nav style="background-color:blueviolet">

    <ul>
   
    <li><a href="#" class="cool">LOGO</a></li>
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="display_all.php">Product</a></li>
      <li><a href="#">Register</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></li>
      <li><a href="#">Total Price:100/=</a></li>
     
    
    <form class="kill" style="display:flex;" action="search_product.php" method="get">
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

<div class="row px-1">
  <div class="col-md-10">
    <div class="row">

    <?php 
    getproducts();
    get_unique_categories();
    get_unique_brands();
//     $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 

?> 
   


</div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>
      <?php   
      getbrands();
    //   $select_brands="Select * from `brands`";
    //   $result_brands=mysqli_query($con,$select_brands);
    //  // $row_data=mysqli_fetch_assoc($result_brands);
    //  // echo $row_data['brand_title'];
    //  // echo $row_data['brand_title'];
    // while($row_data=mysqli_fetch_assoc($result_brands)){
    //   $brand_title=$row_data['brand_title'];
    //   $brand_id=$row_data['brand_id'];
    //    echo "<li class='nav-item'>
    //    <a href='index.php?brand=$brand_id' class='nav-light text-light'>$brand_title</a>
    //     </li>";
     
    //  }
      
      ?>
    
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info ">
        <a href="#" class="nav-link text-light "><h4>categories</h4></a>
      </li>
      <?php   
        getcategories();
     
      
      ?>

    </ul>
  </div>
</div>

<?php  include("./includes/footer.php") ?>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>