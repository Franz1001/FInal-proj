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
      <!-- footer section ends -->
      <h3>
          <img src="https://github.com/Franz1001/Image/blob/main/front%20page..jpg?raw=true" alt="Image Description">
      </h3>
      <footer>
          &copy; 2023 SoleG
      </footer>
        </body>
        </html>

<!-- footer section ends -->



<script>
document.getElementById("home").addEventListener("click", function() {
        // Implement code to display home content
    });

    document.getElementById("contact").addEventListener("click", function() {
        // Implement code to display contact content
    });

    document.getElementById("cart").addEventListener("click", function() {
        // Implement code to add items to the cart
    });

    document.getElementById("out").addEventListener("click", function() {
        // Implement code to log the user out
    });



</body>
<?php

?>
</html>
</script>
