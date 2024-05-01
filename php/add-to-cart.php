<?php

//include __DIR__."/functions.php";

session_start();
//debug_log("inside add to cart");

// Check if form data is submitted
if (isset($_POST['add-to-cart'])) {
    // Get product details from form data
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Initialize cart if it doesn't exist in session
//    debug_log("session before");
//    debug_log($_SESSION);
    if (!isset($_SESSION['cart_items'])) {
        $_SESSION['cart_items'] = array();
    }

    // Check if the product already exists in the cart
    if (array_key_exists($product_id, $_SESSION['cart_items'])) {
        // If product exists, increment the quantity
//        debug_log("product exists in cart");
        $_SESSION['cart_items'][$product_id]['quantity']++;
    } else {
        // If product doesn't exist, add it to the cart
//        debug_log("product not in cart");
        $_SESSION['cart_items'][$product_id] = array(
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1
        );
    }

    // add to the cart total
    if (!isset($_SESSION['cart_total'])) {
        $_SESSION['cart'] = array();
    }

//    debug_log("session after");
//    debug_log($_SESSION);

    // Redirect back to the product display page after adding to cart
} else {
    // Redirect back to the product display page with an error message if form data is not set
    $_SESSION['error_message'] = "Error: Form data is missing.";
}
header("Location: ".$_SERVER['HTTP_REFERER']);
exit();
?>