<?php
include('../includes/connect.php');
if(isset($_POST['add_cat'])){
  $category_title=$_POST['cat_title'];
  $select_query="Select * from `categories` where category_title='$category_title'";
  $result_select=mysqli_query($con, $select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('Category already exists!')</script>";
  }else{
  $insert_query="insert into`categories` (category_title) values('$category_title')";
  $result=mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Category has been added successfuly!')</script>";
  }}
}
?>
<h2 class="text-center">ADD CATEGORIES</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control text-center" name="cat_title" placeholder="Add Category" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
     <input type="submit" class="form-control bg-info" name="add_cat" value="Add Category">
</div>
</form>