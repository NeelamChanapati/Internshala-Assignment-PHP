<?php
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifestyleStore Products</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/Check_if_added.php';
        ?>
        <div class="Products">
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Cameras/5.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <h4>Price:Rs.36000.00</h4>
                        <?php
                            if(!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                if(check_if_added_to_cart(1)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Cameras/2.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <h4>Price:Rs.40000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                if(check_if_added_to_cart(2)) {
                         ?> 
                            <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=2" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Cameras/3.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <h4>Price:Rs.50000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php
                            } else {
                                if(check_if_added_to_cart(3)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p>
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=3" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Cameras/4.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <h4>Price:Rs.80000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php
                            } else {
                                if(check_if_added_to_cart(4)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=4" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/watches/9.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <h4>Price:Rs.13000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php
                            } else {
                                if(check_if_added_to_cart(5)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p>
                                <?php } else { ?>
                              <p><a href="cart-add.php?id=5" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/watches/10.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <h4>Price:Rs.3000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php
                            } else {
                                if(check_if_added_to_cart(6)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=6" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/watches/11.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <h4>Price:Rs.8000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                              <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                if(check_if_added_to_cart(7)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=7" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/watches/12.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <h4>Price:Rs.18000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php
                            } else {
                                if(check_if_added_to_cart(8)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p>
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=8" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row shirts">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/Shirts/8.jpg" alt="responsive image" style="height: 168px;">
                    <div class="caption">
                        <h3>H&W</h3>
                        <h4>Price:Rs.800.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                              <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php
                            } else {
                                if(check_if_added_to_cart(9)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=9" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Shirts/6.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <h4>Price:Rs.1000.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                             <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                if(check_if_added_to_cart(10)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p>
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=10" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Shirts/13.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <h4>Price:Rs.1500.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                if(check_if_added_to_cart(11)) {
                         ?> 
                              <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p>
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=11" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/Shirts/14.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <h4>Price:Rs.1300.00</h4>
                            <?php
                            if(!isset($_SESSION['email'])) { ?>
                               <p><a href="Login.php" type="Submit" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                if(check_if_added_to_cart(12)) {
                         ?> 
                               <p><a href="#" type="Submit" class="btn btn-success btn-block" disabled>Added to cart</a></p> 
                                <?php } else { ?>
                               <p><a href="cart-add.php?id=12" type="Submit" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>
                               <?php
                                }
                            }
                               ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>


