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
            <a href="cart.php" class="sec-btn golden-btn" title="view cart">view cart</a>
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
                        <h1 class="h1-title">About Us</h1>
                        <div class="breadcrumb-wp">
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php" title="Home">home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner Section-->

<!-- Start of About Page Section-->
<div class="section about-page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img" style="background-image: url('assets/images/gallery-img-1.jpg');"></div>
            </div>
            <div class="col-lg-6">
                <div class="about-text pt-0">
                    <p>Introducing Ibrew Inc: Your Palapye Paradise for Morula Delights!

                        Nestled in the heart of Palapye, Botswana, Ibrew stands as a beacon of craftsmanship,
                        specializing in the creation and distribution of exquisite Morula fruit products, both alcoholic
                        and non-alcoholic. With an unwavering commitment to quality and tradition, each bottle bears the
                        essence of Botswana's rich cultural heritage, meticulously crafted to tantalize the senses and
                        captivate the soul.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of About Page Section-->

<!-- Start of Our Story Section-->
<section class="section our-story pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="sec-title mb-5 text-center">
                    <h2 class="h2-title">Our Story</h2>
                    <div class="sec-title-shape">
                        <img src="assets/images/gallery-img-3.jpg" alt="Title Shape">
                    </div>

                    <p>A picture of our founding members seated by a Morula tree where the idea of Ibrew was born.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="our-story-text">
                    <p>Once upon a time, in the vibrant heart of Palapye, Botswana, a group of friends found themselves
                        seeking refuge from the scorching African sun beneath the sprawling branches of a majestic
                        Morula tree. As they sat in the dappled shade, savoring the sweet aroma of Morula fruits
                        ripening above, conversation flowed freely, filled with laughter and camaraderie. Among them
                        were Tumi, a passionate botanist fascinated by the native flora of Botswana, Lebo, a skilled
                        artisan with a knack for crafting unique beverages, and Kgosi, a visionary entrepreneur with a
                        deep love for his homeland.
                    </p>
                    <p>
                        As the afternoon sun dipped low in the sky, casting a golden hue over the landscape, inspiration
                        struck like lightning. With the Morula tree standing as a silent witness, the friends shared
                        their dreams of sharing Botswana's natural treasures with the world. They envisioned a company
                        that would honor the rich cultural heritage of their land while celebrating the exquisite
                        flavors of the Morula fruit. And thus, beneath the shade of that ancient tree, the seeds of
                        Ibrew were planted.
                    </p>
                    <p>
                        Fuelled by their passion and determination, Tumi, Lebo, and Kgosi embarked on a journey to turn
                        their vision into reality. Drawing upon Tumi's botanical expertise, Lebo's mastery of beverage
                        crafting, and Kgosi's entrepreneurial spirit, they set out to create a range of Morula-based
                        products that would capture the essence of Botswana's soul. From that fateful day beneath the
                        Morula tree, Ibrew was born, a testament to the power of friendship, inspiration, and the
                        boundless potential of Botswana's natural wonders./p>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="our-story-img" style="background-image: url('assets/images/gallery-img-5.jpg');"></div>
            </div>
        </div>
    </div>
</section>
<!-- End of Our Story Section-->

<!-- Start of Process Section-->
<section class="section process-section fluid-section">
    <div class="process-section-bg dark-bg section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title white-text text-center mb-5">
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
                                                    style="stroke-dasharray: 175.589;"/>
                                        </svg>
                                    </span>
                        </div>
                        <div class="process-text">
                            <h3 class="h3-title">The Harvest</h3>
                            <p>The process begins with the careful selection and harvesting of ripe Morula fruits from
                                the lush trees native to Botswana's landscapes. Our skilled harvesters handpick the
                                fruits at the peak of ripeness, ensuring optimal flavor and quality.</p>
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
                                                    style="stroke-dasharray: 175.589;"/>
                                        </svg>
                                    </span>
                        </div>
                        <div class="process-text">
                            <h3 class="h3-title">Cleaning and Sorting</h3>
                            <p>Upon arrival at our production facility, the Morula fruits undergo a thorough cleaning
                                and sorting process. This step removes any debris or impurities, guaranteeing that only
                                the finest fruits are used in our beverages.</p>
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
                                                    style="stroke-dasharray: 175.589;"/>
                                        </svg>
                                    </span>
                        </div>
                        <div class="process-text">
                            <h3 class="h3-title">Extraction of Morula Pulp</h3>
                            <p>Next, the cleaned Morula fruits are gently processed to extract the precious pulp. This
                                pulp is the essence of our beverages, bursting with the unique flavor and nutrients
                                characteristic of the Morula fruit.</p>
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
                                                    style="stroke-dasharray: 175.589;"/>
                                        </svg>
                                    </span>
                        </div>
                        <div class="process-text">
                            <h3 class="h3-title">Fermentation (for Alcoholic Beverages)</h3>
                            <p>For our alcoholic Morula beverages, the extracted pulp undergoes a carefully monitored
                                fermentation process. This step is crucial for developing the distinct taste profiles
                                and alcohol content that our customers love.</p>
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
                                                    style="stroke-dasharray: 175.589;"/>
                                        </svg>
                                    </span>
                        </div>
                        <div class="process-text">
                            <h3 class="h3-title">Blending and Flavor Enhancement</h3>
                            <p>In this step, our experienced artisans blend the Morula pulp with other carefully
                                selected ingredients to enhance flavor and complexity. Whether creating alcoholic or
                                non-alcoholic beverages, our goal is to create a harmonious balance of taste and
                                aroma.</p>
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
                                                    style="stroke-dasharray: 175.589;"/>
                                        </svg>
                                    </span>
                        </div>
                        <div class="process-text">
                            <h3 class="h3-title">Bottling and Packaging</h3>
                            <p>Finally, the finished Morula beverages are meticulously bottled and packaged with
                                precision and care. Each bottle is a testament to our dedication to quality, ensuring
                                that every sip delivers the pure essence of Botswana's Morula fruit to our valued
                                customers worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Process Section-->

<!-- Start of count Section-->
<section class="section count-section fluid-section">
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
                                    <a title="About" href="about.html">About</a>
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