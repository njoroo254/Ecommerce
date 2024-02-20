<?php
include('../includes/connect.php');
if(isset($_POST['add_products'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_categories=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    $product_image1=$_POST['product_image1']['name'];
    $product_image2=$_POST['product_image2']['name'];
    $product_image3=$_POST['product_image3']['name'];

    $temp_image1=$_POST['product_image1']['tmp_name'];
    $temp_image2=$_POST['product_image2']['tmp_name'];
    $temp_image3=$_POST['product_image3']['tmp_name'];

    if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_categories=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' ){
        echo"<script>alert('Please fill all the fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");
$add_products="insert into `products`(product_title, product_description, product_keyword, category_id, brand_id, product_image1, product_image2, product_image3, product_price,
date, status) values('$product_title', '$product_description', '$product_keyword', '$product_categories', '$product_brands', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(),'$product_status')";
$result_query=mysqli_query($con, $add_products);
if($result_query){
    echo "<script>alert('Successfully Added Product')</script>";
}
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light"> 
    <div class="container mt-3 w-100">
        <h1 class="text-center">ADD PRODUCTS</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_title" class="form-label"><b>Product Title :</b></label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_description" class="form-label"><b>Product Description :</b></label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_keyword" class="form-label"><b>Product Keyword :</b></label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter Product Keyword" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_categories" id="" class="form-select">
                    <option value=""><b>Select Category</b></option>
                    <?php
                      $Select_query="Select * from `categories`";
                      $result_query=mysqli_query($con, $Select_query);
                      while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value=''><b>$category_title</b></option>";
                      }
                    ?>
                </select>
                </div>
                <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_brands" id="" class="form-select">
                    <option value=""><b>Select Brand</b></option>
                    <?php
                      $Select_query="Select * from `brands`";
                      $result_query=mysqli_query($con, $Select_query);
                      while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value=''><b>$brand_title</b></option>";
                      }
                    ?>
                </select>
                </div>
                <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_image1" class="form-label"><b>Product Image 1 :</b></label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" placeholder="Product Image 1" autocomplete="off">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_image2" class="form-label"><b>Product Image 2 :</b></label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" placeholder="Product Image 2" autocomplete="off">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_image3" class="form-label"><b>Product Image 3 :</b></label>
                <input type="file" name="product_image1" id="product_image3" class="form-control" placeholder="Product Image 3" autocomplete="off">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <label for="product_price" class="form-label"><b>Product Price :</b></label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto ">
                <input type="submit" name="add_products" class="form-control bg-info" value="Add Product">
            </div>
        </form>
    </div>
    
</body>
</html>
