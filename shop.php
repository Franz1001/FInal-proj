<?php
// Include the database connection file
require_once("dbConnection.php");

// Function to get available quantity
function getAvailableQuantity($productId, $mysqli) {
    // Fetch the available quantity for the product from the database
    $result = mysqli_query($mysqli, "SELECT quantity FROM users WHERE id = $productId");
    $row = mysqli_fetch_assoc($result);

    // Return the available quantity (or 0 if not found)
    return $row ? $row['quantity'] : 0;
}

// Fetch data from the database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

// Start or resume a session
session_start();

// Check if the cart array is not initialized, initialize it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Check if the form is submitted (item is added to the cart)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];

    // Add the selected item to the cart
    $_SESSION['cart'][] = array(
        'product_id' => $productId,
        'quantity' => $quantity,
        'size' => $size
    );
}

// ... rest of your code
?>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url("https://github.com/Franz1001/Image/blob/main/Melvin-AirJordans.jpg?raw=true");
            background-color: #f0f0f0;
            background-position: center;
            background-size: cover;
        }

        header {
            background-color: black;
            text-align: center;
            color: #9ba45b;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-style: italic;
        }

        #logo {
            width: 80px;
            height: auto;
            margin-right: 10px;
            border-radius: 100%;
        }

        nav {
            background-color: #9ba45b;
            color: #fff;
            text-align: center;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }

        .product {
            flex: 0 0 30%; /* Adjust the width as needed */
            margin: 10px;
        }


        h1 {
            font-size: 50px;
        }
        h2 {
            font-size: 40px;
            background-color: transparent !important;
            padding: 0;
            margin: 0;
            border: none;
            text-align: center;
            line-height: 1.5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-style: italic;
            color: white;
        }

        h3 {
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        h3 img {
            max-width: 100%;
            height: auto;
        }
        .cart {
            float: right;
            font-size: 18px;
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }

        #cart img,
        #home img,
        #contact img,
        #shop img,
        #out img,
        #ad img {
            width: 24px;
            height: 24px;
        }

        /* Add this to your existing CSS or styles.css */
        .hop,
        .sign,
        .hom,
        .con,
        .Cart {
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Add hover effect */
        .hop:hover,
        .sign:hover,
        .hom:hover,
        .con:hover,
        .Cart:hover {
            background-color: #e64114;
        }
        .product {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.product:hover {
    transform: scale(1.1);
}

.product img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.product:hover img {
    transform: scale(1.2);
}

.product-info {
    text-align: center;
    margin-top: 20px;
}

.product-info button {
    font-size: 15px;
    padding: 10px 20px;
    margin-top: 15px;
    margin-bottom: 15px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

/* ... (Your existing CSS code) ... */

    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          // Get all "Add to Cart" buttons
          var addToCartButtons = document.querySelectorAll('.add-to-cart');

          // Attach a click event listener to each button
          addToCartButtons.forEach(function (button) {
              button.addEventListener('click', function (event) {
                  event.preventDefault(); // Prevent the form from submitting

                  // Get the product details from the clicked button's parent element
                  var productContainer = button.closest('.product');
                  var productName = productContainer.querySelector('.product-name').innerText;
                  var productPrice = productContainer.querySelector('.product-price').innerText;
                  var productQuantity = productContainer.querySelector('.product-quantity').value;
                  var productSize = productContainer.querySelector('.product-size').value;

                  // Display the product details in the console (you can modify this part to update your cart UI)
                  console.log('Name: ' + productName);
                  console.log('Price: ' + productPrice);
                  console.log('Quantity: ' + productQuantity);
                  console.log('Size: ' + productSize);

                  // Add the product to the cart (you may need to implement an AJAX request to update the server-side cart)
                  // Example: You can use fetch() to send a request to your server to update the cart session.
                  // The server should handle adding the product to the session/cart.

                  // Note: This example assumes that you have a server-side mechanism to handle the cart.
              });
          });
      });
  </script>
<!DOCTYPE html>
<html lang="en">
<head>
  <header>
      <img src="https://github.com/Franz1001/Image/blob/main/G.png?raw=true" alt="Sole G Apparel Logo" id="logo">
      <h1>Sole G Apparel</h1>
  </header>
  <nav>
    <a href="#" id="home"><img src="https://github.com/Franz1001/Image/blob/main/home.png?raw=true"></a>
    <a href="index.php" class="hom">Home</a>
    <a href="#" id="shop"><img src="https://github.com/Franz1001/Image/blob/main/shopping-bag.png?raw=true"></a>
    <a href="shop.php" class="hop">Shop</a>
    <a href="#" id="cart"><img src="https://github.com/Franz1001/Image/blob/main/shopping-cart.png?raw=true"></a>
    <a href="adcart.php" class="Cart">Cart</a>
    <a href="#" id="contact"><img src="https://github.com/Franz1001/Image/blob/main/contact-us.png?raw=true"></a>
    <a href="contact.php" class="con">Contact Us</a>
    <a href="#" id="ad"><img src="https://github.com/Franz1001/Image/blob/main/user.png?raw=true"></a>
    <a href="logad.php" class="sign">Admin</a>
    <a href="#" id="out"><img src="https://github.com/Franz1001/Image/blob/main/logout.png?raw=true"></a>
    <a href="header.php" class="sign">Sign Out</a>
  </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole G Apparel - Products</title>
</head>
<body>
    <header>
        <!-- Header content goes here -->
    </header>
    <div class="container">
            <?php
          // Fetch the next row of a result set as an associative array
          while ($res = mysqli_fetch_assoc($result)) {
              $productId = $res['id'];
              $availableQuantity = $res['quantity']; // Assuming 'quantity' is the available quantity in the database



              echo "<div class='product'>";
              echo "<img src='" . $res['image'] . "' alt='" . $res['name'] . "'>";
              echo "<div class='product-info'>";
              echo "<p>Name: " . $res['name'] . "</p>";
              echo "<p>Available: " . $availableQuantity . "</p>";
              echo "<p>Price:  ₱ " . $res['price'] . "</p>";
              echo "<form method='post'>";
              echo "<input type='hidden' name='product_id' value='{$res['id']}'>";
              echo "<label for='quantity'>Quantity:</label>";
              // Adjusted the min and max attributes dynamically

              echo "<input type='number' name='quantity' value='1' min='1' max='{$availableQuantity}'>";
              echo "<label for='size'>Size:</label>";
              echo "<select name='size'>";
              echo "<option value='small'>9</option>";
              echo "<option value='medium'>10</option>";
              echo "<option value='large'>11</option>";
              echo "</select>";
              echo "<input type='submit' value='Add to Cart'>";
              echo "</form>";
              echo "</div>"; // Closing product-info
              echo "</div>"; // Closing product

          }
          // ...
          ?>
      </div>

    <footer>
        &copy; 2023 Sole G Apparel. All rights reserved.
    </footer>
</body>
</html>
