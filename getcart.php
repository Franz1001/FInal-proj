<?php
// Include the database connection file
require_once("dbConnection.php");

// Start or resume a session
session_start();

// Check if the cart array is not initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// If it's an AJAX request, return the cart content
if ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    echo "<h2>Your Cart</h2>";
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>Product ID: {$item['product_id']}, Quantity: {$item['quantity']}, Size: {$item['size']}</li>";
    }
    echo "</ul>";
} else {
    // If it's a direct page load, include the adcart.php content
    include('adcart.php');
}
?>
