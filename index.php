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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
        <div class="row">
            <?php
                foreach($arrProducts as $key => $valueItem){
                    echo '
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid2 card mb-5">
                                <div class="product-image2">
                                    <a name="btnDetails" href="./detail.php?pid=' . $key . '">
                                        <img class="pic-1" src="./img/Picture/' . $arrProducts[$key]['photo1'] . '">
                                        <img class="pic-2 h-100" src="./img/Picture/' . $arrProducts[$key]['photo2'] . '">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title d-inline">' . $arrProducts[$key]['name'] . '<br>
                                        <span class="badge badge-dark">₱ ' . $arrProducts[$key]['price']. '</span>
                                    </h3>
                                </div>
                            </div>
                        </div>     
                    ';
                }
            ?>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>