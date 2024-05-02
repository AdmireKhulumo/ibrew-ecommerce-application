<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include __DIR__."/php/functions.php";
    start_session();
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Ibrew Inc.</title>

    <!-- FavIcon Link -->
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">


    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Swiper Slider CSS Link -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"/>

    <!-- Fancybox CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">

    <!-- Main Style CSS Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <?php

    // connect to db
    $conn = db_connect();

    // get all products
    $sql = "SELECT id, name, category, description, url, price FROM products;";
    $result = $conn->query($sql);

    // store products in the session
    //    $rows = array();
    //    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    //        $rows[] = $row;
    //    }

    $conn->close();
    ?>

    <?php
    debug_log("inside add to cart");

    // Check if form data is submitted
    if (isset($_POST['add_to_cart'])) {
        // Get product details from form data
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_url = $_POST['product_url'];
        debug_log($product_id);
        debug_log($product_name);
        debug_log($product_price);

        // Initialize cart if it doesn't exist in session
        debug_log("session before");
        debug_log($_SESSION);
        if (!isset($_SESSION['cart_items'])) {
            $_SESSION['cart_items'] = array();
        }

        // Check if the product already exists in the cart
        if (array_key_exists($product_id, $_SESSION['cart_items'])) {
            // If product exists, increment the quantity
            debug_log("product exists in cart");
            $_SESSION['cart_items'][$product_id]['quantity']++;
        } else {
            // If product doesn't exist, add it to the cart
            debug_log("product not in cart");
            $_SESSION['cart_items'][$product_id] = array(
                'name' => "$product_name",
                'url' => "$product_name",
                'price' => floatval($product_price),
                'quantity' => 1
            );
        }

        debug_log("session after");
        debug_log($_SESSION);
        // Redirect back to the product display page after adding to cart
    } else {
        // Redirect back to the product display page with an error message if form data is not set
        $_SESSION['error_message'] = "Error: Form data is missing.";
    }
//        header("Location: ".$_SERVER['HTTP_REFERER']);

    ?>


</head>
<body>
<section class="section product-section fluid-section">
    <div class="row">
        <div class="col-lg-12">
            <div class="sec-title text-center mb-5">
                <!--                <h3 class="sec-title-number">02</h3>-->
                <h2 class="h2-title">The Finest Collection of Morula Beverages</h2>
                <div class="sec-title-shape">
                    <img src="assets/images/title-shape.svg" alt="Title Shape">
                </div>
            </div>
        </div>
    </div>
    <div class="product-row position-relative">
        <div class="row g-0">
            <?php while ($row = $result->fetch_array()) { ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-box">
                        <div class="product-box-shape">
                            <img src="assets/images/product-box-shape.png" alt="Product Box Shape">
                        </div>
                        <div class="underline-text underline-top"></div>
                        <div class="underline-text underline-bottom"></div>
                        <div class="underline-text underline-left"></div>
                        <div class="underline-text underline-right"></div>
                        <div class="product-box-img text-center">
                            <a href="product-single.php?id=<?php echo $row['id'] ?>" title=<?php echo $row['name'] ?>>
                                <img src="<?php echo $row['url'] ?>" alt=<?php echo $row['name'] ?>>
                            </a>
                        </div>
                        <div class="product-box-info">
                            <p class="h3-title">
                                <a href="product-single.php?id=<?php echo $row['id'] ?>"
                                   title=<?php echo $row['name'] ?>> <?php echo $row['name'] ?> </a>
                            </p>
                        </div>
                        <div class="ani-line"></div>
                        <div class="product-box-bottom">
                            <h3 class="product-box-price">
                                <?php echo $row['price'] ?>
                            </h3>

<!--                            <div class="add-cart-btn" title="Add to cart">-->
<!--                                <form action="" method="post">-->
<!---->
<!---->
<!--                                    <input type="submit" class="add-cart-btn" name="add-to-cart">-->
<!--                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">-->
<!--                                            <path d="M9.75 0V8.25H18V9.75H9.75V18H8.25V9.75H0V8.25H8.25V0H9.75Z"-->
<!--                                                  fill="#003049"/>-->
<!--                                        </svg>-->
<!---->
<!--                                        <span class="add-to-cart-shape">-->
<!--                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none">-->
<!--                                            <path-->
<!--                                                    d="M19.7633 4.96417C13.2213 5.21995 6.9549 10.3341 3.95998 17.4467C1.15216 22.7464 1.5814 25.6213 1.18499 31.287C0.863554 35.8811 2.70786 41.8047 7.18675 45.4259C13.3064 50.3736 25.1124 52.0743 33.124 49.7392C46.0595 45.969 51.2063 33.7643 51.1489 23.7338C51.1125 17.3612 49.4282 9.59193 43.0219 5.23087C37.0188 1.14431 28.4826 0.772365 22.8879 0.772461C16.8411 0.772565 10.327 3.44674 7.18675 7.01944"-->
<!--                                                    stroke="black" stroke-width="0.5" stroke-linecap="round"-->
<!--                                                    style="stroke-dasharray: 175.589;"/>-->
<!--                                        </svg>-->
<!--                                    </span>-->
<!--                                    </input>-->
<!---->
<!--                                </form>-->
<!--                            </div>-->

<!--                            todo: use a nicer form-->
<!---->


                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
</body>

