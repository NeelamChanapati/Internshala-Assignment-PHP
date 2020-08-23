<?php
    /* Includes database connected file */
    require 'includes/common.php';
    
     /* If already logged in you will be redirected to Products page */
    if(isset($_SESSION['email'])) {
        header('location:Products.php');
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
        
        <title>LifestyleStore Signup</title>
        
        <!-- Linking style sheet -->
        <link rel="stylesheet" type="text/css" href="Style.css">
        <style>
            footer{
                margin-top: 300px;
            }
        </style>
    </head>
    <body>
        <?php
            /* Includes header file */
            include 'includes/header.php';
        ?>
        
        <!-- Sign Up Panel -->
        <div class="container panelstyle">
            <div class="row">
                <div class="col-xs-6">  
                    <h1>SIGN UP</h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>  
                         <div class="form-group">
                             <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        </div>  
                         <div class="form-group">
                             <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required>
                        </div>  
                         <div class="form-group">
                             <input type="tel" class="form-control" name="contact" placeholder="Contact" pattern=".{10,}" required>
                        </div>  
                         <div class="form-group">
                             <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>  
                         <div class="form-group">
                             <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
            /* Includes footer file */
            include 'includes/footer.php';
        ?>
    </body>
</html>

