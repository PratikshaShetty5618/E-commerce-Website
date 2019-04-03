<?php
    require 'includes/common.php';
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
            ?>
        <br><br><br><br>
        
        <div class="container">
            
            <div class="row">
                <div class="col-xs-4">
                    
                    <h1> Change Password</h1>
                    <form action='settings_script.php' method="post">
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Old Password" name="op" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="np" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password" placeholder="Re-type New Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Change" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <footer>
                    <div class="container">
                        <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
                    </div>
                </footer>
    </body>
    
</html>
