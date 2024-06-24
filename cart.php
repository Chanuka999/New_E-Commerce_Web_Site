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
                <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Apple</td>
                    <td><img src="./images/apple.webp" height=150px     alt=""></td>
                    <td><input type="" text="" id=""></td>
                    <td>9000</td>
                    <td><input type="check box"></td>
                    <td>
                        <p>Update</p>
                        <p>Remove</p>
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