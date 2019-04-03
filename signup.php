<?php
    require "includes/common.php";
    if (isset($_SESSION['email'])) 
        {   header('location: product.php'); } 
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
    include "includes/header.php";
    ?>
            <br><br>
        <div class="container">
            
            <div class="row">
                <div class="col-xs-4">
                    
                    <h1> SIGN UP</h1>
                    <form action="signup_script.php" method="post">
                        <div class="form-group">
                            <input type="text"  class="form-control" required="true" placeholder="Name" name="name" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email" placeholder="E-mail" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" required="true" name="password" placeholder="Password" pattern=".{6}">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" required="true" name="contact" placeholder="Contact">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                            
                    </form>
                 
                    
                    
                </div>
            </div>
            
        </div>
         <?php
                    include "includes/footer.php";
                    ?> 
    </body>
    

</html>