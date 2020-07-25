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
        <title>LifestyleStore Settings</title>
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
            <div class="row">
                <div class="col-xs-6">
                    <h1>Change Password</h1>
                    <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                      <form method="POST" action="settings_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="Old" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="New" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="Confirm" placeholder="Re-type New Password">
                    </div>
                    <button class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

