<?php
    
    require "common.php";
    $item_id=$_GET['item_id'];
    $user_id=session_id();
    $cart="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $cart_result= mysqli_query($con, $cart);
    header('location: product.php');

?>
