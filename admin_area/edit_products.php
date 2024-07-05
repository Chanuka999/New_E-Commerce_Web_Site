
<html>
<style>
    body{
        display:contents;
    }

</style>
<body>
<?php
if(!isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
  //  echo $edit_id;
  $get_data="Select * from `products` where product_id=$edit_id";
  $result=mysqli_query($con,$get_data);
  $row=mysqli_fetch_assoc($result);
  $product_title=$row['product_title'];
  // echo $product_title;
  $product_discription=$row['product_discription'];
  $product_keywords=$row['product_keywords'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['$product_image2'];
  $product_image3=$row['product_image3'];
  $product_price=$row['product_price'];
}

?>
<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="foem_label">Product Title</label>
            <input type="text" id="product_title" value="<?php echo $product_title ?>" name="product_title" class="form-control" required="required">
   
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_desc" class="foem_label">Product Description</label>
            <input type="text" id="product_desc" value="<?php echo $product_description ?> name="product_desc" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="foem_label">Product Keyword</label>
            <input type="text" id="product_keywords" value="<?php echo $product_keywords ?> name="product_keywords" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_category" class="foem_label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_brands" class="foem_label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="foem_label">Product Image1</label>
            <div class="d-flex">
                <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto" required="required">
               <img src="./product_images/<?php echo $product_image1 ?>" alt="" class="product_img">
            </div>
           
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="foem_label">Product Image2</label>
            <div class="d-flex">
                <input type="file" id="product_image2" name="product_image2" class="form-control w-90 m-auto" required="required">
               <img src="./product_images/<?php echo $product_image2 ?>" alt="" class="product_img">
            </div>
           
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="foem_label">Product Image3</label>
            <div class="d-flex">
                <input type="file" id="product_image3" name="product_image3" class="form-control w-90 m-auto" required="required">
               <img src="./product_images/<?php echo $product_image3 ?>" alt="" class="product_img">
            </div>
           
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="foem_label">Product Price</label>
            <input type="text" id="product_price" value="<?php echo $product_price ?> name="product_price" class="form-control" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_product" value="update products" class="btn btn-info px-3 mb-3">
        </div>
    </form>
        
    
</div>
</body>
</html>