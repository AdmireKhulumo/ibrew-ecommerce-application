<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include __DIR__ . "/php/functions.php";
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

    <?php

    $cart_items = array();
    $delivery_cost = 50.00;
    $items_total = 0.00;

    if (!empty($_SESSION['cart_items'])) {
        $cart_items = $_SESSION['cart_items'];
    }

    $tax_percentage = 0.14;
    $cart_total = $_SESSION['cart_total'];
    debug_log($cart_total);
    $tax = $_SESSION['tax'];
    debug_log($tax);
    $all_total = $cart_total + $delivery_cost;
    debug_log($all_total);
    ?>

    <?php
    if (isset($_POST['place_order'])) {
        $fname = $_POST['fname'] ?? '';;
        $sname = $_POST['sname'] ?? '';;
        $country= $_POST['country'] ?? '';
        $street_address = $_POST['street_address'] ?? '';
        $city = $_POST['city'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $email = $_POST['email'] ?? '';
        $delivery_method = $_POST['delivery_method'] ?? '';
        $payment_method = $_POST['payment_method'] ?? '';
        $shipping_address = "$street_address, $city, $country";

        // add to orders database
        $conn = db_connect();
        $user_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO orders (user_id, status, shipping_address, payment_method, delivery_method, total_cost) 
                VALUES ($user_id, 'Paid', '$shipping_address', '$payment_method', '$delivery_method', $all_total)";
        $order_id = 0;
        if ($conn->query($sql) === TRUE) {
            // Get the ID of the last inserted record
            $order_id = $conn->insert_id;
            debug_log("New order inserted successfully. ID: " . $order_id);

            // loop through items and add them to the order_items db
            foreach ($cart_items as $product_id => $product) {
                $quantity = $product['quantity'];
                $sql = "INSERT INTO order_items (order_id, product_id, quantity) VALUES($order_id, $product_id, $quantity)";
                if($conn->query($sql) === TRUE){
                    debug_log("Added item id $product_id to order id $order_id");
                }
            }

            // remove cart items from session
            unset($_SESSION['cart_items']);
            redirect('my-orders.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        // Close connection
        $conn->close();

    }
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
            <a href="cart.php" class="sec-btn golden-btn" title="view cart">view cart</a>
            <a href="checkout.html" class="sec-btn" title="Checkout">Checkout</a>
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
                        <h1 class="h1-title">Checkout</h1>
                        <div class="breadcrumb-wp">
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner Section-->

<!-- Start of Checkout Section-->
<section class="section checkout-section">
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-box">
                        <h2 class="md-title">Billing Details</h2>
                        <div class="input-wp">
                            <label>First name <span class="required">*</span></label>
                            <input class="form-input" name="fname" type="text" required="">
                        </div>
                        <div class="input-wp">
                            <label>Last name <span class="required">*</span></label>
                            <input class="form-input" name="sname" type="text" required="">
                        </div>

                        <div class="input-wp">
                            <label>Country / Region <span class="required">*</span></label>
                            <div class="form-element">
                                <select class="country-select" name="country" autocomplete="country"
                                        data-placeholder="Select a Country / Region" data-label="Country / Region">
                                    <option value="">Select a Country / Region</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW" selected="selected">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo (Brazzaville)</option>
                                    <option value="CD">Congo (Kinshasa)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="MK">North Macedonia</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="SX">Saint Martin (Dutch part)</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">São Tomé and Príncipe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom (UK)</option>
                                    <option value="US" >United States (US)</option>
                                    <option value="UM">United States (US) Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="VG">Virgin Islands (British)</option>
                                    <option value="VI">Virgin Islands (US)</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                        <div class="input-wp">
                            <label>Street address <span class="required">*</span></label>
                            <input class="form-input"  name="street_address" type="text" placeholder="House number and street name" required="">
<!--                            <input class="form-input" type="text" placeholder="Apartment, suite, unit, etc. (optional)">-->
                        </div>

                        <div class="input-wp">
                            <label>Town / City <span class="required">*</span></label>
                            <input class="form-input" name="city" type="text" required="">
                        </div>


                        <div class="input-wp">
                            <label>Phone number <span class="required">*</span></label>
                            <input class="form-input" name="phone" type="number" required="">
                        </div>

                        <div class="input-wp">
                            <label>Email address <span class="required">*</span></label>
                            <input class="form-input" name="email" type="email" required="">
                        </div>

                        <div class="input-wp">
                            <label>Delivery method <span class="required">*</span></label>
                            <div class="form-element">
                                <select class="country-select" name="delivery_method" data-placeholder="Select a delivery method"
                                        data-label="Delivery method">
                                    <option value="Botswana Post">Botswana Post</option>
                                    <option value="DHL">DHL</option>
                                    <option value="Sprint">Sprint</option>
                                    <option value="Self-Pickup">Self-Pickup</option>
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                        <div class="input-wp">
                            <label>Payment method <span class="required">*</span></label>
                            <div class="form-element">
                                <select class="country-select" name="payment_method" data-placeholder="Select a payment method"
                                        data-label="Payment method">
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="Mobile Money">Mobile Money</option>
                                    <option value="EFT">Electronic Fund Transfer</option>
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-box order-box light-bg">
                        <h2 class="md-title">Your Order</h2>
                        <table class="shop-table">
                            <tbody>
                            <?php foreach ($cart_items as $product_id => $product) { ?>
                                <tr class="cart-subtotal">
                                    <th>
                                        <span> <?php echo $product['name'] ?>  <b>&nbsp;×&nbsp; <?php echo $product['quantity'] ?> </b></span>
                                    </th>
                                    <td data-title="Subtotal">
                                        <span class="cart-subtotal-amount">
                                            <span class="cart-amount-currencySymbol">BWP
                                            </span> <?php echo number_format($product['price'] * $product['quantity'], 2, '.', '') ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr class="cart-shipping">
                                <th>Delivery</th>
                                <td data-title="Shipping">
                                    <span class="cart-shipping-amount"><span
                                                class="cart-amount-currencySymbol">BWP</span><?php echo $delivery_cost ?></span>
                                </td>
                            </tr>
                            <tr class="tax-rate">
                                <th>Tax</th>
                                <td data-title="tax-rate">
                                    <span class="cart-shipping-amount"><span
                                                class="cart-amount-currencySymbol">BWP</span><?php echo number_format($tax,2, '.', '') ?></span>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="total">
                                    <span class="cart-amount"><span
                                                class="cart-amount-currencySymbol">BWP</span><?php echo $all_total ?></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a target="_blank" href="privacy-policy.php" title="privacy policy">privacy policy.</a></p>

                        <button type="submit" name="place_order" class="explore-more-link">
                            Place Order
                            <svg width="30" height="15" viewBox="0 0 30 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.6797 14.6351C22.5834 14.6356 22.488 14.6172 22.3988 14.5808C22.3097 14.5444 22.2286 14.4907 22.1603 14.4229C22.0917 14.3549 22.0373 14.274 22.0001 14.1848C21.963 14.0957 21.9438 14.0001 21.9438 13.9035C21.9438 13.8069 21.963 13.7113 22.0001 13.6221C22.0373 13.533 22.0917 13.4521 22.1603 13.384L28.2326 7.31904L22.1603 1.25404C22.0225 1.11627 21.9451 0.929426 21.9451 0.734598C21.9451 0.539771 22.0225 0.352923 22.1603 0.215159C22.298 0.077395 22.4849 0 22.6797 0C22.8745 0 23.0614 0.077395 23.1991 0.215159L29.7836 6.7996C29.8521 6.86762 29.9066 6.94853 29.9437 7.03768C29.9809 7.12684 30 7.22246 30 7.31904C30 7.41562 29.9809 7.51125 29.9437 7.6004C29.9066 7.68955 29.8521 7.77047 29.7836 7.83848L23.1991 14.4229C23.1308 14.4907 23.0497 14.5444 22.9606 14.5808C22.8714 14.6172 22.776 14.6356 22.6797 14.6351Z"
                                      fill="var(--primary-color)"></path>
                                <path d="M28.1387 8.05061H1.12555C0.827033 8.05061 0.540746 7.97353 0.329665 7.83633C0.118584 7.69913 0 7.51304 0 7.31901C0 7.12497 0.118584 6.93889 0.329665 6.80168C0.540746 6.66448 0.827033 6.5874 1.12555 6.5874H28.1387C28.4372 6.5874 28.7235 6.66448 28.9345 6.80168C29.1456 6.93889 29.2642 7.12497 29.2642 7.31901C29.2642 7.51304 29.1456 7.69913 28.9345 7.83633C28.7235 7.97353 28.4372 8.05061 28.1387 8.05061Z"
                                      fill="var(--primary-color)"></path>
                            </svg>
                            <span class="underline-text"></span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End of Checkout Section-->

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