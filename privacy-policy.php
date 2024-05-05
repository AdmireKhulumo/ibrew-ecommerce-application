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
                        <a title="Sangiovese Sierra Folia" href="product-single.php">Amarula Morula Delight</a>
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
                        <a title="Mirassou Vineyards" href="product-single.php">Amarula Strawberry</a>
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
                            <h1 class="h1-title">Privacy Policy</h1>
                            <div class="breadcrumb-wp">
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active">Privacy Policy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Inner Banner Section-->

    <section class="section inner-page-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        <p>We are committed to protecting and respecting your privacy. This Privacy Policy and the Terms of Use set out the basis on which any personal data we collect from you, or that you provide to us, will be processed by us. Please read
                            the following carefully to understand our views and practices regarding your personal data and how we will treat it.</p>
                        <h2 class="sec-head">INFORMATION WE MAY COLLECT FROM YOU</h2>
                        <p><strong>We may collect and process the following data about you:</strong></p>
                        <ul>
                            <li>Information that you provide by filling in forms on our website. This includes information provided at the time of registering to use our website, subscribing to our service, posting material, or requesting further services.
                                We may also ask you for information when you enter a competition or promotion sponsored by us and when you report a problem with our website.</li>
                            <li>If you contact us, we may keep a record of that correspondence.</li>
                            <li>We may ask you to complete surveys that we use for research purposes, although you do not have to respond to them.</li>
                            <li>Details of transactions you carry out through our website and of the fulfillment of your orders.</li>
                            <li>Details of your visits to our website, including but not limited to traffic data, location data, weblogs, and other communication data, whether this is required for our own billing purposes or otherwise, and the resources that
                                you access.</li>
                        </ul>
                        <h2 class="sec-head">IP ADDRESS</h2>
                        <p> We may collect information about your computer, including where available your IP address, operating system, and browser type, for system administration and to report aggregate information to our advertisers. This is statistical
                            data about our users’ browsing actions and patterns, and does not identify any individual.</p>
                        <h2 class="sec-head">COOKIES</h2>
                        <p> Our site uses cookies to distinguish you from other users of our website. This helps us to provide you with a good experience when you browse our website and also allows us to improve our website. For detailed information on the
                            cookies we use and the purposes for which we use them, please refer to our Cookie Policy.</p>
                        <h2 class="sec-head">WHERE WE STORE YOUR PERSONAL DATA</h2>
                        <p> When we use your information as described in this Privacy Policy, it may occasionally involve sending your information around the world. By providing us with your personal information, you agree that we may transfer, store, and
                            process your information in this manner. Unfortunately, the transmission of information via the Internet is not completely secure. Although we employ security measures designed to protect your personal data, we cannot guarantee
                            the security of your data transmitted to our website; any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to prevent possible unauthorized access.</p>
                        <h2 class="sec-head">INFORMATION USAGE</h2>
                        <p> <strong>We use information held about you in the following ways:</strong></p>
                        <ul>
                            <li>To ensure that content from our website is presented in the most effective manner for you and for your computer.</li>
                            <li>To provide you with information, products, or services that you request from us or that we feel may interest you, where you have consented to be contacted for such purposes.</li>
                            <li>To carry out our obligations arising from any contracts entered into between you and us.</li>
                            <li>To allow you to participate in interactive features of our service when you choose to do so.</li>
                            <li>To notify you about changes to our service.</li>
                        </ul>
                        <h2 class="sec-head">DISCLOSURE OF YOUR INFORMATION</h2>
                        <p> <strong>We may disclose your personal information to:</strong></p>
                        <ul>
                            <li>Any member of our group of companies (our subsidiaries and our ultimate holding company and its subsidiaries);</li>
                            <li>Data processing companies, mailing houses, and other third parties working on our behalf (whether directly or indirectly).</li>
                        </ul>
                        <p> <strong>We may disclose your personal information to third parties:</strong></p>
                        <ul>
                            <li>In the event that we sell or buy any business, assets, or shares, in which case we may disclose your personal data to the prospective seller or buyer of such business, assets, or shares.</li>
                            <li>If we are under a duty to disclose or share your personal data in order to comply with any legal obligation, or in order to enforce or apply our terms and conditions; or to protect our rights, property, or safety, or those
                                of our customers or others. This includes exchanging information with other companies and organizations for the purposes of fraud protection and credit risk reduction.</li>
                            <li>Requests may be received for information from government departments, the police, and other enforcement agencies. If this happens, and there is a proper legal basis for providing your information, it will be provided to the
                                requesting organization.</li>
                        </ul>
                        <h2 class="sec-head">CHANGES TO OUR PRIVACY POLICY</h2>
                        <p> This Privacy Policy may be updated periodically, so please refer to this policy when you visit our site to stay informed.</p>
                        <h2 class="sec-head">CONTACT</h2>
                        <p> Please contact us using the details shown on our website if you have any questions, comments, or requests regarding this Privacy Policy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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