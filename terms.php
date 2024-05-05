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
                            <h1 class="h1-title">Terms Of Use</h1>
                            <div class="breadcrumb-wp">
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active">Terms Of Use</li>
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
                        <h2 class="sec-head">TERMS OF USING OUR WEBSITE:</h2>
                        <p>1. This website promotes the business referred to on its pages. In these conditions, the business will be referred to as “we” and/or “our.”</p>
                        <p>2. A wide range of intellectual property rights are used in and relating to this website, including:</p>
                        <ul class="list-disk">
                            <li>Our trademarks and logos;</li>
                            <li>The design, text, graphics, and other content of the web pages on this website, together with all the web addresses associated with those web pages; and</li>
                            <li>All the software used in relation to this website.</li>
                        </ul>
                        <p>3. We are the owner of the authorized licensee of these intellectual property rights. You agree not to copy any content (including images) on this website without our consent.</p>
                        <h2 class="sec-head">ABOUT THE CONDITIONS:</h2>
                        <p>4. If you access or use any part of this website, you agree to these conditions. If you do not wish to agree to these conditions, do not access or use this website.</p>
                        <p>5. We may change these conditions at any time without giving notice. Please check these conditions periodically for any changes. By continuing to use the website, you agree to all the changes made to these conditions.</p>
                        <h2 class="sec-head">USING OUR WEBSITE:</h2>
                        <p>6. We collect and use information in line with our Privacy Policy. By using this website, you agree to the way in which we collect and use your information.</p>
                        <p>7. You cannot use this website for any of the following:</p>
                        <ul class="list-disk">
                            <li>For any unlawful purpose;</li>
                            <li>To send spam;</li>
                            <li>To harm, threaten, abuse, or harass another person, or in a way that invades someone’s privacy or is (in our reasonable opinion) offensive or is unacceptable or damaging to us, our customers, or suppliers;</li>
                            <li>To create, check, confirm, update, or amend your own or someone else’s databases, records, directories, customer lists, mailing or prospecting lists;</li>
                            <li>To tamper with, update, or change any part of this website;</li>
                            <li>In a way that affects how the website is run;</li>
                            <li>In a way that imposes an unreasonable or disproportionably large burden on us or our suppliers’ communications and technical systems as determined by us; or</li>
                            <li>Using any automated means to monitor or copy the website or its content, or to interfere with or attempt to interfere with how the website works.</li>
                        </ul>
                        <h2 class="sec-head">IF YOU PROVIDE CONTENT FOR OUR WEBSITE:</h2>
                        <p>8. If you provide any material to this website (for example, by providing ratings and reviews, comments, articles, or uploading any other content in any format (including video)) (each “User Content.”). You agree to grant us permission,
                            irrevocably and free of charge, to use User Content (including altering and adapting it for operational or editorial reasons) in any media worldwide, for our own marketing, research, and promotional activities and our internal
                            business purposes, which may include providing the User Content to selected third-party partners, service providers, social media, and networking sites.</p>
                        <p>9. You own your User Content at all times, and you continue to have the right to use it in any way you choose.</p>
                        <p>10. By providing any User Content to the website, you confirm that your User Content:</p>
                        <ul class="list-disk">
                            <li>Is your own original work or you are authorized to provide it to the website and that you have the right to give us permission to use it for the purposes set out in these terms;</li>
                            <li>Will not contain or promote anything illegal, harmful, misleading, abusive, defamatory (that is, it does not damage someone’s good reputation), or anything else that might cause widespread offense or bring us or our business
                                partners into disrepute;</li>
                            <li>Does not take away or affect any other person’s privacy rights, contract rights, or any other rights;</li>
                            <li>Does not contain any virus or code that may damage, interfere with, or otherwise adversely affect the operation of the website;</li>
                            <li>Will, if used to promote your own business or services, clearly and openly state your association with the particular business expressly;</li>
                            <li>Will not contain any form of mass-mailing or spam.</li>
                            <li>If you do not wish to grant us the permissions set out above, please do not provide any material to the website. </li>
                            <li>We have no obligation to publish your User Content on the website and we retain the right to remove any User Content at any time and for any reason. </li>
                            <li>We do not edit, pre-vet, or review any User Content displayed on the website. If you believe that any User Content does not comply with the requirements set out in this paragraph, please notify us immediately. We will then
                                review the User Content and, where we deem appropriate, remove it within a reasonable amount of time.</li>
                        </ul>
                        <h2 class="sec-head">DISCLAIMERS:</h2>
                        <p>14. You use the website at your own risk.</p>
                        <p>15. You should not rely on the website for advice.</p>
                        <p>16. As far as the relevant laws allow, we do not guarantee that:</p>
                        <ul class="list-disk">
                            <li>There will be no problems with how you use the website; or</li>
                            <li>The computer or server you use to log on to the website is free of viruses or other harmful programs.</li>
                        </ul>
                        <h2 class="sec-head">LIMITS TO OUR LIABILITY:</h2>
                        <p>17. There is no limit to what we, as well as the people who provide our services, will be liable for if injury or death occurs because of our negligence or because we have committed fraud.</p>
                        <p>18. Under no circumstances will we, the owner or operator of this website, or any of their group companies, employees, officers or agents, or any other organization involved in creating, producing, maintaining, or disturbing the
                            website be liable for any loss of:</p>
                        <ul class="list-disk">
                            <li>Profits;</li>
                            <li>Business or business opportunities;</li>
                            <li>Expected savings;</li>
                            <li>Goodwill;</li>
                            <li>Use of, or corruption to, information; or</li>
                            <li>Information</li>
                        </ul>
                        <p>19. If we do not keep to these conditions, they will only be liable for losses you have suffered as a direct result. We are not liable to you for any other losses whether such losses are because we have not kept to our obligations
                            or contract, because of something we have done or not done in negligence, due to defamatory statements, or liability for a product or otherwise result of;</p>
                        <ul class="list-disk">
                            <li>Using or relying on the website;</li>
                            <li>Not being able to use the website;</li>
                            <li>Any mistake, fault, failure to do something, missing information, virus on the website, or if it does not work properly because of incidents outside of our control, such as (but not limited to) interruptions to communication
                                and networks or other circumstances beyond our control;</li>
                            <li>Theft, destruction of information, or someone gaining access to our records, programs, or services without our permission;</li>
                            <li>Goods, products, services, or information received through or advertised on any website which we link to from this website; or</li>
                            <li>Any information, data, message, or other material which you email, post, upload, reproduce, send, or otherwise distribute or receive using the website,<br> THE WHOLE AGREEMENT:</li>
                        </ul>
                        <p>These conditions make up the whole agreement between you and us in how you use the website. If a court decides that a condition is not valid, the rest of the conditions will still apply.</p>
                        <p>© All rights reserved.</p>
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
                                    <li><a title="Terms" href="terms.html">terms</a></li>
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