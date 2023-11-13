<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id DESC");
?>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="product">
        <a href="product_details.php?id=<?= $row['id'] ?>">
            <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
            <h2><?= $row['name'] ?></h2>
            <p><?= $row['description'] ?></p>
        </a>
        <p>Price: ₱<?= $row['price'] ?></p>
        <!-- Add other product details as needed -->
        <button onclick="addToCart('<?= $row['name'] ?>', <?= $row['price'] ?>, 'Size', '<?= $row['image'] ?>')">Add to Cart</button>
    </div>
<?php endwhile; ?>
