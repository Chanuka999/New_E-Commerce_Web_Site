<?php  

include('./includes/connect.php');

function getproducts(){
    global $con;

    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
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
    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>view more</a>
  </div>
</div>
</div>
";
 
}
}
}
}


function get_all_products(){
  global $con;

  if(!isset($_GET['category'])){
  if(!isset($_GET['brand'])){
  $select_query="Select  * from `products` order by rand()";
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
  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>
";

}
}
}
}



function get_unique_categories(){
  global $con;

  if(isset($_GET['category'])){
   $category_id=$_GET['category'];
  $select_query="Select  * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center  text-danger' >No stack for the category</h2>";
}


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
  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>
";

}
}
}



function get_unique_brands(){
  global $con;

  if(isset($_GET['brand'])){
   $brand_id=$_GET['brand'];
  $select_query="Select  * from `products` where category_id=$brand_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center  text-danger' >This  brand is not available for service</h2>";
}


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
  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>
";

}
}
}

function search_product(){
  global $con;

  if(isset($_GET['search_data_product'])){
   $search_data_value=$_GET['search_data']; 
  $search_query="Select  * from `products` where product_keywords like '%$search_data_value%'";
$result_query=mysqli_query($con,$search_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center  text-danger' >No result match. No
  products found on this category!</h2>";
}


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
   <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>
";

}
}
}
function getbrands(){
    global $con;
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
}


function getcategories(){
       global $con;
    $select_categories="Select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
 
  while($row_data=mysqli_fetch_assoc($result_categories)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
     echo "<li class='nav-item'>
     <a href='index.php?category=$category_id' class='nav-light text-light'>$category_title</a>
      </li>";
   
   }
}

function view_details(){
  global $con;

  if(isset($_GET['$product_id'])){
  if(!isset($_GET['category'])){
  if(!isset($_GET['brand'])){
    $product_id=$_GET['$product_id'];
  $select_query="Select  * from `products` where product_id=$product_id";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_disription=$row['product_disription'];
$product_image1=$row['product_image1'];
$product_image2=$row['product_image2'];
$product_image3=$row['product_image3'];
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
  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>

 <div class='col-md-8'>
             <div class='row'>
                <div class='col-md-12'>
                   <h4 class='text-center text-info mb-5'>Related products</h4> 
                </div>
                <div class='col-md-6'>
                <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>

                </div>
                <div class='col-md-6'>
                <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
                </div>
             </div>
        </div>";

}
}
}
}
}


?>