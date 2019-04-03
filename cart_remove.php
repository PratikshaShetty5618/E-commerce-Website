<?php
    require "includes/common.php";
    
$id=$_SESSION['id'];
$user_id=$_SESSION['user_id'];

$remove="DELETE FROM users_items WHERE user_id=$user_id and item_id=$item_id";
$remove_result= mysqli_query($con, $remove);
header('location: cart.php');
?>
