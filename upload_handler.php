<!-- upload_handler.php -->

<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
    // Escape other form fields
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $quantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);
    $price = mysqli_real_escape_string($mysqli, $_POST['price']);

    // Handle image upload
    if (isset($_FILES['image'])) {
        $file = $_FILES['image'];
        $filename = $file['name'];
        $temp_path = $file['tmp_name'];

        // Move the uploaded file to a permanent location
        $upload_path = 'path/to/your/upload/folder/' . $filename;
        move_uploaded_file($temp_path, $upload_path);

        // Insert data into the database
        $result = mysqli_query($mysqli, "INSERT INTO users (`image`, `name`, `quantity`, `price`) VALUES ('$filename', '$name', '$quantity', '$price')");

        // Retrieve the last inserted ID to construct the image URL
        $lastInsertedId = mysqli_insert_id($mysqli);
        $imageUrl = "https://example.com/path/to/images/{$lastInsertedId}.jpg";  // Replace with the actual path to your images

        // Update the image URL in the database
        mysqli_query($mysqli, "UPDATE users SET image_url = '$imageUrl' WHERE id = $lastInsertedId");

        // Display success message with the image
        echo "<div style='text-align: center;'>";
        echo "<p style='font-size: 50px; color: white;'>Data added successfully!</p>";
        echo "<img src='$upload_path' alt='Uploaded Image' style='max-width: 100%; height: auto;'>";  // Display the uploaded image
        echo "<a href='franz.php' style='display: inline-block; padding: 20px 500px; background-color: #007bff; color: #fff; text-decoration: none; border: none; border-radius: 5px; font-weight: bold; font-size: 16px;'>View Result</a>";
        echo "</div>";
    } else {
        echo "File upload failed.";
    }
}
?>
