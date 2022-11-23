<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ShoppingCart.css">
    <title>Shoppee Cart</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <h3 class="h3 d-inline mt-5">Window Shopping</h3>
            <div class="d-inline float-right ">
            <a href="cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart <span class="badge badge-light"><?php echo isset($_SESSION['cartItems'])? count($_SESSION['cartItems']): '0' ?></span>
            </a>
            </div>
        </div>
        <hr>
        <h5>Online Shopping is Successful!</h5>
        <div class="my-3">
            <button class="btn btn-danger">
                <i class="fa-solid fa-bag-shopping"></i>
                Continue
            </button>
        </div>    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>