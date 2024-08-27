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
    <style>
        .hero {
            background-image: url('/real-e/house-hunts(html)/images/img-background2.webp');
        }
    </style>
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
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Find Your Dream Home</h1>
                <p>Discover the best properties at unbeatable prices.</p>
                <form class="search-form" action="search.html" method="get">
                    <input type="text" name="query" placeholder="Search properties..." required>
                    <button type="submit"><i class="fas fa-search"></i> Search</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="properties">
        <div class="container">
            <h2 class="section-title">Featured Properties</h2>
            <div class="properties-grid">
                <!-- Property Card 1: Moder Villa -->
                <div class="property-card">
                    <img src="https://teja12.kuikr.com/is/a/c/800x600/gallery_images/original/cf5e396218a1f7e.gif" alt="Modern Villa">
                    <div class="property-info">
                        <h3>Modern Villa</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Pune, Maharashtra</p>
                        <p class="price">&#x20B9; 25,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 3 Beds</li>
                            <li><i class="fas fa-bath"></i> 2 Baths</li>
                            <li><i class="fas fa-expand"></i> 1,500 sqft</li>
                        </ul>
                        <a href="PropertyDetails/modernvilla.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>

                <!-- Repeat similar blocks for other properties -->
                <!-- Property Card 2: Luxury Apartment -->
                <div class="property-card">
                    <img src="https://destinationcompress.s3.ap-south-1.amazonaws.com/ab94c23f-5e86-4769-b32a-30d0beff2117.jpg" alt="Luxury Apartment">
                    <div class="property-info">
                        <h3>Luxury Apartment</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</p>
                        <p class="price">&#x20B9; 30,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 2 Beds</li>
                            <li><i class="fas fa-bath"></i> 2 Baths</li>
                            <li><i class="fas fa-expand"></i> 1,200 sqft</li>
                        </ul>
                        <a href="PropertyDetails/luxuryapartment.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>

                <!-- Property 3: Cozy Cottage -->
                <div class="property-card">
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
                        <a href="PropertyDetails/cozycottage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>

        <div class="view-more">
            <a href="properties.php" class="btn btn-primary">View All Properties</a>
        </div>
    </section>

    <!-- Call to Action -->
    <?php if (isset($_SESSION['username'])): ?>
    <?php else: ?>
        <section class="cta">
        <div class="container">
            <h2>Looking to Sell or Rent Your Property?</h2>
            <p>Join us and reach thousands of potential buyers and renters.</p>
            <a href="signup.php" class="btn btn-light">Get Started</a>
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
