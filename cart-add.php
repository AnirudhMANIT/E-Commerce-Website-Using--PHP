<?php 
$id=$_GET['id'];
require 'common.php';
$query="INSERT INTO users_items(user_id,item_id,status)VALUES('$user_id','$item_id','Added to cart')";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
header('location: product.php');
?>