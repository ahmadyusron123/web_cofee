<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Haven - Premium Coffee Experience</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Coffee<span>Haven</span></h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="icons">
                <i class="fas fa-search" id="search-btn"></i>
                <i class="fas fa-shopping-cart" id="cart-btn"></i>
                <i class="fas fa-bars" id="menu-btn"></i>
            </div>
        </div>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="content">
                <h2>Start Your Day With Premium Coffee</h2>
                <p>Experience the finest selection of artisan coffee crafted with passion and precision.</p>
                <a href="#menu" class="btn">Explore Menu</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2 class="heading">About <span>Us</span></h2>
            <div class="row">
                <div class="image">
                    <img src="tampilan_awal.jpg" alt="Barista preparing artisan coffee in a modern coffee shop setting">
                </div>
                <div class="content">
                    <h3>What Makes Our Coffee Special?</h3>
                    <p>Founded in 2010, Coffee Haven has been dedicated to bringing the finest coffee beans from around the world and roasting them to perfection. Our expert baristas combine traditional techniques with modern innovation to create unique flavors.</p>
                    <p>We source directly from ethical growers, ensuring fair trade and sustainable practices throughout our supply chain.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="container">
            <h2 class="heading">Our <span>Menu</span></h2>
            <div class="box-container">
                <div class="box">
                    <img src="exspresso.jpeg" alt="Freshly brewed espresso in a white ceramic cup">
                    <h3>Espresso</h3>
                    <p>Rich, aromatic and full-bodied coffee shot</p>
                    <span class="price">$3.50</span>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
                <div class="box">
                    <img src="capucino.jpg" alt="Cappuccino with heart-shaped latte art">
                    <h3>Cappuccino</h3>
                    <p>Espresso with steamed milk and foam</p>
                    <span class="price">$4.50</span>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
                <div class="box">
                    <img src="latte.jpg" alt="Latte in a glass cup with layered milk">
                    <h3>Latte</h3>
                    <p>Smooth espresso with velvety steamed milk</p>
                    <span class="price">$5.00</span>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="heading">Our <span>Gallery</span></h2>
            <div class="grid">
                <div class="gallery-item">
                    <img src="https://placehold.co/400x300" alt="Coffee beans being roasted in professional roaster">
                </div>
                <div class="gallery-item">
                    <img src="https://placehold.co/400x300" alt="Barista pouring milk to create latte art">
                </div>
                <div class="gallery-item">
                    <img src="https://placehold.co/400x300" alt="Cozy coffee shop interior with customers">
                </div>
                <div class="gallery-item">
                    <img src="https://placehold.co/400x300" alt="Various coffee brewing methods on display">
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2 class="heading">Contact <span>Us</span></h2>
            <div class="row">
                <div class="info">
                    <h3>Get In Touch</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Coffee Street, Beverage City</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@coffeehaven.com</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <span>+1 234 567 8900</span>
                    </div>
                </div>
                <form action="" class="form">
                    <div class="input-box">
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <textarea placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-box">
                    <h3>Quick Links</h3>
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#menu">Menu</a>
                    <a href="#gallery">Gallery</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="footer-box">
                    <h3>Opening Hours</h3>
                    <p>Monday - Friday: 7AM - 9PM</p>
                    <p>Saturday - Sunday: 8AM - 10PM</p>
                </div>
                <div class="footer-box">
                    <h3>Follow Us</h3>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="credit">
                <p>&copy; 2023 Coffee Haven. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
