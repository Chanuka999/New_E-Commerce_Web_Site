<?php  
include('../includes/connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-contrall" name="cat_title" placeholder="insert categories" aria-label="username" aria-describedby="basic-addon1">

    </div> 
    <div class="input-group w-10 mb-2 m-auto">
       
        <!-- <input type="submit" class="form-contrall" name="insert_cat" value="insert categories"> -->
      <button class="bg-info p-2 my-3 border-0">Insert Categories</button>

    </div> 
</form>
</body>
</html>
