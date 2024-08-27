<?php
// Start of signup.php

include("php/config.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $cre_password = $_POST['cre_password'];
    $con_password = $_POST['con_password'];

    // Verifying the unique username,email,phone
    $username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
    $email_query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
    $phone_query = mysqli_query($con, "SELECT phone_no FROM users WHERE phone_no='$phone_no'");

    if(mysqli_num_rows($username_query) != 0){
        $error_message = "This username is used. Try another one please!";
    } elseif (mysqli_num_rows($email_query) != 0){
        $error_message = "This email is used. Try another one please!";
    } elseif (mysqli_num_rows($phone_query) != 0) {
        $error_message = "This phone number is used. Try another one please!";
    } else {
        // Insert the user data into the database
        $query = "INSERT INTO users(name, username, phone_no, email, cre_password, con_password) 
                  VALUES('$name', '$username', '$phone_no', '$email', '$cre_password', '$con_password')";

        if (mysqli_query($con, $query)) {
            $success_message = "Registration Successful!";
        } else {
            $error_message = "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Hunts | Find Your Dream Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS folder/styles.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="images/logo.jpg" alt="House Hunts Logo">
                <span>House Hunts</span>
            </a>
            <nav class="navbar">
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="about.php"><i class="fas fa-book"></i> About</a></li>
                    <li><a href="contact.html"><i class="fas fa-address-book"></i> Contact Us</a></li>
                    <li><a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                    <li id="signup-nav"><a href="signup.php"><i class="fa-solid fa-user-plus"></i> Signup</a></li>
                </ul>
                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header><br><br><br><br>
    <div class="signup-container">
        <?php
        if (isset($error_message)) {
            echo "<div class='message'><p>$error_message</p></div><br>";
            echo "<a href='javascript:self.history.back()'><button class='submit'>Go Back</button></a>";
        } elseif (isset($success_message)) {
            echo "<div class='message'><p>$success_message</p></div><br>";
            echo "<a href='login.php'><button class='submit'>Login Now</button></a>";
        } else {
        ?>
        <h1><i class="fa-solid fa-user-plus"></i> SignUp</h1>
        <form id="signupForm" action="signup.php" method="post">
            <label for="name" class="name1 required">Name:</label>
            <input type="text" id="name" name="name" class="name1" placeholder="Enter Your Full Name" required>

            <label for="username" class="required">Create Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter Username" required>

            <label for="phone_no" class="required">Phone No.:</label>
            <input type="number" id="phone_no" name="phone_no" placeholder="Phone Number" size="10" required>
            
            <label for="email" class="required">E-mail id:</label>
            <input type="email" id="email" name="email" placeholder="Enter E-mail" required>
            
            <label for="cre_password" class="required">Create a password:</label>
            <input type="password" id="cre_password" name="cre_password" placeholder="Enter Password" required>
            
            <label for="con_password" class="required">Confirm password:</label>
            <input type="password" id="con_password" name="con_password" placeholder="Re-Enter Password" required>
            
            <button type="submit" name="submit" class="submit">SignUp</button>
            <p id="error-message" style="color: red;"></p> <!-- Error message placeholder -->
        </form>
        <?php } ?>
    </div>
    </div><br>
    <p>Have an account? <a href="login.php" class="goto">LogIn</a></p>

  <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- About Us -->
                <div class="footer-column">
                    <h3>About HouseHunts</h3>
                    <p>HouseHunts is your trusted partner in finding the perfect home. We offer a wide range of properties to suit all needs and budgets.</p>
                </div>
                <!-- Quick Links -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                         
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-phone-alt"></i> +91-9326598233</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:proyadavji07@gmail.com">proyadavji07@gmail.com</a></p>
                    <p><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra, India</p>
                </div>
                <!-- Social Media -->
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="https://instagram.com/mr.killer7781" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100057469153548" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 HouseHunts. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="JavaScript/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('signupForm');
        
            form.addEventListener('submit', function(event) {
                const password = document.getElementById('cre_password').value;
                const confirmPassword = document.getElementById('con_password').value;
                const errorMessage = document.getElementById('error-message');
                
                if (password !== confirmPassword) {
                    // Display error message and prevent form submission
                    errorMessage.textContent = 'Passwords do not match! Please re-enter your passwords.';
                    event.preventDefault(); // Prevent the form from submitting
                } else {
                    // Clear any previous error message
                    errorMessage.textContent = '';
                }
            });
        });
    </script>
    <script>
        name
    </script>
</body>
</html>
