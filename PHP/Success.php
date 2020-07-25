<?php
    require 'includes/common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
    $user_id = $_SESSION['user_id'];
    $item_ids_string = $_GET['itemsid'];

    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
    mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifestyleStore Success</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <style>
            footer{
                margin-top: 350px;
            }
        </style>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container success">
            <p>Your order is confirmed. Thank you for shopping with us. <a href="Products.php">Click here</a> to purchase any other item.</p>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

