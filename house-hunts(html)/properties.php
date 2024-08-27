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

                <!-- Property 4: Elegant Home -->
                <div class="property-card">
                    <img src="https://www.commonfloor.com/is/a/c/655x525/gallery_images/original/5335c1f594534.gif" alt="Elegant Home">
                    <div class="property-info">
                        <h3>Elegant Home</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Thane, Maharashtra</p>
                        <p class="price">&#x20B9; 40,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 4 Beds</li>
                            <li><i class="fas fa-bath"></i> 3 Baths</li>
                            <li><i class="fas fa-expand"></i> 2,000 sqft</li>
                        </ul>
                        <a href="PropertyDetails/eleganthome.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>

                <!-- Property 5: Spacious Villa -->
                <div class="property-card">
                    <img src="https://r1imghtlak.mmtcdn.com/d8a0bacd-9d01-4104-a29e-b27bf86b21f2.jpeg" alt="Spacious Villa">
                    <div class="property-info">
                        <h3>Spacious Villa</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Aurangabad, Maharashtra</p>
                        <p class="price">&#x20B9; 35,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 5 Beds</li>
                            <li><i class="fas fa-bath"></i> 4 Baths</li>
                            <li><i class="fas fa-expand"></i> 2,500 sqft</li>
                        </ul>
                        <a href="PropertyDetails/spaciousvilla.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>

                <!-- Property 6: Stylish Loft -->
                <div class="property-card">
                    <img src="https://www1.lovethatdesign.com/wp-content/uploads/2022/11/Love-That-Design-The-Neoteric-House-Nagpur-01-1728x1152.jpg" alt="Stylish Loft">
                    <div class="property-info">
                        <h3>Stylish Loft</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Nagpur, Maharashtra</p>
                        <p class="price">&#x20B9; 27,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 2 Beds</li>
                            <li><i class="fas fa-bath"></i> 1 Baths</li>
                            <li><i class="fas fa-expand"></i> 1,100 sqft</li>
                        </ul>
                        <a href="PropertyDetails/stylishloft.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            
                <!-- Property 7: Classic Residence -->
                <div class="property-card">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/572210534.jpg?k=ee466fc55100a97a433a03b3f7a60d77352114a14783b1c78f746d201f921f5d&o=&hp=1" alt="Classic Residence">
                    <div class="property-info">
                        <h3>Classic Residence</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Kolhapur, Maharashtra</p>
                        <p class="price">&#x20B9; 22,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 3 Beds</li>
                            <li><i class="fas fa-bath"></i> 2 Baths</li>
                            <li><i class="fas fa-expand"></i> 1,300 sqft</li>
                        </ul>
                        <a href="PropertyDetails/classicresidence.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
    
                <!-- Property 8: Modern Bungalow -->
                <div class="property-card">
                    <img src="https://vastuhouse.in/wp-content/uploads/2020/11/142-AG.jpg" alt="Modern Bungalow">
                    <div class="property-info">
                        <h3>Modern Bungalow</h3>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Pimpri-Chinchwad, Maharashtra</p>
                        <p class="price">&#x20B9; 50,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 4 Beds</li>
                            <li><i class="fas fa-bath"></i> 3 Baths</li>
                            <li><i class="fas fa-expand"></i> 2,200 sqft</li>
                        </ul>
                        <a href="PropertyDetails/mordenbunglow.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>

                <!-- Property 9: Elegant Apartment -->
                <div class="property-card">
                    <img src="https://assets.architecturaldigest.in/photos/6008399f94ca758bb0ad1090/16:9/w_1920,c_limit/Mumbai-apartment-Zero9-1366x768.jpg" alt="Elegant Apartment">
                    <div class="property-info">
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</p>
                        <h3>Elegant Apartment</h3>
                        <p class="price">&#x20B9; 32,00,000</p>
                        <ul class="features">
                            <li><i class="fas fa-bed"></i> 2 Beds</li>
                            <li><i class="fas fa-bath"></i> 2 Baths</li>
                            <li><i class="fas fa-expand"></i> 1,250 sqft</li>
                        </ul>
                        <a href="PropertyDetails/elegantappartment.php" class="btn btn-secondary">View Details</a>
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
