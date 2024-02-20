<?php
include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taita Taveta University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
       @keyframes moveLeftToRight {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .moving-container {
            background-color: ; /* Set your background color */
            overflow: hidden;
            animation: moveLeftToRight 12s linear infinite; /* Adjust the duration and animation properties as needed */
        }

        .moving-content {
            text-align: center;
            animation: changeColor 7s ease-in-out infinite alternate; /* Adjust the duration and animation properties as needed */
        }

        @keyframes changeColor {
            0%, 100% {
                color: black; /* Initial and final color */
            }
            20% {
                color: #ff0000; /* Change to a random color halfway through */
            }
            40%{
              color: purple;
            }
            60%{
              color: orange;
            }
            80%{
              color: blue;
            }
        }
      .footer{
        bottom: 0;
      }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-at"></i>TTU Ecommerce<i class="fa-solid fa-check"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>6</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Balance: $463.77</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           TTU
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Contacts</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Reviews</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Join Us</a>
        </li>
              </ul>
                    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Hello Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
  </ul>
</nav>
<div class="moving-container">
        <div class="moving-content">
            <h3>What's Poppin?!</h3>
            <p><h3></h3>Discover a world of convenience at Taita Taveta University's cutting-edge ecommerce platform! Elevate your academic journey with a seamless online shopping experience, featuring a curated selection of essentials and exclusive university merchandise. Embrace innovation, shop securely, and be part of a vibrant digital community. Your one-stop destination for academic excellence and university pride awaits—explore, shop, and elevate your Taita Taveta experience!</p>
            <p><h5>E-commerce at its best!</h5></p>
        </div>
    </div>
<div class="row">
  <div class="col-md-10">
<div class="row">
  <div class="col-md-4 mb-2">
  <div class="card">
  <img src="./images/" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">Explore</a>
  </div>
</div>
  </div>
  <div class="col-md-4">
  <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
  <div class="col-md-4">
  <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>


  </div>
  <div class="col-md-2 bg-secondary p-0 text-center">
    <ul class="navbar-nav me-auto">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link"><h2>Brands</h2></a>
        </li>
        <?php
        $select_brands = "Select * from `brands`";
        $result_brands = mysqli_query($con, $select_brands);

        while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            echo "<li class='nav-item'>
                    <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                  </li>";
        }
        ?>
    </ul>
    <ul class="navbar-nav me-auto">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link"><h2>Categories</h2></a>
        </li>
        <?php
        $select_categories = "Select * from `categories`";
        $result_categories = mysqli_query($con, $select_categories);

        while ($row_data = mysqli_fetch_assoc($result_categories)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<li class='nav-item'>
                    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                  </li>";
        }
        ?>
    </ul>
</div>

  </div>
</div>
<div class="bg-primary footer">
  <p class="text-center p-2">&copy; TTU All Rights Reserved 2023</p>
</div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Change text color randomly
        function changeTextColor() {
            const movingContent = document.querySelector('.moving-content');
            movingContent.style.color = getRandomColor();
        }

        // Call the function every second (adjust as needed)
        setInterval(changeTextColor, 1000);
    </script>
</script>
</body>
</html>