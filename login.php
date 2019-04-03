<?php
    require "includes/common.php";
    if (isset($_SESSION['email'])) 
        {   header('location: products.php'); } 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" href="Assign2.css" type="text/css">
        <link rel="stylesheet" href="Bootstrap/bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
    include "includes/header.php";
    ?>
        <br><br>
        <div class="row row_style">
            <div class="col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>LOGIN</h1>
>                </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                    
                    <form action="login_submit.php" method="post">
                        
                       
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Login</button>
                        </div>
                        
                            
                    
                    </form>
                </div>
                    <div  class="panel-footer">
                        <p>Don't have an account? Register</p>
                        
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>
