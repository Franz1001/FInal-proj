<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensure the content fills at least the full viewport height */
    background-image: url("https://github.com/Franz1001/Image/blob/main/Melvin-AirJordans.jpg?raw=true");
    background-color: #f0f0f0;
    background-position: auto;
    background-size:cover;
}

header {
    background-color: black;
    text-align: center;
    color: #9ba45b;
    padding: 5px;
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    font-style:italic;
}

#logo {
    width: 80px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-right: 10px; /* Add space between logo and text */
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
.Add {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}
.Back {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}
.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
}

h1 {
    font-size: 50px;
}
h2 {
    font-size: 40px;
    background-color: transparent !important; /* Remove the background color */
    padding: 0; /* Remove any padding that might be affecting the background */
    margin: 0; /* Remove any margin that might be affecting the background */
    border: none; /* Remove any border that might be affecting the background */
    text-align: center; /* Center horizontally */
    line-height: 1.5; /* Adjust line height for vertical centering */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center vertically */
    align-items: center; /* Center horizontally */
    font-style: italic;
    color: white;
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
    margin-top: auto; /* Push the footer to the bottom */
}
#cart img {
    width: 24px; /* Adjust the width as needed */
    height: 24px; /* Adjust the height as needed */
}
#home img {
    width: 24px; /* Adjust the width as needed */
    height: 24px; /* Adjust the height as needed */
}
#contact img {
    width: 24px; /* Adjust the width as needed */
    height: 24px; /* Adjust the height as needed */
}
#shop img {
    width: 24px; /* Adjust the width as needed */
    height: 24px; /* Adjust the height as needed */
}
#out img {
    width: 24px; /* Adjust the width as needed */
    height: 24px; /* Adjust the height as needed */
}
#ad img {
    width: 24px; /* Adjust the width as needed */
    height: 24px; /* Adjust the height as needed */
}
/* Add this to your existing CSS or styles.css */
.Shop {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}

/* Add hover effect */
.Shop:hover {
    background-color: #e64114; /* Change this color to the hover color you prefer */
}
.sign {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}

/* Add hover effect */
.sign-out-btn:hover {
    background-color: #e64114; /* Change this color to the hover color you prefer */
}
.hom {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}

/* Add hover effect */
.Home:hover {
    background-color: #e64114; /* Change this color to the hover color you prefer */
}
.con {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}

/* Add hover effect */
.Contact:hover {
    background-color: #e64114; /* Change this color to the hover color you prefer */
}
.Cart {
    background-color: black; /* Change this color to the one you prefer */
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border: none; /* Remove border */
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    font-weight: bold;
}

/* Add hover effect */
.Cart:hover {
    background-color: #e64114; /* Change this color to the hover color you prefer */
}
/* ... (Your existing CSS code) ... */

.product {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center horizontally */
    text-align: center; /* Center text within the section */
    background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
    padding: 20px;
    margin: 20px auto; /* Center vertically and horizontally */
    max-width: 400px; /* Adjust the maximum width as needed */
    border-radius: 10px; /* Add rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
}

/* ... (Your existing CSS code) ... */
/* ... (Your existing CSS code) ... */

.product {
    text-align: center;
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.product-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.product img {
    max-width: 100%;
    height: auto;
}

.product-info {
    text-align: center;
    margin-top: 20px;
}
.product-info button {
    font-size: 15px; /* Adjust the font size as needed */
    padding: 10px 20px; /* Adjust the padding as needed */
    margin-top: 15px;
    margin-bottom: 15px;
    background-color: black;
    color: white;
}

/* ... (Your existing CSS code) ... */
/* Add this to your existing CSS or styles.css */
/* Add this to your existing CSS or styles.css */
.product {
    text-align: center;
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    overflow: hidden; /* Hide overflowing parts of the image */
    cursor: pointer; /* Change cursor to indicate it's clickable */
    transition: transform 0.3s ease; /* Add smooth transition for zoom effect */
}

.product:hover {
    transform: scale(1.1); /* Scale the image on hover (zoom in) */
}

.product img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s ease; /* Add smooth transition for zoom effect */
}

.product:hover img {
    transform: scale(1.2); /* Scale the image on hover (zoom in) */
}

/* Increase text size */
.product-info {
    font-size: 18px; /* Adjust the font size as needed */
    margin-top: 20px;
}
#back-container {
    float: right; /* Float the container to the right */
    margin-right: 20px; /* Add some margin to separate it from other links */
}
/* Update the CSS for the entire table, including header cells */
table {
  width: 100%; /* Make the table full width */
  border-collapse: collapse; /* Remove default cell spacing */
  background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
  border-radius: 10px; /* Add rounded corners */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
}

table th, table td {
  padding: 15px; /* Increase cell padding for better spacing */
  text-align: center;
  background-color: transparent; /* Remove background color from table cells */
}

table th {
  background-color: #9ba45b; /* Header background color */
  color: white;
}

table tr:nth-child(even) {
  background-color: #f7f7f7; /* Alternate row background color */
}

table a {
  text-decoration: none;
  color: #007bff; /* Link color */
}

table a:hover {

#back {
    display: block; /* Make it a block-level element */
}

select#product1-size {
            font-size: 20px; /* Adjust the font size as needed to make it bigger */
            padding: 10px; /* Add padding to increase the size */
        }

        /* Style the <option> elements within the <select> */
        select#product1-size option {
            font-size: 18px; /* Adjust the font size as needed for the options */
        }

    </style>
  </head>
	<body>
		<header>
				<img src="https://github.com/Franz1001/Image/blob/main/G.png?raw=true" alt="Sole G Apparel Logo" id="logo">
				<h1>Sole G Apparel</h1>
		</header>
		<div style='text-align: center;'>;
				<p style='font-size: 50px; color: white;'></p>;
        <a href="franz.php" style="display: inline-block; padding: 20px 20px; background-color: #007bff; color: #fff; text-decoration: none; border: none; border-radius: 5px; font-weight: bold; font-size: 16px;">Go back</a>

			</div>;

<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr>
				<td>Image</td>
				<td><input type="text" name="image"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Size</td>
				<td><input type="text" name="size"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity"></td>
			</tr>
      <tr>
        <td>Price</td>
        <td><input type="text" name="price" maxlength="10"></td>
    </tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
