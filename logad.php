<?php

?>
<!DOCTYPE html>

<style>
        body {
            text-align: center;
            padding: 2em 0;
            background-image: url("https://github.com/Franz1001/Image/blob/main/vans.jpg?raw=true");
            background-color: #f0f0f0;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px; /* Increase the width */
            height: 350px; /* Increase the height */
            padding: 20px;
            border: 2px solid white;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
        }

        header {
            font-size: 50px;
            color: black;
            margin-bottom: 20px;
        }

        .Email, .Password, .button {
            margin: 10px 0;
        }

        .Email input,
        .Password input {
            width: 90%;
            padding: 10px;
            font-size: 18px; /* Increase the font size */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button button {
            width: 100%;
            padding: 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button button[type="reset"] {
            background-color: #dc3545;
            margin-top: 10px;
        }

        #successMessage {
            display: none;
            font-size: 24px;
            color: black;
            margin-top: 20px;
        }

        .error-message {
            color: red;
            font-size: 22px;
        }
    </style>
</head>
<body>
<div class="container">
    <header>Log In as Admin</header>
    <form id="myForm">
        <div class="Email">
            <input type="email" placeholder="Email Address" id="email">
            <div id="emailError" class="error-message"></div>
        </div>
        <div class="Password">
            <input type="password" placeholder="Password" id="password">
            <div id="passwordError" class="error-message"></div>
        </div>
        <div class="button">
            <button type="submit">Log In</button>
        </div>
        <div class="button">
            <button type="button" id="back">Go back</button>
        </div>
    </form>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");

    // Attach the resetForm function to the Reset button
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission
        let isValid = true;

        // Check if email is empty
        if (emailInput.value.trim() === "") {
            emailError.innerText = "Email is required";
            isValid = false;
        } else {
            emailError.innerText = "";
        }

        // Check if password is empty
        if (passwordInput.value.trim() === "") {
            passwordError.innerText = "Password is required";
            isValid = false;
        } else {
            passwordError.innerText = "";
        }

        if (!isValid) {
            return;
        }

        // Check if the entered email and password match the desired values
        const desiredEmail = "admin@sole.com";
        const desiredPassword = "admin123";

        if (emailInput.value === desiredEmail && passwordInput.value === desiredPassword) {
            // Redirect to the desired link on successful login
            window.location.href = "franz.php";
        } else {
            emailError.innerText = "Invalid email or password";
            passwordError.innerText = "Invalid email or password";
        }
    });

    // Reset error messages when inputs change
    emailInput.addEventListener("input", function () {
        emailError.innerText = "";
    });

    passwordInput.addEventListener("input", function () {
        passwordError.innerText = "";
    });
});

// Add an event listener to the "Go back" button
const backButton = document.getElementById("back");
backButton.addEventListener("click", function () {
    // Specify the URL you want to go back to
    window.location.href = "index.php"; // Change "previous_page.html" to your desired URL
});

</script>
</body>
<?php

?>
</html>
