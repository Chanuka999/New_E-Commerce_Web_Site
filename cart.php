<?php 

include('includes/connect.php');
include('functions/common_function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce web site-cart details</title>
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
      <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a></li>
      
     
    
   
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

<div class="container">
    <div class="row">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                <th>Product title</th>
                <th>Product image</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Remove</th>
                <th collspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>

            <?php   
             global $con;
             $get_ip_add = getIPAddress(); 
             $total_price=0;
             $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
             $result=mysqli_query($con,$cart_query);
             while($row=mysqli_fetch_array($result)){
               $product_id=$row['product_id'];
               $select_products="Select * from `products` where product_id='$product_id'";
               $result_products=mysqli_query($con,$select_products);
               while($row_product_price=mysqli_fetch_array($result_products)){
                 $product_price=array($row_product_price['product_price']);
                 $product_values=array_sum($product_price);
                 $total_price+=$product_values;
               }
             }
            
            ?>
                <tr>
                    <td>Apple</td>
                    <td><img src="./images/apple.webp" height=80px width="80px"  class="cart_img"   alt=""></td>
                    <td><input type="" text="" id=""></td>
                    <td>9000</td>
                    <td><input type="check box"></td>
                    <td>
                       <button class="bg-info p-3 py-2 border-0 mx-3">Update</button><button class="bg-info p-3 py-2 border-0 mx-3">Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex mb-5">
            <h4 class="px-3">Subtotal:<strong class="text-info">5000/-</strong></h4>
            <a href="index.php"><button class="bg-info p-3 py-2 border-0 mx-3">Continue Shopping</button></a>
            
            <a href="#"><button class="bg-secondary p-3 py-2 border-0 text-light">Check Out</button></a>
        </div>
    </div>
</div>

<?php  include("./includes/footer.php") ?>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>