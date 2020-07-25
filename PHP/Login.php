<?php
    require 'includes/common.php';
    
    if(isset($_SESSION['email'])) {
        header('location: Products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifestyleStore login</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <style>
            footer{
                margin-top: 300px;
            }
        </style>
    </head>
    <body>
       <?php
       include 'includes/header.php';
       ?>
        <div class="container panelstyle">
            <div class="row row-style">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p>Login to make purchase</p>
                        </div>
                        <form method="POST" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                         <div class="login">
                        <button class="btn btn-primary">Login</button>
                         </div>
                        </form>
                        <div class="panel-footer">
                            Dont have an account?<a href="SignUp.html">Regsiter</a>
                        </div>
                </div>
            </div>
        </div>
        <?php
            require 'includes/footer.php';
        ?>
    </body>
</html>

