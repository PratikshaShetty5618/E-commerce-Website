<?php
    require "includes/common.php";
    if (isset($_SESSION['email'])) 
        {  
        $crs=$_SESSION['course'];
        header('location: $crs.php'); } 
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="Assign2.css" type="text/css">
        <link rel="stylesheet" href="Bootstrap/bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
 
    <body>
        <?php
            include 'includes/header.php';
            $user_id= session_id();
            $added="SELECT * FROM users_items INNER JOIN items ON users_items.item_id=id";
            $added_result= mysqli_query($con, $added_result);
            if(mysqli_num_rows($added_result)==0)
            {
                echo "Add items to the cart first!";
            }
            
            else
            {
                while(1)
                {
                    $sum=0;
                    
                    
                }
            }
            ?>
        
        <br><br><br><br>
        
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th><th>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs.0/-</td>
                            <td><a href="success.html"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
         <?php
             include 'includes/footer.php';
             ?>
    </body>
</html>