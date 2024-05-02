<!DOCTYPE html>
<html lang="en">

<head>
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

</head>

<body class="body-fixed">

<!-- Start of Header-->
<header class="site-header">
    <div class="header-main header-top fluid-section">
        <div class="header-top-left">
            <div class="header-list">
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

        <div class="header-top-right">
            <div class="header-list">
                <ul>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <li>
                            <h6> <?php echo $_SESSION['user']['username'] ?> </h6>
                        </li>
                        <li>
                            <a href="./php/logout.php" title="Log Out">Log Out</a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="login-register.php" title="Register">Register</a>
                        </li>
                        <li>
                            <a href="login-register.php" title="Log In">Log In</a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="cart.php" title="My Cart" class="cart-sidebar-button">
                            <img width="27" height="24" src="assets/images/cart-icon.svg" alt="Cart Icon">
                            <span class="shopping-value"> <?php echo isset($_SESSION['cart_items']) ? count($_SESSION['cart_items']) : 0; ?> </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ani-line"></div>
    <div class="header-main header-bottom fluid-section">
        <div class="header-logo">
            <a href="index.php" title="Home">
                <img src="assets/images/logo.png" alt="logo" class="header-logo-img">
            </a>
        </div>

        <div class="main-navigation">
            <button class="menu-toggle"><span></span><span></span></button>
            <div class="header-menu">
                <nav>
                    <ul class="menu">
                        <li>
                            <a class="round-shape-button header-active-menu" title="Home" href="index.php">Home
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
                            <a class="round-shape-button" title="About" href="about.php">About
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
                            <span class="for-mob dropdown-icon"><i class="fas fa-chevron-down"
                                                                   aria-hidden="true"></i></span>
                            <ul class="sub-menu">
                                <li><a title="Shop" href="shop.php">Shop</a></li>
                                <li><a title="Cart" href="cart.php">Cart</a></li>
                                <li><a title="Checkout" href="checkout.php">Checkout</a></li>
                                <?php if (isset($_SESSION['user'])) { ?>
                                    <li><a title="My Orders" href="my-orders.php">My Orders</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a class="round-shape-button" title="Contact" href="contact.php">Contact
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
                    <button type="submit"><img width="24" height="24" src="assets/images/search-icon.svg"
                                               alt="Search Icon"></button>
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

</body>