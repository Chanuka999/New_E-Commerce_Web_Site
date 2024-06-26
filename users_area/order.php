
<?php
include('../includes/connect.php'); // Assuming this file contains database connection code
include('../functions/common_function.php'); // Assuming this file contains common functions

if(isset($_GET['user_id'])){
    $user_id = mysqli_real_escape_string($con, $_GET['user_id']); // Sanitize input
}

$get_ip_address = getIPAddress(); // Assuming this function is defined in common_function.php
$total_price = 0;
$cart_query_price = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'"; // Fixing the WHERE clause
$result_cart_price = mysqli_query($con, $cart_query_price);
$invoice_number = mt_rand();
$status = 'pending';
$count_products = mysqli_num_rows($result_cart_price);

while($row_price = mysqli_fetch_array($result_cart_price)){
    $product_id = $row_price['product_id'];
    $select_product = "SELECT * FROM `products` WHERE product_id='$product_id'";
    $run_price = mysqli_query($con, $select_product);
    
    while($row_product_price = mysqli_fetch_array($run_price)){
        $product_price = $row_product_price['product_price']; // Corrected variable name
        $total_price += $product_price; // Accumulate total price
    }
}

$get_cart = "SELECT * FROM `cart_details`";
$run_cart = mysqli_query($con, $get_cart);
$get_item_quantity = mysqli_fetch_array($run_cart);
$quantity = $get_item_quantity['quantity'];

if($quantity == 0){
    $quantity = 1;
    $subtotal = $total_price;
} else {
    $subtotal = $total_price * $quantity;
}

$insert_orders = "INSERT INTO `user_orders` (user_id, amount_due, invoice_number, total_products, order_date, order_status) 
                  VALUES ('$user_id', '$subtotal', '$invoice_number', '$count_products', NOW(), '$status')";

$result_query = mysqli_query($con, $insert_orders);

if($result_query){
    echo "<script>alert('Orders are submitted successfully')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
} else {
    echo "Error: " . mysqli_error($con); // Check for any SQL errors
}


$insert_pending_orders = "INSERT INTO `orders_pending` (user_id, invoice_number, product_id, quantity, order_status) 
                  VALUES ('$user_id', '$invoice_number','$product_id', '$quantity', '$status')";
            
 $result_pending_orders = mysqli_query($con, $insert_pending_orders);


$empty_cart="Delete from `cart_details` where ip_address='$get_ip_address'";
$result_delete=mysqli_query($con,$empty_cart);
?>
