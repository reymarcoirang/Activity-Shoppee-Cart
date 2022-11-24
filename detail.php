<?php
    session_start();
    $arrProducts = [
        [
            'name' => "Adidas Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore voluptate ea consequatur! Doloribus maiores, fugit, laborum unde magnam necessitatibus a minima animi",
            'price' => "780",
            'photo1' => "picture1.1.jpg",
            'photo2' => "picture1.2.jpg",
        ],
        [
            'name' => "Gucci Shirt",
            'description' => "Dolore temporibus deleniti ipsam nostrum enim dolorem accusantium commodi ullam consequuntur iure. Nesciunt esse ad inventore eos earum rerum assumenda et beatae animi, temporibus itaque repudiandae voluptas eum corrupti aut atque facere",
            'price' => "2000",
            'photo1' => "picture2.1.jpg",
            'photo2' => "picture2.2.jpg",
        ],
        [
        
            'name' => "Polo Shirt",
            'description' => "Maiores consequatur aliquid at, iste labore delectus alias ipsa. Alias, sed veritatis fuga asperiores quasi, ipsum corrupti dolores quis animi inventore tenetur illum! Animi veniam rerum et quisquam vero aliquam, sapiente repudiandae fugiat cumque! Ducimus",
            'price' => "2500",
            'photo1' => "picture3.1.jpg",
            'photo2' => "picture3.2.jpg",
        
        ],
        [        
            'name' => "Adidas Short",
            'description' => "Neque. Maiores odio soluta perspiciatis aut unde eligendi dolor illum eveniet. Alias, sed veritatis fuga asperiores quasi, ipsum corrupti dolores quis animi inventore tenetur illum! Animi veniam rerum et quisquam vero aliquam, sapiente repudiandae fugiat cumque! Ducimus",
            'price' => "500",
            'photo1' => "picture4.1.jpg",
            'photo2' => "picture4.2.jpg",
        ],
        [
            'name' => "Sling Bag",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "2500",
            'photo1' => "picture5.1.jpg",
            'photo2' => "picture5.2.jpg",
        ],
        [
            'name' => "Jogger",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "1000",
            'photo1' => "picture6.1.jpg",
            'photo2' => "picture6.2.jpg",
        ],
        [
            'name' => "Nike Shirt",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "800",
            'photo1' => "picture7.1.jpg",
            'photo2' => "picture7.2.jpg",
        ],
        [
            'name' => "Lebron Jersey",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "5000",
            'photo1' => "picture8.1.jpg",
            'photo2' => "picture8.2.jpg",
        ],


    ];
    if(isset( $_SESSION['cartCount'])){
        $CarCount = $_SESSION['cartCount'];
    } 
    if(isset($_POST['btnConfirm'])){
        $CarCount++;        
        $_SESSION['cartItems'][$CarCount]['id'] = $_GET['pid'];
        $_SESSION['cartItems'][$CarCount]['size'] = $_POST['radSize'];
        $_SESSION['cartItems'][$CarCount]['qty'] = $_POST['inputQT'];
        $_SESSION['cartCount'] = $CarCount;
  
        header("Location: confirm.php");
    }
    else if(isset($_POST['btnCancel'])){
        header("Location: index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <span class="sr-only">unread messages</span>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5 col-sm-7 col-12">
                <div class="product-grid2 card">
                    <div class="product-image2">
                        <img class="pic-1" src="./img/Picture/<?php echo $arrProducts[$_GET['pid']]['photo1'];?>">
                        <img class="pic-2" src="./img/Picture/<?php echo $arrProducts[$_GET['pid']]['photo2'];?>">
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-5 col-12">
                <h4 class="h4 d-inline py-5"><?php echo $arrProducts[$_GET['pid']]['name'];?>
                    <span class="badge badge-dark">₱<?php echo $arrProducts[$_GET['pid']]['price'];?></span>
                </h4>
                <p class="my-3"><?php echo $arrProducts[$_GET['pid']]['description'];?></p>
                <hr>
                
                <form action="" method="post" class="form-group">
                    <h5>Select Size</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radSize" id="radXS" value="XS" checked><label class="form-check-label pr-4" for="radXS">XS</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radSM" value="SM"><label class="form-check-label pr-4" for="radSM">SM</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radMD" value="MD"><label class="form-check-label pr-4" for="radMD">MD</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radLG" value="LG"><label class="form-check-label pr-4" for="radLG">LG</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radXL" value="XL"><label class="form-check-label pr-4" for="radXL">XL</label>
                    </div>
                    <hr>
                    <h5>Enter Quantity:</h5>
                    <input class="form-control" name="inputQT" type="number" placeholder="" min="1" max="100" value="1">
                    <div class="my-3">
                        <button name="btnConfirm"class="btn btn-dark">
                            <i class="fa-solid fa-circle-check"></i>
                            Confirm Product Purchase
                        </button>
                        <a href="index.php"name="btnCancel" class="btn btn-danger">Cancel/Go Back</button>
                    </div>
                </form>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>