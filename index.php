<?php
    require "includes/common.php";
    if (isset($_SESSION['email'])) 
        {   header('location: product.php'); } 
?>
<!DOCTYPE html>


<html>
    
    
<head>
        <title>E-commerce</title>
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
    <div class="banner-image">
            <div class="container">
                 <center>
                <div class="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p> Flat 40% OFF on premium brands </p>
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                </center>

            </div>
    </div>
    
    <!--    
        <div class="container">
                    <div class="items">                     
                        <a href="#" >                         
                            <img src="img/camera.jpg" alt="" class="thumbnail">                         
                            <div class="caption">                             
                                <h2>Cameras</h2>                             
                                <p>Choose among the best available in the world.</p>                         
                            </div>                     
                        </a>                 
                    </div> 
            <div class="items">                     
                        <a href="#" >                         
                            <img src="img/watch.jpg" alt="" class="thumbnail">                         
                            <div class="caption">                             
                                <h2>Watches</h2>                             
                                <p>Original watches from the best brand.</p>                         
                            </div>                     
                        </a>                 
                    </div> 
            <div class="items">                     
                        <a href="#" >                         
                            <img src="img/shirt.jpg" alt="" class="thumbnail">                         
                            <div class="caption">                             
                                <h2>Shirts</h2>                             
                                <p>Our exquisitive collection of shirts.</p>                         
                            </div>                     
                        </a>                 
                    </div> 
                
           -->     
                
            
                <?php
                    include "includes/footer.php";
                    ?>
        
 
</body> 

</html>