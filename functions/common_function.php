<?php  

include('./includes/connect.php');

function getproducts(){
    global $con;
    $select_query="Select  * from `products` order by rand() limit 0,9";
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
  echo " <div class='col-md-4 mb-2'>
     <div class='card' >
      <img src='./admin_area/product_images/$product_image1' height:200px; class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_disription</p>
   <a href='#' class='btn btn-info'>Add to cart</a>
    <a href='#' class='btn btn-secondary'>view more</a>
  </div>
</div>
</div>
";
 
}
}

?>