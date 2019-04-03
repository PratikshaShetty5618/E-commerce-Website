<?php

function check_if_added_to_cart($item_id)
{
    $user_id= session_id();
    require "common.php";
    $check="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    $check_result= mysqli_query($con, $check);
    if( mysqli_num_rows($check_result) >= 1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
    
    
?>
