<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dash board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <style>
      .admin-image{
          width: 100px;
          object-fit: contain;
       }
       .footerr{
        position: absolute;
        bottom: 0;
        background-color: rgba(33, 136, 177, 0.568);
       }
    </style>
</head>
<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
         <img src="../images/logo.jpeg" alt="" class="logo">
         <nav class="navbar navbar-expand-lg ">
           <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-lik">Welcome guest</a>
            </li>
           </ul>

         </nav>
        </div>
    </nav>
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
         <div class="p-3">
            <a href="#"><img src="../images/images.jpeg" alt="" class="admin-image"></a>
            <p class="text-light text-center">Admin Name</p>
         </div>
         <!--   -->
         <div class="button text-center">
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1 ">Insert Products</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">All payment</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>

         </div>
        </div>
    </div>
  </div>  

  <div class="footerr">
    <p>All right reserved o- designed by chanuka-2024</p>
  </div> 
  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>