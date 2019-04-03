<?php
    require "includes/common.php";
    if (isset($_SESSION['email'])) 
        {   header('location: index.php'); } 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="Assign2.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap\bootstrap\js\jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\bootstrap.min.js"></script>
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $item_id=$_SESSION['item_id'];
            $update_item_query="UPDATE users_items SET staus='Confirmed' WHERE item_id='$item_id' ";
          ?>  
            
        
        
        <div class="container">
        <h3>Your order is confirmed.</h3> 
        <h5>Thank you for shopping with us.</h5> 
        <p><a href="product.html">Click here</a> to purchase any other item. </p>
        </div>
        
    </body>
</html>
