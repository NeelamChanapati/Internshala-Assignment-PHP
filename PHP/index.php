<?php
    /* Includes database connected file */
    require 'includes/common.php';
    
    /* If already logged in you will be redirected to Products page */
    if(isset($_SESSION['email'])){
        header('location: Products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jquery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>LifestyleStore</title>
        
        <!-- Linking style sheet -->
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
        <?php
             /* Includes header file */
            include 'includes/header.php';
        ?>
    <div id="content">
        <!-- Banner Image -->
        <div class="banner_image">
            
            <!-- Banner Content -->
            <div class="container">
                <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <h4>Flat 40% OFF premium brands</h4><br>
                    <a href="Products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div> 
        </div>
        </div>
        <!-- Thumbnails -->
        <div class="container">
            <div class="row text-center">
                <div class="items">
                    <a href="Products.php">
                    <img src="images/thumbnails/camera.jpg" alt="Camera" class="Thumbnail">
                    <div class="captions">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world</p>
                    </div>
                    </a>
                </div>
                <div class="items">
                    <a href="Products.php">
                        <img src="images/thumbnails/watch.jpg" alt="Watch" class="Thumbnail">
                    <div class="captions">
                        <h2>Watches</h2>
                        <p>Original watches from the best brands</p>
                    </div>
                    </a>
                </div>
                <div class="items">
                    <a href="Products.php">
                    <img src="images/thumbnails/shirt.jpg" alt="Shirt" class="Thumbnail">
                    <div class="captions">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts</p>
                    </div>
                    </a>                  
                </div>
        </div>
        </div>
        <?php
            /* Includes footer file */
            include 'includes/footer.php';
        ?>
    </body>
</html>


