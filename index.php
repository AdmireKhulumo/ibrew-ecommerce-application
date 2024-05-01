<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Ibrew Inc.</title>

    <!-- FavIcon Link -->
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Swiper Slider CSS Link -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!-- Fancybox CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">

    <!-- Main Style CSS Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
            <button type="submit"><img width="24" height="24" src="assets/images/search-icon.svg" alt="Search Icon"></button>
        </form>
        <button class="close-button add-cart-btn" id="search-button">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M9.75 0V8.25H18V9.75H9.75V18H8.25V9.75H0V8.25H8.25V0H9.75Z" fill="#003049"></path>
                </svg>

                <span class="add-to-cart-shape">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                        <path d="M19.7633 4.96417C13.2213 5.21995 6.9549 10.3341 3.95998 17.4467C1.15216 22.7464 1.5814 25.6213 1.18499 31.287C0.863554 35.8811 2.70786 41.8047 7.18675 45.4259C13.3064 50.3736 25.1124 52.0743 33.124 49.7392C46.0595 45.969 51.2063 33.7643 51.1489 23.7338C51.1125 17.3612 49.4282 9.59193 43.0219 5.23087C37.0188 1.14431 28.4826 0.772365 22.8879 0.772461C16.8411 0.772565 10.327 3.44674 7.18675 7.01944" stroke="black" stroke-width="0.5" stroke-linecap="round" style="stroke-dasharray: 175.589;"></path>
                    </svg>

                </span>
        </button>
    </div>
    <!-- End of Search Form -->

    <!-- Start of Cart Sidebar-->
    <div class="cart-sidebar">
        <div class="cart-sidebar-overlay"></div>
        <button class="close-button add-cart-btn">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9.75 0V8.25H18V9.75H9.75V18H8.25V9.75H0V8.25H8.25V0H9.75Z" fill="#003049"></path>
            </svg>

            <span class="add-to-cart-shape">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                    <path d="M19.7633 4.96417C13.2213 5.21995 6.9549 10.3341 3.95998 17.4467C1.15216 22.7464 1.5814 25.6213 1.18499 31.287C0.863554 35.8811 2.70786 41.8047 7.18675 45.4259C13.3064 50.3736 25.1124 52.0743 33.124 49.7392C46.0595 45.969 51.2063 33.7643 51.1489 23.7338C51.1125 17.3612 49.4282 9.59193 43.0219 5.23087C37.0188 1.14431 28.4826 0.772365 22.8879 0.772461C16.8411 0.772565 10.327 3.44674 7.18675 7.01944" stroke="black" stroke-width="0.5" stroke-linecap="round" style="stroke-dasharray: 175.589;"></path>
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
                        <a class="cart-sidebar-img" href="product-single.php"><img src="assets/images/drink-1.png" alt="Wine Bottle"></a>
                    </div>
                    <div class="cart-sidebar-right">
                        <a title="Amarula Morula Deligh" href="product-single.php">Amarula Morula Delight</a>
                        <div class="cart-product-price"><span>1&nbsp;×</span><span>BWP480</span></div>
                    </div>
                    <div class="product-remove">
                        <button type="button">
                            <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.0625 3.75H26.25H20.625V0.9375C20.625 0.419312 20.2057 0 19.6875 0H10.3125C9.79477 0 9.375 0.419312 9.375 0.9375V3.75H3.75H0.9375C0.419769 3.75 0 4.16931 0 4.6875C0 5.20569 0.419769 5.625 0.9375 5.625H2.88179L4.69025 29.1348C4.72778 29.6228 5.13519 30 5.625 30H24.375C24.8648 30 25.2722 29.6228 25.3098 29.1348L27.1182 5.625H29.0625C29.5807 5.625 30 5.20569 30 4.6875C30 4.16931 29.5807 3.75 29.0625 3.75V3.75ZM11.25 1.875H18.75V3.75H11.25V1.875ZM23.5071 28.125H6.49338L4.76257 5.625H10.3125H19.6875H25.2374L23.5071 28.125Z" fill="#626162"></path>
                                <path d="M15.0002 9.375C14.4825 9.375 14.0627 9.79431 14.0627 10.3125V23.4375C14.0627 23.9557 14.4825 24.375 15.0002 24.375C15.518 24.375 15.9377 23.9557 15.9377 23.4375V10.3125C15.9377 9.79431 15.518 9.375 15.0002 9.375Z" fill="#626162"></path>
                                <path d="M18.7502 10.3125V23.4375C18.7502 23.9557 19.1696 24.375 19.6877 24.375C20.2059 24.375 20.6252 23.9557 20.6252 23.4375V10.3125C20.6252 9.79431 20.2059 9.375 19.6877 9.375C19.1696 9.375 18.7502 9.79431 18.7502 10.3125Z" fill="#626162"></path>
                                <path d="M10.3125 9.375C9.79477 9.375 9.375 9.79431 9.375 10.3125V23.4375C9.375 23.9557 9.79477 24.375 10.3125 24.375C10.8302 24.375 11.25 23.9557 11.25 23.4375V10.3125C11.25 9.79431 10.8302 9.375 10.3125 9.375Z" fill="#626162"></path>
                            </svg>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="cart-sidebar-left">
                        <a class="cart-sidebar-img" href="product-single.php"><img src="assets/images/drink-2.png" alt="Wine Bottle"></a>
                    </div>
                    <div class="cart-sidebar-right">
                        <a title="Mirassou Vineyards" href="product-single.php">Mirassou Vineyards</a>
                        <div class="cart-product-price"><span>1&nbsp;×</span><span>BWP370</span></div>
                    </div>
                    <div class="product-remove">
                        <button type="button">
                            <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.0625 3.75H26.25H20.625V0.9375C20.625 0.419312 20.2057 0 19.6875 0H10.3125C9.79477 0 9.375 0.419312 9.375 0.9375V3.75H3.75H0.9375C0.419769 3.75 0 4.16931 0 4.6875C0 5.20569 0.419769 5.625 0.9375 5.625H2.88179L4.69025 29.1348C4.72778 29.6228 5.13519 30 5.625 30H24.375C24.8648 30 25.2722 29.6228 25.3098 29.1348L27.1182 5.625H29.0625C29.5807 5.625 30 5.20569 30 4.6875C30 4.16931 29.5807 3.75 29.0625 3.75V3.75ZM11.25 1.875H18.75V3.75H11.25V1.875ZM23.5071 28.125H6.49338L4.76257 5.625H10.3125H19.6875H25.2374L23.5071 28.125Z" fill="#626162"></path>
                                <path d="M15.0002 9.375C14.4825 9.375 14.0627 9.79431 14.0627 10.3125V23.4375C14.0627 23.9557 14.4825 24.375 15.0002 24.375C15.518 24.375 15.9377 23.9557 15.9377 23.4375V10.3125C15.9377 9.79431 15.518 9.375 15.0002 9.375Z" fill="#626162"></path>
                                <path d="M18.7502 10.3125V23.4375C18.7502 23.9557 19.1696 24.375 19.6877 24.375C20.2059 24.375 20.6252 23.9557 20.6252 23.4375V10.3125C20.6252 9.79431 20.2059 9.375 19.6877 9.375C19.1696 9.375 18.7502 9.79431 18.7502 10.3125Z" fill="#626162"></path>
                                <path d="M10.3125 9.375C9.79477 9.375 9.375 9.79431 9.375 10.3125V23.4375C9.375 23.9557 9.79477 24.375 10.3125 24.375C10.8302 24.375 11.25 23.9557 11.25 23.4375V10.3125C11.25 9.79431 10.8302 9.375 10.3125 9.375Z" fill="#626162"></path>
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
                <a href="checkout.html" class="sec-btn" title="Checkout">Checkout</a>
            </div>
        </div>
    </div>
    <!-- End of Cart Sidebar-->

    <!-- Start of Header-->
    <header class="site-header">
        <div class="header-main header-top fluid-section">
            <div class="header-top-left">
                <div class="header-list">
                    <ul>
                        <li><a href="https://facebook.com" target="_blank" title="Follow On Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank" title="Follow On Linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank" title="Follow On Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com" target="_blank" title="Follow On Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="header-top-right">
                <div class="header-list">
                    <ul>
                        <li>
                            <a href="login-register.html" title="Register">Register</a>
                        </li>
                        <li>
                            <a href="login-register.html" title="Log In">Log In</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" title="My Cart" class="cart-sidebar-button">
                                <img width="27" height="24" src="assets/images/cart-icon.svg" alt="Cart Icon">
                                <span class="shopping-value">2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ani-line"></div>
        <div class="header-main header-bottom fluid-section">
            <div class="header-logo">
                <a href="index.html" title="Home">
                    <img src="assets/images/logo.png" alt="logo" class="header-logo-img">
                </a>
            </div>

            <div class="main-navigation">
                <button class="menu-toggle"><span></span><span></span></button>
                <div class="header-menu">
                    <nav>
                        <ul class="menu">
                            <li>
                                <a class="round-shape-button header-active-menu" title="Home" href="index.html">Home
                                <span class="button-shape">
                                    <svg width="62" height="36" viewBox="0 0 62 36" fill="none">
                                        <path
                                            d="M51.0232 4.78137C43.8399 4.78137 36.6567 4.78137 29.4735 4.78137C23.1773 4.78137 16.2376 4.08517 10.3663 6.8296C7.6938 8.0788 4.38645 10.1306 2.84649 12.782C1.48574 15.1248 0.988718 18.628 1.00019 21.3018C1.00994 23.5719 1.97437 25.3351 3.35614 27.0811C5.46795 29.7497 7.95463 32.4336 11.2606 33.5431C15.1621 34.8525 19.7135 34.9982 23.7711 35.0913C29.954 35.2332 36.1171 34.7828 42.2533 34.0528C46.1165 33.5932 50.5598 33.2245 54.2349 31.7065C57.4622 30.3735 62.0997 26.3314 61.6586 22.3981C61.0983 17.4025 57.2737 13.0321 53.8695 9.62789C50.8422 6.6005 47.4077 4.06244 43.2245 2.887C38.343 1.51534 33.0525 1.14648 28.0022 1.14648"
                                            stroke="black" stroke-width="0.5" stroke-linecap="round"
                                            style="stroke-dasharray: 175.589;"></path>
                                    </svg>
                                </span>
                            </a>
                            </li>
                            <li>
                                <a class="round-shape-button" title="About" href="about.html">About
                                <span class="button-shape">
                                    <svg width="62" height="36" viewBox="0 0 62 36" fill="none">
                                        <path
                                            d="M51.0232 4.78137C43.8399 4.78137 36.6567 4.78137 29.4735 4.78137C23.1773 4.78137 16.2376 4.08517 10.3663 6.8296C7.6938 8.0788 4.38645 10.1306 2.84649 12.782C1.48574 15.1248 0.988718 18.628 1.00019 21.3018C1.00994 23.5719 1.97437 25.3351 3.35614 27.0811C5.46795 29.7497 7.95463 32.4336 11.2606 33.5431C15.1621 34.8525 19.7135 34.9982 23.7711 35.0913C29.954 35.2332 36.1171 34.7828 42.2533 34.0528C46.1165 33.5932 50.5598 33.2245 54.2349 31.7065C57.4622 30.3735 62.0997 26.3314 61.6586 22.3981C61.0983 17.4025 57.2737 13.0321 53.8695 9.62789C50.8422 6.6005 47.4077 4.06244 43.2245 2.887C38.343 1.51534 33.0525 1.14648 28.0022 1.14648"
                                            stroke="black" stroke-width="0.5" stroke-linecap="round"
                                            style="stroke-dasharray: 175.589;"></path>
                                    </svg>
                                </span>
                            </a>
                            </li>
                            <li class="dropdown-items">
                                <a class="round-shape-button" title="Shop" href="javascript:void(0);">Shop
                                <span class="button-shape">
                                    <svg width="62" height="36" viewBox="0 0 62 36" fill="none">
                                        <path d="M51.0232 4.78137C43.8399 4.78137 36.6567 4.78137 29.4735 4.78137C23.1773 4.78137 16.2376 4.08517 10.3663 6.8296C7.6938 8.0788 4.38645 10.1306 2.84649 12.782C1.48574 15.1248 0.988718 18.628 1.00019 21.3018C1.00994 23.5719 1.97437 25.3351 3.35614 27.0811C5.46795 29.7497 7.95463 32.4336 11.2606 33.5431C15.1621 34.8525 19.7135 34.9982 23.7711 35.0913C29.954 35.2332 36.1171 34.7828 42.2533 34.0528C46.1165 33.5932 50.5598 33.2245 54.2349 31.7065C57.4622 30.3735 62.0997 26.3314 61.6586 22.3981C61.0983 17.4025 57.2737 13.0321 53.8695 9.62789C50.8422 6.6005 47.4077 4.06244 43.2245 2.887C38.343 1.51534 33.0525 1.14648 28.0022 1.14648"
                                        stroke="black" stroke-width="0.5" stroke-linecap="round"
                                        style="stroke-dasharray: 175.589;"></path>
                                    </svg>
                                </span>
                            </a>
                                <span class="for-mob dropdown-icon"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                <ul class="sub-menu">
                                    <li><a title="Shop" href="shop.php">Shop</a></li>
                                    <li><a title="Cart" href="cart.html">Cart</a></li>
                                    <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="round-shape-button" title="Contact" href="contact.html">Contact
                                <span class="button-shape">
                                    <svg width="62" height="36" viewBox="0 0 62 36" fill="none">
                                        <path
                                            d="M51.0232 4.78137C43.8399 4.78137 36.6567 4.78137 29.4735 4.78137C23.1773 4.78137 16.2376 4.08517 10.3663 6.8296C7.6938 8.0788 4.38645 10.1306 2.84649 12.782C1.48574 15.1248 0.988718 18.628 1.00019 21.3018C1.00994 23.5719 1.97437 25.3351 3.35614 27.0811C5.46795 29.7497 7.95463 32.4336 11.2606 33.5431C15.1621 34.8525 19.7135 34.9982 23.7711 35.0913C29.954 35.2332 36.1171 34.7828 42.2533 34.0528C46.1165 33.5932 50.5598 33.2245 54.2349 31.7065C57.4622 30.3735 62.0997 26.3314 61.6586 22.3981C61.0983 17.4025 57.2737 13.0321 53.8695 9.62789C50.8422 6.6005 47.4077 4.06244 43.2245 2.887C38.343 1.51534 33.0525 1.14648 28.0022 1.14648"
                                            stroke="black" stroke-width="0.5" stroke-linecap="round"
                                            style="stroke-dasharray: 175.589;"></path>
                                    </svg>
                                </span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                    <form class="search-form for-mob">
                        <input type="search" placeholder="Search Your Morula Beverage Here..." class="form-input">
                        <button type="submit"><img width="24" height="24" src="assets/images/search-icon.svg" alt="Search Icon"></button>
                    </form>
                </div>
            </div>

            <div class="header-search">
                <a href="javascript:void(0);" class="search-button">
                    <img width="24" height="24" src="assets/images/search-icon.svg" alt="Search Icon">
                </a>
            </div>
        </div>

        <div class="ani-line header-bottom-line"></div>
    </header>
    <!-- End of Header-->

    <!-- Start Of Main Banner Section-->
    <section class="main-banner" style="background-image: url('assets/images/banner-bg.jpg');">
        <div class="banner-shape">
            <img width="800" height="500" src="assets/images/grapes-shape.png" alt="Grapes Shape">
        </div>
        <div class="sec-wp">
            <div class="container">
                <div class="swiper banner_slider">
                    <div class="swiper-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-text">
                                        <h1 class="h1-title"><?php echo $single_product['name'] ?></h1>
                                        <div class="banner-btn">
                                            <a href="product-single.php?id=<?php echo $single_product['id'] ?>" title="Explore more" class="sec-btn">Explore more
                                                <svg width="30" height="15" viewBox="0 0 30 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22.6797 14.6351C22.5834 14.6356 22.488 14.6172 22.3988 14.5808C22.3097 14.5444 22.2286 14.4907 22.1603 14.4229C22.0917 14.3549 22.0373 14.274 22.0001 14.1848C21.963 14.0957 21.9438 14.0001 21.9438 13.9035C21.9438 13.8069 21.963 13.7113 22.0001 13.6221C22.0373 13.533 22.0917 13.4521 22.1603 13.384L28.2326 7.31904L22.1603 1.25404C22.0225 1.11627 21.9451 0.929426 21.9451 0.734598C21.9451 0.539771 22.0225 0.352923 22.1603 0.215159C22.298 0.077395 22.4849 0 22.6797 0C22.8745 0 23.0614 0.077395 23.1991 0.215159L29.7836 6.7996C29.8521 6.86762 29.9066 6.94853 29.9437 7.03768C29.9809 7.12684 30 7.22246 30 7.31904C30 7.41562 29.9809 7.51125 29.9437 7.6004C29.9066 7.68955 29.8521 7.77047 29.7836 7.83848L23.1991 14.4229C23.1308 14.4907 23.0497 14.5444 22.9606 14.5808C22.8714 14.6172 22.776 14.6356 22.6797 14.6351Z"
                                                        fill="white" />
                                                    <path
                                                        d="M28.1387 8.05061H1.12555C0.827033 8.05061 0.540746 7.97353 0.329665 7.83633C0.118584 7.69913 0 7.51304 0 7.31901C0 7.12497 0.118584 6.93889 0.329665 6.80168C0.540746 6.66448 0.827033 6.5874 1.12555 6.5874H28.1387C28.4372 6.5874 28.7235 6.66448 28.9345 6.80168C29.1456 6.93889 29.2642 7.12497 29.2642 7.31901C29.2642 7.51304 29.1456 7.69913 28.9345 7.83633C28.7235 7.97353 28.4372 8.05061 28.1387 8.05061Z"
                                                        fill="white" />
                                                </svg>
                                            </a>

                                            <h3 class="banner-bottle-price">
                                                BWP <?php echo $single_product['price'] ?>
                                                <span class="underline-text"></span>
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-right-part">
                                        <div class="wine-bottle">
                                            <img src="assets/images/drink-1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Main Banner Section-->

    <!-- Start of About Us Section-->
    <section class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <h3 class="sec-title-number">01</h3>
                        <h2 class="h2-title">About us</h2>
                        <div class="sec-title-shape">
                            <img src="assets/images/title-shape.svg" alt="Title Shape">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <p>Introducing Ibrew Inc: Your Palapye Paradise for Morula Delights!</p>
                        <p>Nestled in the heart of Palapye, Botswana, Ibrew stands as a beacon of craftsmanship, specializing in the creation and distribution of exquisite
                            Morula fruit products, both alcoholic and non-alcoholic. With an unwavering commitment to quality and tradition, each bottle bears the essence of Botswana's rich cultural heritage, meticulously crafted to tantalize the senses and captivate the soul.</p>
                        <a href="about.html" title="Explore" class="explore-more-link">
                            Explore
                            <svg width="30" height="15" viewBox="0 0 30 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.6797 14.6351C22.5834 14.6356 22.488 14.6172 22.3988 14.5808C22.3097 14.5444 22.2286 14.4907 22.1603 14.4229C22.0917 14.3549 22.0373 14.274 22.0001 14.1848C21.963 14.0957 21.9438 14.0001 21.9438 13.9035C21.9438 13.8069 21.963 13.7113 22.0001 13.6221C22.0373 13.533 22.0917 13.4521 22.1603 13.384L28.2326 7.31904L22.1603 1.25404C22.0225 1.11627 21.9451 0.929426 21.9451 0.734598C21.9451 0.539771 22.0225 0.352923 22.1603 0.215159C22.298 0.077395 22.4849 0 22.6797 0C22.8745 0 23.0614 0.077395 23.1991 0.215159L29.7836 6.7996C29.8521 6.86762 29.9066 6.94853 29.9437 7.03768C29.9809 7.12684 30 7.22246 30 7.31904C30 7.41562 29.9809 7.51125 29.9437 7.6004C29.9066 7.68955 29.8521 7.77047 29.7836 7.83848L23.1991 14.4229C23.1308 14.4907 23.0497 14.5444 22.9606 14.5808C22.8714 14.6172 22.776 14.6356 22.6797 14.6351Z"
                                    fill="var(--primary-color)"></path>
                                <path
                                    d="M28.1387 8.05061H1.12555C0.827033 8.05061 0.540746 7.97353 0.329665 7.83633C0.118584 7.69913 0 7.51304 0 7.31901C0 7.12497 0.118584 6.93889 0.329665 6.80168C0.540746 6.66448 0.827033 6.5874 1.12555 6.5874H28.1387C28.4372 6.5874 28.7235 6.66448 28.9345 6.80168C29.1456 6.93889 29.2642 7.12497 29.2642 7.31901C29.2642 7.51304 29.1456 7.69913 28.9345 7.83633C28.7235 7.97353 28.4372 8.05061 28.1387 8.05061Z"
                                    fill="var(--primary-color)"></path>
                            </svg>
                            <span class="underline-text"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us Section-->

    <!-- Start of Product Section-->
    <?php include __DIR__."/products.php"; ?>
    <!-- End of Product Section-->

    <!-- Start of Two Col Section-->
    <section class="two-col-sec position-relative">
        <div class="mountant-img sec-left-img">
            <img src="assets/images/mountant.png" alt="mountant">
        </div>
    </section>
    <!-- End of Two Col Section-->

    <!-- Start of Process Section-->
    <section class="section process-section fluid-section">
        <div class="process-section-bg dark-bg section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title white-text text-center mb-5">
                            <h3 class="sec-title-number">03</h3>
                            <h2 class="h2-title">Our Process</h2>
                            <div class="sec-title-shape">
                                <img src="assets/images/white-title-shape.svg" alt="Title Shape">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 g-lg-5">
                    <div class="col-lg-4 col-sm-6">
                        <div class="process-box white-text">
                            <div class="process-img" style="background-image: url('assets/images/process-1.jpg');">
                            </div>
                            <div class="process-icon">
                                01
                                <span class="process-icon-shape">
                                        <svg width="61" height="54" viewBox="0 0 39 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8564 7.51592C7.28578 6.49691 -1.19312 9.26452 1.13866 16.4326C2.81648 21.5903 7.61374 25.9151 12.3233 28.2957C18.1638 31.2479 27.0563 32.7819 32.822 28.7609C36.0672 26.4978 38.0329 22.4398 38.0945 18.5261C38.204 11.5684 33.7392 5.50024 27.4914 2.76681C21.7933 0.27389 15.4468 0.877506 9.54168 2.10775"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                style="stroke-dasharray: 175.589;" />
                                        </svg>
                                    </span>
                            </div>
                            <div class="process-text">
                                <h3 class="h3-title">The Harvest</h3>
                                <p>The process begins with the careful selection and harvesting of ripe Morula fruits from the lush trees native to Botswana's landscapes. Our skilled harvesters handpick the fruits at the peak of ripeness, ensuring optimal flavor and quality.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="process-box white-text">
                            <div class="process-img" style="background-image: url('assets/images/process-2.jpg');">
                            </div>
                            <div class="process-icon">
                                02
                                <span class="process-icon-shape">
                                        <svg width="61" height="54" viewBox="0 0 39 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8564 7.51592C7.28578 6.49691 -1.19312 9.26452 1.13866 16.4326C2.81648 21.5903 7.61374 25.9151 12.3233 28.2957C18.1638 31.2479 27.0563 32.7819 32.822 28.7609C36.0672 26.4978 38.0329 22.4398 38.0945 18.5261C38.204 11.5684 33.7392 5.50024 27.4914 2.76681C21.7933 0.27389 15.4468 0.877506 9.54168 2.10775"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                style="stroke-dasharray: 175.589;" />
                                        </svg>
                                    </span>
                            </div>
                            <div class="process-text">
                                <h3 class="h3-title">Cleaning and Sorting</h3>
                                <p>Upon arrival at our production facility, the Morula fruits undergo a thorough cleaning and sorting process. This step removes any debris or impurities, guaranteeing that only the finest fruits are used in our beverages.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="process-box white-text">
                            <div class="process-img" style="background-image: url('assets/images/process-3.jpg');">
                            </div>
                            <div class="process-icon">
                                03
                                <span class="process-icon-shape">
                                        <svg width="61" height="54" viewBox="0 0 39 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8564 7.51592C7.28578 6.49691 -1.19312 9.26452 1.13866 16.4326C2.81648 21.5903 7.61374 25.9151 12.3233 28.2957C18.1638 31.2479 27.0563 32.7819 32.822 28.7609C36.0672 26.4978 38.0329 22.4398 38.0945 18.5261C38.204 11.5684 33.7392 5.50024 27.4914 2.76681C21.7933 0.27389 15.4468 0.877506 9.54168 2.10775"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                style="stroke-dasharray: 175.589;" />
                                        </svg>
                                    </span>
                            </div>
                            <div class="process-text">
                                <h3 class="h3-title">Extraction of Morula Pulp</h3>
                                <p>Next, the cleaned Morula fruits are gently processed to extract the precious pulp. This pulp is the essence of our beverages, bursting with the unique flavor and nutrients characteristic of the Morula fruit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="process-box white-text">
                            <div class="process-img" style="background-image: url('assets/images/process-4.jpg');">
                            </div>
                            <div class="process-icon">
                                04
                                <span class="process-icon-shape">
                                        <svg width="61" height="54" viewBox="0 0 39 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8564 7.51592C7.28578 6.49691 -1.19312 9.26452 1.13866 16.4326C2.81648 21.5903 7.61374 25.9151 12.3233 28.2957C18.1638 31.2479 27.0563 32.7819 32.822 28.7609C36.0672 26.4978 38.0329 22.4398 38.0945 18.5261C38.204 11.5684 33.7392 5.50024 27.4914 2.76681C21.7933 0.27389 15.4468 0.877506 9.54168 2.10775"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                style="stroke-dasharray: 175.589;" />
                                        </svg>
                                    </span>
                            </div>
                            <div class="process-text">
                                <h3 class="h3-title">Fermentation (for Alcoholic Beverages)</h3>
                                <p>For our alcoholic Morula beverages, the extracted pulp undergoes a carefully monitored fermentation process. This step is crucial for developing the distinct taste profiles and alcohol content that our customers love.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="process-box white-text">
                            <div class="process-img" style="background-image: url('assets/images/process-5.jpg');">
                            </div>
                            <div class="process-icon">
                                05
                                <span class="process-icon-shape">
                                        <svg width="61" height="54" viewBox="0 0 39 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8564 7.51592C7.28578 6.49691 -1.19312 9.26452 1.13866 16.4326C2.81648 21.5903 7.61374 25.9151 12.3233 28.2957C18.1638 31.2479 27.0563 32.7819 32.822 28.7609C36.0672 26.4978 38.0329 22.4398 38.0945 18.5261C38.204 11.5684 33.7392 5.50024 27.4914 2.76681C21.7933 0.27389 15.4468 0.877506 9.54168 2.10775"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                style="stroke-dasharray: 175.589;" />
                                        </svg>
                                    </span>
                            </div>
                            <div class="process-text">
                                <h3 class="h3-title">Blending and Flavor Enhancement</h3>
                                <p>In this step, our experienced artisans blend the Morula pulp with other carefully selected ingredients to enhance flavor and complexity. Whether creating alcoholic or non-alcoholic beverages, our goal is to create a harmonious balance of taste and aroma.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="process-box white-text">
                            <div class="process-img" style="background-image: url('assets/images/process-6.jpg');">
                            </div>
                            <div class="process-icon">
                                06
                                <span class="process-icon-shape">
                                        <svg width="61" height="54" viewBox="0 0 39 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8564 7.51592C7.28578 6.49691 -1.19312 9.26452 1.13866 16.4326C2.81648 21.5903 7.61374 25.9151 12.3233 28.2957C18.1638 31.2479 27.0563 32.7819 32.822 28.7609C36.0672 26.4978 38.0329 22.4398 38.0945 18.5261C38.204 11.5684 33.7392 5.50024 27.4914 2.76681C21.7933 0.27389 15.4468 0.877506 9.54168 2.10775"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                style="stroke-dasharray: 175.589;" />
                                        </svg>
                                    </span>
                            </div>
                            <div class="process-text">
                                <h3 class="h3-title">Bottling and Packaging</h3>
                                <p>Finally, the finished Morula beverages are meticulously bottled and packaged with precision and care. Each bottle is a testament to our dedication to quality, ensuring that every sip delivers the pure essence of Botswana's Morula fruit to our valued customers worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Process Section-->

    <!-- Start of count Section-->
    <section class="section count-section fluid-section section-pb-lg-0">
        <div class="underline-text underline-top"></div>
        <div class="underline-text underline-bottom"></div>
        <div class="row" id="counter">
            <div class="col-lg-3 col-sm-6">
                <div class="count-box text-center">
                    <div class="count-icon">
                        <img src="assets/images/happy-customers-icon.png" alt="Happy Customers Icon">
                    </div>
                    <div class="count-text">
                        <p class="counting" data-count="3215">0</p>
                        <h3 class="h3-title">Happy Customers</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="count-box text-center">
                    <div class="count-icon">
                        <img src="assets/images/awards-won-icon.png" alt="Awards won Icon">
                    </div>
                    <div class="count-text">
                        <p class="counting" data-count="58">0</p>
                        <h3 class="h3-title">Awards won</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="count-box text-center">
                    <div class="count-icon">
                        <img src="assets/images/varietals-icon.png" alt="Varietals Icon">
                    </div>
                    <div class="count-text">
                        <p class="counting" data-count="20">0</p>
                        <h3 class="h3-title">Varietals</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="count-box text-center">
                    <div class="count-icon">
                        <img src="assets/images/branches-icon.png" alt="Branches Icon">
                    </div>
                    <div class="count-text">
                        <p class="counting" data-count="16">0</p>
                        <h3 class="h3-title">Branches</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Count Section-->

    <!-- Start of Gallery Section-->
    <section class="section gallery fluid-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    <h3 class="sec-title-number">04</h3>
                    <h2 class="h2-title">Our Home</h2>
                    <div class="sec-title-shape">
                        <img src="assets/images/title-shape.svg" alt="Title Shape">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
                <a data-fancybox="gallery" href="assets/images/gallery-img-1.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-1.jpg');"></a>
                <a data-fancybox="gallery" href="assets/images/gallery-img-2.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-2.jpg');"></a>
                <a data-fancybox="gallery" href="assets/images/gallery-img-3.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-3.jpg');"></a>
                <a data-fancybox="gallery" href="assets/images/gallery-img-4.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-4.jpg');"></a>
                <a data-fancybox="gallery" href="assets/images/gallery-img-5.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-5.jpg');"></a>
                <a data-fancybox="gallery" href="assets/images/gallery-img-6.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-6.jpg');"></a>
                <a data-fancybox="gallery" href="assets/images/gallery-img-7.jpg" class="gallery-slider-img swiper-slide" style="background-image: url('assets/images/gallery-img-7.jpg');"></a>
            </div>
        </div>
    </section>
    <!-- End of Gallery Section-->

    <!-- Start of Shop Now Section-->
    <section class="section shop-now-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop-sec-bottle">
                        <img src="assets/images/drink-1.png" alt="Wine Bottle">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-now-text">
                        <h2 class="xl-title">Enjoy the perfect Morula drink!</h2>
                        <div class="shop-now-btn">
                            <a href="shop.php" title="Shop Now" class="sec-btn">
                                Shop Now
                                <svg width="30" height="15" viewBox="0 0 30 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.6797 14.6351C22.5834 14.6356 22.488 14.6172 22.3988 14.5808C22.3097 14.5444 22.2286 14.4907 22.1603 14.4229C22.0917 14.3549 22.0373 14.274 22.0001 14.1848C21.963 14.0957 21.9438 14.0001 21.9438 13.9035C21.9438 13.8069 21.963 13.7113 22.0001 13.6221C22.0373 13.533 22.0917 13.4521 22.1603 13.384L28.2326 7.31904L22.1603 1.25404C22.0225 1.11627 21.9451 0.929426 21.9451 0.734598C21.9451 0.539771 22.0225 0.352923 22.1603 0.215159C22.298 0.077395 22.4849 0 22.6797 0C22.8745 0 23.0614 0.077395 23.1991 0.215159L29.7836 6.7996C29.8521 6.86762 29.9066 6.94853 29.9437 7.03768C29.9809 7.12684 30 7.22246 30 7.31904C30 7.41562 29.9809 7.51125 29.9437 7.6004C29.9066 7.68955 29.8521 7.77047 29.7836 7.83848L23.1991 14.4229C23.1308 14.4907 23.0497 14.5444 22.9606 14.5808C22.8714 14.6172 22.776 14.6356 22.6797 14.6351Z"
                                        fill="white"></path>
                                    <path
                                        d="M28.1387 8.05061H1.12555C0.827033 8.05061 0.540746 7.97353 0.329665 7.83633C0.118584 7.69913 0 7.51304 0 7.31901C0 7.12497 0.118584 6.93889 0.329665 6.80168C0.540746 6.66448 0.827033 6.5874 1.12555 6.5874H28.1387C28.4372 6.5874 28.7235 6.66448 28.9345 6.80168C29.1456 6.93889 29.2642 7.12497 29.2642 7.31901C29.2642 7.51304 29.1456 7.69913 28.9345 7.83633C28.7235 7.97353 28.4372 8.05061 28.1387 8.05061Z"
                                        fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Shop Now Section-->

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
                                    <a href="index.html" title="Logo">
                                        <img width="280" src="assets/images/footer-logo.png" alt="logo">
                                    </a>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://facebook.com" target="_blank" title="Follow On Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com" target="_blank" title="Follow On Linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com" target="_blank" title="Follow On Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com" target="_blank" title="Follow On Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
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
                                        <a title="Home" href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a title="About" href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a title="Menu" href="shop.php">Shop</a>
                                    </li>
                                    <li>
                                        <a title="Contact" href="contact.html">Contact</a>
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
                                    <li><a title="Terms" href="terms.html">terms</a></li>
                                    <li><a title="Privacy Policy" href="privacy-policy.html">privacy policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" id="scrollToTop" class="scrolltotop" title="Scroll To Top">
            <svg width="30" height="51" viewBox="0 0 30 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.9991 -0.000113478C14.8001 -0.000465041 14.609 0.0782843 14.4681 0.218909L0.96811 13.7189C0.680321 14.0168 0.688618 14.4917 0.986532 14.7794C1.2772 15.0601 1.73796 15.0601 2.02856 14.7794L14.999 1.81044L27.968 14.7794C28.266 15.0672 28.7408 15.0589 29.0286 14.761C29.3093 14.4704 29.3093 14.0096 29.0286 13.7189L15.5286 0.218909C15.3881 0.0787062 15.1977 -4.31652e-05 14.9991 -0.000113478Z" fill="#ffffff"/>
                <path d="M14.9993 1C14.5851 1 14.2493 1.46641 14.2493 2.0417L14.2493 49.9583C14.2493 50.5336 14.5851 51 14.9993 51C15.4135 51 15.7493 50.5336 15.7493 49.9583L15.7493 2.0416C15.7493 1.4664 15.4135 1 14.9993 1Z" fill="#ffffff"/>
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