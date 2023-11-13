<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" type="image/x-icon" href="1.png">
    <style>
      body {
        text-align: center;
        padding: 2em 0;
        background-image: url("https://github.com/Franz1001/Image/blob/main/travis-scott-air-jordan-1-low-og-olive-dz4137-106-release-date-lead.jpg?raw=true");
        background-position: auto;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      header {
        font-size: 50px;
        color: white;

      }

      .container {
          width: 300px;
          padding: 20px;
          border: 2px solid white;
          background-color: rgba(0, 0, 0, 0.4); /* Adjust the alpha value for a darker background */
          border-radius: 5px;
      }

      .Email, .Password {
        margin: 20px 0; /* Increase the margin between input fields */
      }

      input {
        width: 80%; /* Increase the input width */
        padding: 15px; /* Increase the padding */
        border: none;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.9);
      }
      .btn {
    background-color:  #1E90FF;
    text-decoration: none;
    margin-top: 10px;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px;
    width: 100%;
}


      .button {
        margin-top: 20px;
      }

      button {
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px;
        width: 100%;
      }

      button[type="submit"] {
        background-color: #1E90FF;
      }


      .error-message {
        color: red;
        margin-top: 10px;
      }

      .login-status {
        color: black;
        margin-top: 10px;
      }
  </style>
</head>
<body>

<div class="container">
    <header>Sign In</header>
    <?php
       if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p class="error-message">Fill in all fields!</p>';
        } elseif ($_GET['error'] == "sqlerror") {
            echo '<p class="error-message">SQL error occurred!</p>';
        } elseif ($_GET['error'] == "wrongpwd") {
            echo '<p class="error-message">Wrong password!</p>';
        } elseif ($_GET['error'] == "nouser") {
            echo '<p class="error-message">No user found!</p>';
        }
    }

    echo '</form>';
    if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You are logged in!</p>';

        echo '<div class="button">
        <button type = "submit" onclick="redirectToAnotherPage()">Home</button>
      </div>';

        echo '<script>
        function redirectToAnotherPage() {
          window.location.href = "index.php"; //
      }
      </script>';

        echo '<form id="logout" action="includes/logout.inc.php" method="post">
        <div class="button">
            <button type="submit" name="logout-submit" id="logout">Log out</button>
        </div>
        </form>';

    }
     else  {
        echo ' <form id="myForm" action="includes/login.inc.php" method="post">
        <div class="Email">
            <input type="text" name="mailuid" placeholder="Username or Email" id="email">
        </div>
        <div class="Password">
            <input type="password" name="pwd" placeholder="Password" id="password">
        </div>
        <div class="button">
            <button type="submit" name="login-submit">Log In</button>
        </div>';


        echo '<div class="button">
        <a class="btn" href="signup.php">Sign Up</a>
    </div>';





        // Error handling

    }
    ?>
</div>
</body>
</html>
