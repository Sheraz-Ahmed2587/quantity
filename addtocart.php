<?php
session_start();

// Check if the product ID is provided
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Retrieve product details based on product ID
    // You may need to modify this part based on your database structure
    $data = "SELECT * FROM product WHERE id='$productId'";
    $product = db::getRecord($data);

    // Check if product details are fetched successfully
    if ($product) {
        // Initialize or retrieve the cart from the session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Add the product to the cart
        $_SESSION['cart'][] = $product;

        // Redirect the user to the cart page
        header('Location: cart.php');
        exit();
    } else {
        // Handle the case where the product ID is invalid
        echo "Product not found!";
    }
} else {
    // Handle the case where the product ID is not provided
    echo "Product ID is missing!";
}