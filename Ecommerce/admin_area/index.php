<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .admin_image{
    width: 100px;
    object-fit: contain;
}
.footer{
    bottom: 0;
    position: absolute;
    width: 100%;
}
</style>
</head>
<body>
<div class="container-fluid p-0">
<div class="bg-info">
        <h1 class="text-center p-2">
            Admin Dashboard
        </h1>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <img src="../images/logo.jpg" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
</div>
    </nav>
    <div class="bg-light">
        <h3 class="text-center p-2">
            Manage Store
        </h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-1">
                <a href="#"><img src="../images/profile.png" alt="" class="admin_image"></a>
                <p class="text-light text-center">
                    Admin Name
                </p>
            </div>
            <div class="button text-center">
<button><a href="Add_products.php" class="nav-link text-dark bg-info my-1">Add Products</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">View Products</a></button>
<button><a href="index.php?Add_brands" class="nav-link text-dark bg-info my-1">Add Brands</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">View Brands</a></button>
<button><a href="index.php?Add_categories" class="nav-link text-dark bg-info my-1">Add Categories</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">View Categories</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">View Orders</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">View Payments</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">View Customers</a></button>
<button><a href="" class="nav-link text-dark bg-info my-1">Logout</a></button>
                        </div>
        </div>
    </div>
    <div class="container my-3">
        <?php
        if(isset($_GET['Add_categories'])){
            include('Add_categories.php');
        }
        if(isset($_GET['Add_brands'])){
            include('Add_brands.php');
        }
       
        ?>
    </div>
    <div class="bg-primary footer">
  <p class="text-center p-1">&copy; TTU All Rights Reserved 2023</p>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>