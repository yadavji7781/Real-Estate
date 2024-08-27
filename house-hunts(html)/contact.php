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
    </header><br><br><br>
    <div class="contact-container">
    <h1 class="con-name"><i class="fas fa-address-book"></i> ContactUs</h1>
      <div class="main-content">
          <h2>Get in Touch</h2>
          <p>Feel free to reach out to us with any inquiries or questions. We're here to help you find the perfect property!</p>

          <form class="contact-form">
              <div>
                  <label for="name" class="required">Full Name</label>
                  <input type="text" id="name" name="name" placeholder="Your Full Name" required>
              </div>
              <div>
                  <label for="email" class="required">Email Address</label>
                  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
              </div>
              <div>
                  <label for="phone" class="required">Phone Number</label>
                  <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>
              </div>
              <div style="flex-basis: 100%;">
                  <label for="message" class="required">Message</label>
                  <textarea id="message" name="message" rows="6" placeholder="Your Message" required></textarea>
              </div>
              <div style="flex-basis: 100%;">
                  <button type="submit">Send Message</button>
              </div>
          </form>

          <div class="contact-details">
              <h3>Our Office</h3>
              <p>Ashok Nagar<br>Kurla(W), MUM-400070</p>

              <h3>Email Us</h3>
              <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJZNXRnLJBWxzdbBQZLmsKsWDDqvccDqXfjGPrWntlnCMNSWcvTcfLCgFmpfRsJcMlgL" target="_blank">proyadavji07@gmail.com</a></p>

              <h3>Call Us</h3>
              <p>+91-9326598233</p>
          </div>
      </div>
  </div>

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
    <script>
        /*in contact.php after fill form and click submit button show alert message*/
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('.contact-form');
            
            form.addEventListener('submit', (event) => {
                event.preventDefault(); // Prevent the default form submission
                
                // Display the alert message
                alert('Thank you for contacting us! We will get back to you shortly.');
                
                // Optionally, you can also reset the form after submission
                form.reset();
            });
        });
    </script>
</body>
</html>

