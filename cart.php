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
    $sub_total = 0;
    $itemQTYCount = 0;
    $product_id = 0;
    $product_qty = 0;
    $itemTotal = 0;
    if(isset($_POST['btnUpdate'])){
        foreach($_POST['inputQTY'] as $key => $value){
            $cartQTYCount = $key + 1;
            $_SESSION['cartItems'][$cartQTYCount]['qty'] = $value;
        }
    }

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

    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 ">
            <h3 class="h3 d-inline mt-5">Window Shopping</h3>
            <div class="d-inline float-right ">
            <a href="cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart <span class="badge badge-light"><?php echo isset($_SESSION['cartItems'])? count($_SESSION['cartItems']): '0' ?></span>
                <span class="sr-only">unread messages</span>
            </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
            <form action="" method="post">

                <div class="table-responsive">
                    <?php if (count($_SESSION['cartItems']) > 0): ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Size</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cartItems'] as $key => $value){    
                                        $product_id = $_SESSION['cartItems'][$key]['id'];
                                        $product_qty =  $_SESSION['cartItems'][$key]['qty'];
                                        $product_total = $arrProducts[$product_id]['price'] * $product_qty;
                                        $itemQTYCount = $itemQTYCount + $product_qty;
                                        $sub_total = $sub_total + $product_total;

                                        echo '
                                        <tr>
                                            <td><img style="width: 2em" src="./img/Picture/' . $arrProducts[$product_id]['photo1'] . '"/></td>
                                            <td>' . $arrProducts[$product_id]['name'] . '</td>
                                            <td class="text-center">' . $_SESSION['cartItems'][$key]['size'] . '</td>
                                            <td class="text-center"><input class="text-center" name="inputQTY[]" type="number" min="1" max="100" value="'.  $product_qty . '"></td>
                                            <td class="text-center" >₱ ' . $arrProducts[$product_id]['price'] . ' </td>
                                            <td class="text-center">₱ ' . $product_total .'</td>
                                            <td class="text-center"><a class="btn btn-sm btn-danger" href="remove-confirm.php?cartID=' . $key . '&qty=' . $product_qty .'"><i class="fa fa-trash"></i> </a> </td>
                                        </tr>
                                        ';
                                    }
                                    
                                ?>
                        
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center"><strong>Total</strong></td>
                                    <td class="text-center"><?php echo $itemQTYCount;?></td>
                                    <td class="text-center">----</td>
                                    <td class="text-center"><strong>₱ <?php echo  $sub_total?></strong></td>
                                    <td class="text-center">----</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="row">
                        <form class="form-inline w-100" method="post">
                            <div class="col-sm-12  col-md-4">
                                <a href="index.php" class="btn btn-block btn-danger">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    Continue Shopping
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <button name="btnUpdate" href="cart.php" name ="clickUpdate" class="btn btn-block btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>                          
                                    Update Cart
                                </button>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="clear.php" href="clear.php" class="btn btn-lg btn-block btn-info">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Checkout
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
            <?php else: ?> 
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Product</th>
                            <th scope="col" class="text-center">Size</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-right">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cart is Empty</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-sm-12  col-md-4">
                    <a href="index.php" class="btn btn-block btn-danger">
                        <i class="fa-solid fa-bag-shopping"></i>
                        Continue Shopping
                    </a>
                </div>


            <?php endif; ?>  
        </div>
    </div>
                                
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>