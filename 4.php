<?php

?>
<!DOCTYPE html>
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
    <nav>
      <a href="#" id="home"><img src="https://github.com/Franz1001/Image/blob/main/home.png?raw=true"></a>
      <a href="index.php" class="hom">Home</a>
      <a href="#" id="shop"><img src="https://github.com/Franz1001/Image/blob/main/shopping-bag.png?raw=true"</a>
      <a href="shop.php" class="Shop">Shop</a>
      <a href="#" id="cart"><img src="https://github.com/Franz1001/Image/blob/main/shopping-cart.png?raw=true"></a>
      <a href="adcart.php" class="Cart">Cart</a>
      <a href="#" id="contact"><img src="https://github.com/Franz1001/Image/blob/main/contact-us.png?raw=true"></a>
      <a href="contact.php" class="con">Contact Us</a>
      <a href="#" id="ad"><img src="https://github.com/Franz1001/Image/blob/main/user.png?raw=true"></a>
      <a href="logad.php" class="sign">Admin</a>
      <a href="#" id="out"><img src="https://github.com/Franz1001/Image/blob/main/logout.png?raw=true"></a>
      <a href="header.php" class="sign">Sign Out</a>
    </nav>
      <section class="product">
          <div class="product-content">
              <img src="https://github.com/Franz1001/Image/blob/main/white.png?raw=true" alt="Product 2">
              <div class="product-info">
                  <h2 class="product-title"></h2>
                  <p>Jorda 4 A ma Maniere</p>
                  <p>Price: ₱20,000</p>
                  <a href="shop.php" class="Back">Go Back</a>

     </a>
              </div>


        </body>
        </html>

<!-- footer section ends -->

</body>
<?php

?>
</html>
