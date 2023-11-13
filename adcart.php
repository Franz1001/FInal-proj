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
#cart-section {
    display: flex;
    flex-direction: column;
    margin: auto;
    height: 500px;
    align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
    text-align: center; /* Center text within the div */
    background-color: white; /* Set a background color for the cart section */
    padding: 20px; /* Add some padding to the cart section */
    border: 1px solid #ccc; /* Add a border for styling */
    border-radius: 10px; /* Add rounded corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
}

#cart-section h2 {
    margin: 0; /* Remove margin from the h2 element */
}
h2{
  color:black;
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
      <section id="cart-section">
             <h2>Shopping Cart</h2>
             <ul id="cart-items">
                 <!-- Cart items will be dynamically added here using JavaScript -->
             </ul>
             <p>Total: ₱<span id="cart-total">0.00</span></p>
             <a href="check.php" class="sign">Order</a>
         </section>
      </div>
      <footer>
          &copy; 2023 SoleG
      </footer>
        </body>
        </html>

<!-- footer section ends -->
<script>
function checkout() {
  // Retrieve cart items from local storage
  const cart = JSON.parse(localStorage.getItem('cart'));

  // Check if the cart is not empty
  if (cart && cart.length > 0) {
    // Redirect to the checkout page passing the cart data as URL parameters
    const cartData = encodeURIComponent(JSON.stringify(cart));
    window.location.href = `checkout.php?cart=${cartData}`;
  } else {
    alert('Your cart is empty. Add some products before checking out.');
  }
}
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
    // cart.js

// Function to load and display the cart items on the cart.html page
// cart.js

// Function to load and display the cart items on the cart.html page
function displayCartItems() {
  // Get the cart from localStorage
  const cart = JSON.parse(localStorage.getItem('cart'));

  // Get the cart items container element
  const cartItemsContainer = document.getElementById('cart-items');

  // Clear any existing items in the cart
  cartItemsContainer.innerHTML = '';

  // Initialize the total price
  let totalPrice = 0;

  // Loop through each item in the cart
  if (cart) {
    cart.forEach((item, index) => {
      // Create a new list item element for each cart item
      const listItem = document.createElement('li');
      listItem.textContent = `${item.title} (Size: ${item.size}) - ₱${item.price.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',')}`;
      cartItemsContainer.appendChild(listItem);

      // Add a remove button for each item
      const removeButton = document.createElement('button');
      removeButton.textContent = 'Remove';
      listItem.appendChild(removeButton);

      // Add a click event listener to remove the item from the cart
      removeButton.addEventListener('click', () => {
        // Remove the item from the cart array
        cart.splice(index, 1);

        // Update the cart in localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Refresh the cart items display
        displayCartItems();
      });

      // Add the item price to the total
      totalPrice += item.price;
    });
  }

  // Update the total price with commas
  const cartTotalElement = document.getElementById('cart-total');
cartTotalElement.textContent = `${totalPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',')}`;



}

// Call the function to display cart items when the cart.html page loads
displayCartItems();
    </script>


</body>
<?php

?>
</html>
