<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert product admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-light">
    <div class="container mt-3">
       <h1 class="text-center">Insert Products</h1>

       <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <br>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">

            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_discription" class="form-label">Product discription</label>
                <br>
                <input type="text" name="product_discription" id="product_discription" class="form-control " placeholder="Enter product discription" autocomplete="off" required="required">
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <br>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control " placeholder="Enter product keywords" autocomplete="off" required="required">
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_categories" id="" class="form-select">
                <option value="">select a categories</option>
                <option value=""></option>
               </select>
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_categories" id="" class="form-select">
                <option value="">select a brands</option>
               </select>
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image1</label>
                <br>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image2</label>
                <br>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image3</label>
                <br>
                <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">
                
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <br>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">

            </div>
            <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert products">

            </div>
       </form>
    </div>
</body>
</html>