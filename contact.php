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
h3 {
    text-align: center;
    margin: 0;
    padding: 20px; /* Add some padding to separate it from header and footer */
}

h3 img {
    max-width: 100%; /* Ensure the image fits within the h3 container */
    height: auto; /* Maintain aspect ratio */
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
.hop {
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
/* Add this CSS to center the content-box content both horizontally and vertically */
.content-box {
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
}

/* Style headings */
.content-box h1 {
    font-size: 24px;
    color: #333;
    margin-top: 20px;
}

/* Style paragraphs */
.content-box p {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

    </style>
  </head>
  <body>
      <!-- header section starts -->
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
      <div class="content-box">
          <h1>Contact Information</h1>
          <p>Phone: 09123456789</p>
          <p>Email: SolgeGapparel@gmail.com</p>

          <h1>Customer Service</h1>
          <p>Our customer service is available 24/7 to assist you.</p>

          <h1>Rules</h1>
          <p>Please follow these rules while using our services.</p>
      </div>
      <footer>
          &copy; 2023 SoleG
      </footer>
        </body>
        </html>

<!-- footer section ends -->



<script>
const signElement = document.querySelector(".sign");
signElement.addEventListener("click", function() {
    // Redirect to the "signout.html" page when the element is clicked.
    window.location.href = "LogIn.html";
});


</body>
<?php

?>
</html>
</script>
