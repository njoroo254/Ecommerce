<?php
include('../includes/connect.php');
if(isset($_POST['add_brand'])){
  $brand_title=$_POST['brand_title'];
  $select_query="Select * from `brands` where brand_title='$brand_title'";
  $result_select=mysqli_query($con, $select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('Brand already exists!')</script>";
  }else{
  $insert_query="insert into`brands` (brand_title) values('$brand_title')";
  $result=mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Brand has been added successfuly!')</script>";
  }}
}
?>
<h2 class="text-center">ADD BRANDS</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control text-center" name="brand_title" placeholder="Add Brand" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
     <input type="submit" class="form-control bg-info" name="add_brand" value="Add Brand">
</div>
</form>