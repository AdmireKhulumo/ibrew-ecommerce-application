<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include __DIR__ . "/php/functions.php";
    start_session();
    //    session_destroy();
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


    <?php

    $cart_items = array();
//    $shipping_cost = 50.00;
    $items_total = 0.00;

    if (!empty($_SESSION['cart_items'])) {
        $cart_items = $_SESSION['cart_items'];
        foreach ($cart_items as $product_id => $product) {
            $subtotal = $product['price'] * $product['quantity'];
            $items_total += $subtotal;
        }
    }

    $tax_percentage = 0.14;
    $tax = round($tax_percentage * $items_total, 2);
    $cart_total = $tax + $items_total;
    $_SESSION['cart_total'] = $cart_total;
    $_SESSION['tax'] = $tax;
    ?>

</head>

<body class="body-fixed">

<!-- Start of Page Loader-->
<div class="page-loader">
    <div class="page-loader-content">
        <img src="assets/images/logo.png" alt="Loader">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- End of Page Loader-->

<!-- Start of Search Form-->
<div class="search-form-wp">
    <form class="search-form">
        <input type="search" placeholder="Search Your Morula Beverage Here..." class="form-input">
        <button type="submit"><img width="24" height="24" src="assets/images/search-icon.svg" alt="Search Icon">
        </button>
    </form>
    <button class="close-button add-cart-btn" id="search-button">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M9.75 0V8.25H18V9.75H9.75V18H8.25V9.75H0V8.25H8.25V0H9.75Z" fill="#003049"></path>
        </svg>

        <span class="add-to-cart-shape">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                        <path d="M19.7633 4.96417C13.2213 5.21995 6.9549 10.3341 3.95998 17.4467C1.15216 22.7464 1.5814 25.6213 1.18499 31.287C0.863554 35.8811 2.70786 41.8047 7.18675 45.4259C13.3064 50.3736 25.1124 52.0743 33.124 49.7392C46.0595 45.969 51.2063 33.7643 51.1489 23.7338C51.1125 17.3612 49.4282 9.59193 43.0219 5.23087C37.0188 1.14431 28.4826 0.772365 22.8879 0.772461C16.8411 0.772565 10.327 3.44674 7.18675 7.01944"
                              stroke="black" stroke-width="0.5" stroke-linecap="round"
                              style="stroke-dasharray: 175.589;"></path>
                    </svg>

                </span>
    </button>
</div>
<!-- Start of Search Form End-->

<!-- Start of Cart Sidebar-->
<div class="cart-sidebar">
    <div class="cart-sidebar-overlay"></div>
    <button class="close-button add-cart-btn">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M9.75 0V8.25H18V9.75H9.75V18H8.25V9.75H0V8.25H8.25V0H9.75Z" fill="#003049"></path>
        </svg>

        <span class="add-to-cart-shape">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                    <path d="M19.7633 4.96417C13.2213 5.21995 6.9549 10.3341 3.95998 17.4467C1.15216 22.7464 1.5814 25.6213 1.18499 31.287C0.863554 35.8811 2.70786 41.8047 7.18675 45.4259C13.3064 50.3736 25.1124 52.0743 33.124 49.7392C46.0595 45.969 51.2063 33.7643 51.1489 23.7338C51.1125 17.3612 49.4282 9.59193 43.0219 5.23087C37.0188 1.14431 28.4826 0.772365 22.8879 0.772461C16.8411 0.772565 10.327 3.44674 7.18675 7.01944"
                          stroke="black" stroke-width="0.5" stroke-linecap="round"
                          style="stroke-dasharray: 175.589;"></path>
                </svg>
            </span>
    </button>

    <div class="cart-sidebar-top-content">
        <h2 class="md-title">Cart</h2>
    </div>

    <div class="cart-sidebar-list">
        <ul>
            <li>
                <div class="cart-sidebar-left">
                    <a class="cart-sidebar-img" href="product-single.php"><img src="assets/images/drink-1.png"
                                                                               alt="Wine Bottle"></a>
                </div>
                <div class="cart-sidebar-right">
                    <a title="Sangiovese Sierra Folia" href="product-single.php">Amarula Morula Delight</a>
                    <div class="cart-product-price"><span>1&nbsp;×</span><span>BWP480</span></div>
                </div>
                <div class="product-remove">
                    <button type="button">
                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.0625 3.75H26.25H20.625V0.9375C20.625 0.419312 20.2057 0 19.6875 0H10.3125C9.79477 0 9.375 0.419312 9.375 0.9375V3.75H3.75H0.9375C0.419769 3.75 0 4.16931 0 4.6875C0 5.20569 0.419769 5.625 0.9375 5.625H2.88179L4.69025 29.1348C4.72778 29.6228 5.13519 30 5.625 30H24.375C24.8648 30 25.2722 29.6228 25.3098 29.1348L27.1182 5.625H29.0625C29.5807 5.625 30 5.20569 30 4.6875C30 4.16931 29.5807 3.75 29.0625 3.75V3.75ZM11.25 1.875H18.75V3.75H11.25V1.875ZM23.5071 28.125H6.49338L4.76257 5.625H10.3125H19.6875H25.2374L23.5071 28.125Z"
                                  fill="#626162"></path>
                            <path d="M15.0002 9.375C14.4825 9.375 14.0627 9.79431 14.0627 10.3125V23.4375C14.0627 23.9557 14.4825 24.375 15.0002 24.375C15.518 24.375 15.9377 23.9557 15.9377 23.4375V10.3125C15.9377 9.79431 15.518 9.375 15.0002 9.375Z"
                                  fill="#626162"></path>
                            <path d="M18.7502 10.3125V23.4375C18.7502 23.9557 19.1696 24.375 19.6877 24.375C20.2059 24.375 20.6252 23.9557 20.6252 23.4375V10.3125C20.6252 9.79431 20.2059 9.375 19.6877 9.375C19.1696 9.375 18.7502 9.79431 18.7502 10.3125Z"
                                  fill="#626162"></path>
                            <path d="M10.3125 9.375C9.79477 9.375 9.375 9.79431 9.375 10.3125V23.4375C9.375 23.9557 9.79477 24.375 10.3125 24.375C10.8302 24.375 11.25 23.9557 11.25 23.4375V10.3125C11.25 9.79431 10.8302 9.375 10.3125 9.375Z"
                                  fill="#626162"></path>
                        </svg>
                    </button>
                </div>
            </li>
            <li>
                <div class="cart-sidebar-left">
                    <a class="cart-sidebar-img" href="product-single.php"><img src="assets/images/drink-2.png"
                                                                               alt="Wine Bottle"></a>
                </div>
                <div class="cart-sidebar-right">
                    <a title="Mirassou Vineyards" href="product-single.php">Amarula Strawberry</a>
                    <div class="cart-product-price"><span>1&nbsp;×</span><span>BWP370</span></div>
                </div>
                <div class="product-remove">
                    <button type="button">
                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.0625 3.75H26.25H20.625V0.9375C20.625 0.419312 20.2057 0 19.6875 0H10.3125C9.79477 0 9.375 0.419312 9.375 0.9375V3.75H3.75H0.9375C0.419769 3.75 0 4.16931 0 4.6875C0 5.20569 0.419769 5.625 0.9375 5.625H2.88179L4.69025 29.1348C4.72778 29.6228 5.13519 30 5.625 30H24.375C24.8648 30 25.2722 29.6228 25.3098 29.1348L27.1182 5.625H29.0625C29.5807 5.625 30 5.20569 30 4.6875C30 4.16931 29.5807 3.75 29.0625 3.75V3.75ZM11.25 1.875H18.75V3.75H11.25V1.875ZM23.5071 28.125H6.49338L4.76257 5.625H10.3125H19.6875H25.2374L23.5071 28.125Z"
                                  fill="#626162"></path>
                            <path d="M15.0002 9.375C14.4825 9.375 14.0627 9.79431 14.0627 10.3125V23.4375C14.0627 23.9557 14.4825 24.375 15.0002 24.375C15.518 24.375 15.9377 23.9557 15.9377 23.4375V10.3125C15.9377 9.79431 15.518 9.375 15.0002 9.375Z"
                                  fill="#626162"></path>
                            <path d="M18.7502 10.3125V23.4375C18.7502 23.9557 19.1696 24.375 19.6877 24.375C20.2059 24.375 20.6252 23.9557 20.6252 23.4375V10.3125C20.6252 9.79431 20.2059 9.375 19.6877 9.375C19.1696 9.375 18.7502 9.79431 18.7502 10.3125Z"
                                  fill="#626162"></path>
                            <path d="M10.3125 9.375C9.79477 9.375 9.375 9.79431 9.375 10.3125V23.4375C9.375 23.9557 9.79477 24.375 10.3125 24.375C10.8302 24.375 11.25 23.9557 11.25 23.4375V10.3125C11.25 9.79431 10.8302 9.375 10.3125 9.375Z"
                                  fill="#626162"></path>
                        </svg>
                    </button>
                </div>
            </li>
        </ul>
    </div>

    <div class="cart-sidebar-bottom-content">
        <div class="cart-sidebar-subtotal">
            <span>subtotal</span>
            <b>BWP850</b>
        </div>

        <div class="cart-sidebar-button-wp">
            <a href="cart.html" class="sec-btn golden-btn" title="view cart">view cart</a>
            <a href="checkout.php" class="sec-btn" title="Checkout">Checkout</a>
        </div>
    </div>
</div>
<!-- End of Cart Sidebar-->

<!-- Start of Header-->
<?php include __DIR__."/main-header.php" ?>
<!-- End of Header-->

<!-- Start of Inner Banner Section-->
<section class="inner-banner">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-banner-text text-center">
                        <h1 class="h1-title">Shopping Cart</h1>
                        <div class="breadcrumb-wp">
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop.php" title="Shop">Shop</a></li>
                                <li class="breadcrumb-item active">Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner Section-->

<!-- Start of Cart Section-->
<section class="section cart-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="form-box">


                    <?php if (!empty($cart_items)) { ?>
                        <div class="cart-top-row">
                            <div class="shop-cart-info">
                                <h4 class="h4-title cart-sub-title">Shopping Cart</h4>
                                <p>You have <?php echo sizeof($cart_items) ?> items in your cart</p>
                            </div>
                        </div>

                        <?php foreach ($cart_items as $product_id => $product) { ?>

                            <div class="cart-items-box light-bg">
                                <ul>
                                    <li class="cart-items-img">
                                        <a href="product-single.php?id=<?php echo $product_id?>"><img src="<?php echo $product['url'] ?>"
                                                                          alt="Wine Bottle"></a>
                                    </li>
                                    <li class="cart-product-name">
                                        <a title="<?php echo $product['name'] ?>" href="product-single.php?id=<?php echo $product_id?>">
                                            <?php echo $product['name'] ?>
                                        </a>
                                    </li>
                                    <li class="cart-product-quantity">
                                        <div class="custom-quantity">
<!--                                            todo: make this look better-->

<!--                                            <span class="quantity-remove quantity-button"></span>-->
                                            <input type="number" step="1" min="0" value="<?php echo $product['quantity'] ?>">
<!--                                            <span class="quantity-add quantity-button"></span>-->
                                        </div>
                                    </li>
                                    <li class="cart-product-price">
                                        <span> <?php echo $product['price'] ?> </span>
                                    </li>
                                    <li class="product-remove">
                                        <button type="button">
                                            <svg width="22" height="22" viewBox="0 0 30 30" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.0625 3.75H26.25H20.625V0.9375C20.625 0.419312 20.2057 0 19.6875 0H10.3125C9.79477 0 9.375 0.419312 9.375 0.9375V3.75H3.75H0.9375C0.419769 3.75 0 4.16931 0 4.6875C0 5.20569 0.419769 5.625 0.9375 5.625H2.88179L4.69025 29.1348C4.72778 29.6228 5.13519 30 5.625 30H24.375C24.8648 30 25.2722 29.6228 25.3098 29.1348L27.1182 5.625H29.0625C29.5807 5.625 30 5.20569 30 4.6875C30 4.16931 29.5807 3.75 29.0625 3.75V3.75ZM11.25 1.875H18.75V3.75H11.25V1.875ZM23.5071 28.125H6.49338L4.76257 5.625H10.3125H19.6875H25.2374L23.5071 28.125Z"
                                                      fill="#626162"/>
                                                <path d="M15.0002 9.375C14.4825 9.375 14.0627 9.79431 14.0627 10.3125V23.4375C14.0627 23.9557 14.4825 24.375 15.0002 24.375C15.518 24.375 15.9377 23.9557 15.9377 23.4375V10.3125C15.9377 9.79431 15.518 9.375 15.0002 9.375Z"
                                                      fill="#626162"/>
                                                <path d="M18.7502 10.3125V23.4375C18.7502 23.9557 19.1696 24.375 19.6877 24.375C20.2059 24.375 20.6252 23.9557 20.6252 23.4375V10.3125C20.6252 9.79431 20.2059 9.375 19.6877 9.375C19.1696 9.375 18.7502 9.79431 18.7502 10.3125Z"
                                                      fill="#626162"/>
                                                <path d="M10.3125 9.375C9.79477 9.375 9.375 9.79431 9.375 10.3125V23.4375C9.375 23.9557 9.79477 24.375 10.3125 24.375C10.8302 24.375 11.25 23.9557 11.25 23.4375V10.3125C11.25 9.79431 10.8302 9.375 10.3125 9.375Z"
                                                      fill="#626162"/>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        
                        <?php } ?>

                    <?php } else { ?>
                        <div class="cart-top-row">
                            <div class="shop-cart-info">
                                <h4 class="h4-title cart-sub-title">Shopping Cart</h4>
                                <p>You have no items in your cart.</p>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="cart-bottom-row">
                        <a href="shop.php" title="Continue Shopping" class="explore-more-link continue-shopping-link">
                            <svg width="31" height="16" viewBox="0 0 31 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.32616 15.077C7.42245 15.0775 7.5179 15.0591 7.60703 15.0227C7.69617 14.9863 7.77724 14.9326 7.8456 14.8648C7.91418 14.7968 7.9686 14.7159 8.00575 14.6267C8.04289 14.5376 8.06201 14.442 8.06201 14.3454C8.06201 14.2488 8.04289 14.1532 8.00575 14.064C7.9686 13.9749 7.91418 13.894 7.8456 13.8259L1.77328 7.76094L7.8456 1.69593C7.98337 1.55817 8.06076 1.37132 8.06076 1.17649C8.06076 0.981665 7.98337 0.794817 7.8456 0.657053C7.70784 0.51929 7.52099 0.441895 7.32616 0.441895C7.13134 0.441895 6.94449 0.51929 6.80673 0.657053L0.222282 7.2415C0.15371 7.30951 0.0992813 7.39043 0.062139 7.47958C0.0249958 7.56873 0.00587368 7.66436 0.00587368 7.76094C0.00587368 7.85752 0.0249958 7.95314 0.062139 8.0423C0.0992813 8.13145 0.15371 8.21236 0.222282 8.28038L6.80673 14.8648C6.87509 14.9326 6.95616 14.9863 7.0453 15.0227C7.13443 15.0591 7.22988 15.0775 7.32616 15.077Z"
                                      fill="#212529"/>
                                <path d="M1.86721 8.49251H28.8803C29.1788 8.49251 29.4651 8.41543 29.6762 8.27823C29.8873 8.14102 30.0059 7.95494 30.0059 7.7609C30.0059 7.56687 29.8873 7.38078 29.6762 7.24358C29.4651 7.10638 29.1788 7.0293 28.8803 7.0293H1.86721C1.56869 7.0293 1.28241 7.10638 1.07133 7.24358C0.860245 7.38078 0.741661 7.56687 0.741661 7.7609C0.741661 7.95494 0.860245 8.14102 1.07133 8.27823C1.28241 8.41543 1.56869 8.49251 1.86721 8.49251Z"
                                      fill="#212529"/>
                            </svg>
                            <div class="underline-text"></div>
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>

            <!--                todo: hide cart totals when 0-->
            <div class="col-lg-5">
                <div class="form-box cart-totals">

                    <h4 class="h4-title cart-sub-title">Cart Totals</h4>
                    <table class="shop-table">
                        <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal">
                                <span class="cart-subtotal-amount"><span
                                            class="cart-amount-currencySymbol">BWP</span> <?php echo $items_total ?> </span>
                            </td>
                        </tr>
<!--                        <tr class="cart-shipping">-->
<!--                            <th>Shipping</th>-->
<!--                            <td data-title="Shipping">-->
<!--                                <span class="cart-shipping-amount"><span-->
<!--                                            class="cart-amount-currencySymbol">BWP</span> --><?php //echo $shipping_cost ?><!-- </span>-->
<!--                            </td>-->
<!--                        </tr>-->
                        <tr class="tax-rate">
                            <th>Tax</th>
                            <td data-title="tax-rate">
                                <span class="cart-shipping-amount"><span
                                            class="cart-amount-currencySymbol">BWP</span> <?php echo $tax ?> </span>
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="total">
                                <span class="cart-amount"><span
                                            class="cart-amount-currencySymbol">BWP</span> <?php echo $cart_total ?> </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <a href="checkout.php" title="Proceed To Checkout" class="explore-more-link">
                        proceed to checkout
                        <svg width="30" height="15" viewBox="0 0 30 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.6797 14.6351C22.5834 14.6356 22.488 14.6172 22.3988 14.5808C22.3097 14.5444 22.2286 14.4907 22.1603 14.4229C22.0917 14.3549 22.0373 14.274 22.0001 14.1848C21.963 14.0957 21.9438 14.0001 21.9438 13.9035C21.9438 13.8069 21.963 13.7113 22.0001 13.6221C22.0373 13.533 22.0917 13.4521 22.1603 13.384L28.2326 7.31904L22.1603 1.25404C22.0225 1.11627 21.9451 0.929426 21.9451 0.734598C21.9451 0.539771 22.0225 0.352923 22.1603 0.215159C22.298 0.077395 22.4849 0 22.6797 0C22.8745 0 23.0614 0.077395 23.1991 0.215159L29.7836 6.7996C29.8521 6.86762 29.9066 6.94853 29.9437 7.03768C29.9809 7.12684 30 7.22246 30 7.31904C30 7.41562 29.9809 7.51125 29.9437 7.6004C29.9066 7.68955 29.8521 7.77047 29.7836 7.83848L23.1991 14.4229C23.1308 14.4907 23.0497 14.5444 22.9606 14.5808C22.8714 14.6172 22.776 14.6356 22.6797 14.6351Z"
                                  fill="var(--primary-color)"></path>
                            <path d="M28.1387 8.05061H1.12555C0.827033 8.05061 0.540746 7.97353 0.329665 7.83633C0.118584 7.69913 0 7.51304 0 7.31901C0 7.12497 0.118584 6.93889 0.329665 6.80168C0.540746 6.66448 0.827033 6.5874 1.12555 6.5874H28.1387C28.4372 6.5874 28.7235 6.66448 28.9345 6.80168C29.1456 6.93889 29.2642 7.12497 29.2642 7.31901C29.2642 7.51304 29.1456 7.69913 28.9345 7.83633C28.7235 7.97353 28.4372 8.05061 28.1387 8.05061Z"
                                  fill="var(--primary-color)"></path>
                        </svg>
                        <div class="underline-text"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Cart Section-->

<!-- Start of Site Footer Section -->
<footer class="site-footer dark-bg">
    <div class="footer-wine-stains">
        <img src="assets/images/black-wine-stains.png" alt="Wine Stains">
    </div>
    <div class="sec-wp">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 m-auto">
                        <div class="footer-about text-center white-text">
                            <div class="footer-logo">
                                <a href="index.php" title="Logo">
                                    <img width="280" src="assets/images/footer-logo.png" alt="logo">
                                </a>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com" target="_blank" title="Follow On Facebook"><i
                                                    class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com" target="_blank" title="Follow On Linkedin"><i
                                                    class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank" title="Follow On Instagram"><i
                                                    class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.youtube.com" target="_blank" title="Follow On Youtube"><i
                                                    class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-menu white-list-link white-text">
                            <div class="underline-text underline-top"></div>
                            <div class="underline-text underline-bottom"></div>
                            <ul>
                                <li>
                                    <a title="Home" href="index.php">Home</a>
                                </li>
                                <li>
                                    <a title="About" href="about.php">About</a>
                                </li>
                                <li>
                                    <a title="Menu" href="shop.php">Shop</a>
                                </li>
                                <li>
                                    <a title="Contact" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bottom-footer-left white-text">
                            <p>Copyright © AMK 2024. All Rights Reserved.</p>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="bottom-footer-right  white-list-link">
                            <ul>
                                <li><a title="Terms" href="terms.php">terms</a></li>
                                <li><a title="Privacy Policy" href="privacy-policy.php">privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" id="scrollToTop" class="scrolltotop" title="Scroll To Top">
        <svg width="30" height="51" viewBox="0 0 30 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.9991 -0.000113478C14.8001 -0.000465041 14.609 0.0782843 14.4681 0.218909L0.96811 13.7189C0.680321 14.0168 0.688618 14.4917 0.986532 14.7794C1.2772 15.0601 1.73796 15.0601 2.02856 14.7794L14.999 1.81044L27.968 14.7794C28.266 15.0672 28.7408 15.0589 29.0286 14.761C29.3093 14.4704 29.3093 14.0096 29.0286 13.7189L15.5286 0.218909C15.3881 0.0787062 15.1977 -4.31652e-05 14.9991 -0.000113478Z"
                  fill="#ffffff"/>
            <path d="M14.9993 1C14.5851 1 14.2493 1.46641 14.2493 2.0417L14.2493 49.9583C14.2493 50.5336 14.5851 51 14.9993 51C15.4135 51 15.7493 50.5336 15.7493 49.9583L15.7493 2.0416C15.7493 1.4664 15.4135 1 14.9993 1Z"
                  fill="#ffffff"/>
        </svg>
    </a>
</footer>
<!-- End of Site Footer Section -->

<!-- Jquery JS Link -->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS Link -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!-- Font Awesome JS Link -->
<script src="assets/js/font-awesome.min.js"></script>

<!-- Swiper Slider JS Link -->
<script src="assets/js/swiper-bundle.min.js"></script>

<!-- Fancybox JS Link -->
<script src="assets/js/jquery.fancybox.min.js"></script>

<!-- Custom Scroll Count JS Link -->
<script src="assets/js/custom-scroll-count.js"></script>

<!-- Custom JS Link -->
<script src="assets/js/custom.js"></script>
</body>

</html>