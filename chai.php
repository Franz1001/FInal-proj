<?php
// Include the database connection file
require_once("dbConnection.php");

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole G Apparel - Products</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <header>
        <!-- Header content goes here -->
    </header>
    <nav>
        <!-- Navigation content goes here -->
    </nav>

    <div class="container">
        <h2>Products</h2>
        <table width='80%' border=0>
            <tr bgcolor='#DDDDDD'>
                <td><strong>Image</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Size</strong></td>
                <td><strong>Quantity</strong></td>
                <td><strong>Price</strong></td>
                <td><strong>Action</strong></td>
            </tr>
            <?php
            // Fetch the next row of a result set as an associative array
            while ($res = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$res['image']."</td>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['size']."</td>";
                echo "<td>".$res['quantity']."</td>";
                echo "<td>".$res['price']."</td>";
                echo "<td>
                        <form method='post'>
                            <input type='hidden' name='product_id' value='{$res['id']}'>
                            <label for='quantity'>Quantity:</label>
                            <input type='number' name='quantity' value='1' min='1'>
                            <label for='size'>Size:</label>
                            <select name='size'>
                                <option value='small'>Small</option>
                                <option value='medium'>Medium</option>
                                <option value='large'>Large</option>
                            </select>
                            <input type='submit' value='Add to Cart'>
                        </form>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <footer>
        &copy; 2023 Sole G Apparel. All rights reserved.
    </footer>
</body>
</html>
