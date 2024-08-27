<?php
//strat the session
session_start();
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
                    <li><a href="contact.php"><i class="fas fa-address-book"></i> Contact Us</a></li>
                    <li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="signout.php" id="signout-button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                        <li><a href="signup.php"><i class="fa-solid fa-user-plus"></i> Signup</a></li>
                    <?php endif; ?>
                </ul>
                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header><br><br><br><br>

    <div class="about-container">
      <div class="about-content">
          <h1 class="about-header">About House Hunts</h1>
          <p>At House Hunts, we believe that finding your dream home should be an exciting and seamless journey. Established in 2024, our mission is to connect home seekers with the best properties on the market. Whether you're a first-time homebuyer, looking to invest, or simply seeking a new place to call home, our team of experienced real estate professionals is here to guide you every step of the way.</p>
  
          <p>We specialize in offering a wide range of properties, from luxurious apartments in the heart of the city to cozy family homes in peaceful neighborhoods. Our extensive database is updated regularly to ensure you have access to the latest listings, and our user-friendly platform makes it easy to filter and search for properties that match your criteria.</p>
  
          <p>At House Hunts, we prioritize customer satisfaction above all else. Our dedicated support team is available to answer your questions and provide personalized assistance, ensuring you find a property that truly feels like home.</p>
  
          <h2>Meet Our Team</h2>
          <div class="team">
              <div class="team-member">
                  <img src="https://ntrepidcorp.com/wp-content/uploads/2016/06/team-1.jpg" alt="John Doe" width="150">
                  <h3>John Doe</h3>
                  <p>Founder & CEO</p>
              </div>
              <div class="team-member">
                  <img src="https://media.licdn.com/dms/image/D5603AQGl7VRusJ7yqg/profile-displayphoto-shrink_200_200/0/1675889057598?e=2147483647&v=beta&t=llUGLdqRMRjuGBaeBzToG_AwQrgNUVQqBQvU9bLU46k" alt="Jane Smith" width="150">
                  <h3>Jane Smith</h3>
                  <p>Chief Marketing Officer</p>
              </div>
              <div class="team-member">
                  <img src="https://media.licdn.com/dms/image/D5603AQHEZzMUH34Ocw/profile-displayphoto-shrink_200_200/0/1707134059069?e=2147483647&v=beta&t=EBrJNVhU8BOU-EMm8pMxWyslp1Acfko73goK9xmgT38" alt="Emily Johnson" width="150">
                  <h3>Emily Johnson</h3>
                  <p>Head of Sales</p>
              </div>
          </div>
      </div>
  </div>
  <br>
  
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
                        <li><a href="contact.php">Contact Us</a></li>
                         
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
</body>
</html>
