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
    <link rel="stylesheet" href="/real-e/house-hunts(html)/CSS folder/styles.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <a href="/real-e/house-hunts(html)/index.php" class="logo">
                <img src="/real-e/house-hunts(html)/images/logo.jpg" alt="House Hunts Logo">
                <span>House Hunts</span>
            </a>
            <nav class="navbar">
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="/real-e/house-hunts(html)/index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="/real-e/house-hunts(html)/about.php"><i class="fas fa-book"></i> About</a></li>
                    <li><a href="/real-e/house-hunts(html)/contact.php"><i class="fas fa-address-book"></i> Contact Us</a></li>
                    <li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="/real-e/house-hunts(html)/signout.php" id="signout-button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                    <?php else: ?>
                        <li><a href="/real-e/house-hunts(html)/login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                        <li><a href="/real-e/house-hunts(html)/signout.php"><i class="fa-solid fa-user-plus"></i> Signup</a></li>
                    <?php endif; ?>
                </ul>
                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br>

    <!-- Hero Section -->
                <form class="search-form" action="" method="get">
                    <input type="text" name="query" placeholder="Search properties..." required>
                    <button type="submit"><i class="fas fa-search"></i> Search</button>
                </form>

    <!-- Featured Properties -->
    <section class="properties">
        <div class="container">
            <h2 class="section-title">Cozy Cottage</h2>
            <div class="properties-grid">

                <!-- Property: Elegant Home -->
                <div class="detail-property-card">
                    <img src="https://www.hireacamp.com/api/external/image?name=uploads/94d2b6b2cfb04a46885e5b8561cca097.jpeg&size=3840x3840&q=75" alt="Cozy Cottage">
                    <div class="property-info">
                        <h3>Cozy Cottage</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Nashik, Maharashtra</p>
                        <p class="price">&#x20B9; 20,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 2 Beds</li>
                            <li><i class="fas fa-bath"></i> 1 Baths</li>
                            <li><i class="fas fa-expand"></i> 1,000 sqft</li>
                        </ul>
                        <a href="/real-e/house-hunts(html)/buy.php?name=Cozy%20Cottage&price=2000000" class="btn btn-secondary">Buy</a>
                    </div>
                </div>
    </section>

    <!-- Call to Action -->
    <?php if (isset($_SESSION['username'])): ?>
    <?php else: ?>
        <section class="cta">
        <div class="container">
            <h2>Looking to Sell or Rent Your Property?</h2>
            <p>Join us and reach thousands of potential buyers and renters.</p>
            <a href="/real-e/house-hunts(html)/signup.php" class="btn btn-light">Get Started</a>
        </div>
    </section>
    <?php endif; ?>

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
                        <li><a href="/real-e/house-hunts(html)/about.php">About Us</a></li>
                        <li><a href="/real-e/house-hunts(html)/contact.php">Contact Us</a></li>
                         
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
    <script src="/real-e/house-hunts(html)/JavaScript/scripts.js"></script>
</body>
</html>
