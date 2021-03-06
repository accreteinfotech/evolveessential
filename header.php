   <header class="header-area">

        <div class="header-navbar header-navbar-white">
            <div class="container-fluid custom-container">
                <div class="header-wrapper d-flex justify-content-between align-items-center">

                    <div class="header-logo">
                        <a href="index.php">
                            <img src="assets/images/logo-white.png" alt="Logo">
                        </a>
                    </div>

                    <div class="header-menu site-nav d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="<?php if ($current_page=="home") {echo "active"; }?>">
                                <a href="index.php">Home</a>
                            </li>
							<li class="<?php if ($current_page=="about") {echo "active"; }?>"><a href="about.php">About us</a></li>
							<li class="<?php if ($current_page=="product") {echo "active"; }?>"><a href="product.php">Products</a></li>
							<li class="<?php if ($current_page=="how_it_works") {echo "active"; }?>"><a href="how-it-works.php">How It Works</a></li>
							<li class="<?php if ($current_page=="why_evolve") {echo "active"; }?>"><a href="why-evolve.php">Why Evolve</a></li>
							<li class="<?php if ($current_page=="blogs") {echo "active"; }?>"><a href="blogs.php">Blogs</a></li>
							<li class="<?php if ($current_page=="contact_us") {echo "active"; }?>"><a href="contact-us.php">Contact Us</a></li>
                           
                           <!-- <li>
                                <a href="#">Page</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">About Us <i class="fal fa-chevron-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-01.html">About US 01</a></li>
                                            <li><a href="about-02.html">About US 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="our-services.html">Our Service</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li> -->
                          
                        </ul>
                    </div>

                    <div class="header-meta">
                        <ul class="meta">
						 <li><a class="cart-toggle" href="login.php"><i class="far fa-user"></i></a></li>
                            <li><a class="cart-toggle" href="javascript:void(0)"><i class="far fa-Shopping-cart"></i><span>1</span></a></li>
                            <li><a class="sidebar-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div id="dl-menu" class="dl-menuwrapper d-lg-none">
                <button class="dl-trigger"></button>
                
                <ul class="dl-menu">
                    
                          <li class="static active">
                                <a href="index.php">Home</a>
                            </li>
						    <li><a href="about.php">About us</a></li>
							<li><a href="product.php">Products</a></li>
							<li><a href="how-it-works.php">How It Works</a></li>
							<li><a href="why-evolve.php">Why Evolve</a></li>
							<li><a href="blogs.php">Blogs</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
                           
                           <!-- <li>
                                <a href="#">Page</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">About Us <i class="fal fa-chevron-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-01.html">About US 01</a></li>
                                            <li><a href="about-02.html">About US 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="our-services.html">Our Service</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li> -->
                          
                       
                </ul>
            </div>
        </div>

    </header>
	 <!--====== Off Canvas Sidebar Start ======-->

    <div class="off-canvas-sidebar">
        <div class="off-canvas-sidebar-wrapper">
            <a class="sidebar-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
            <div class="off-canvas-sidebar-box">
                <a class="logo" href="index.php">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </a>
                <p class="text">Curabitur placerat urna augue, id luctus sem imperdiet id. Nunc congue ac libero ut lacinia. In ultrices elementum ipsum, in tempus enim accumsan..</p>
                <ul class="sidebar-social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <div class="sidebar-image">
                    <img src="assets/images/aside-image.jpg" alt="">
                </div>
                <ul class="sidebar-info">
                    <li>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <p><a href="tel:61292515600">+612 9251 5600</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <p><a href="mailto://info@hasthemes.com">info@hasthemes.com</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <p class="copyright">&copy; Copyright 2020  All Right Reserved. <br/> Developed By<a href="#">Accrete InfoTech</a></p>
            </div>
        </div>
    </div>

    <!--====== Off Canvas Sidebar Ends ======-->

    <!--====== Search Start ======-->

   

    <!--====== Search Ends ======-->

    <!--====== Off Canvas Cart Start ======-->

    <div class="off-canvas-cart-wrapper">
        <div class="off-canvas-cart-box">
            <a href="javascript:void(0)" class="cart-close"><i class="fal fa-times"></i></a>
            <div class="off-canvas-cart-content">
                <div class="cart-title">
                    <h5 class="title">Shopping Cart</h5>
                </div>
                <div class="cart-product-widget">
                    <ul>
                        <li>
                            <div class="cart-product d-flex">
                                <div class="cart-product-image">
                                    <a href="product.php"><img src="assets/images/cart/product-1.jpg" alt="product"></a>
                                </div>
                                <div class="cart-product-content media-body">
                                    <h6 class="title"><a href="product.php">Sanitary Pad</a></h6>
                                    <span class="price">1x <span>INR 249.00</span></span>
                                </div>
                                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
                            </div>
                        </li>
                       
                      
                    </ul>   
                    <div class="cart-product-total">
                        <p class="value">Subtotal</p>
                        <p class="price">INR 249.00</p>
                    </div>           
                    <div class="cart-product-btn">
                        <a href="cart.php" class="main-btn btn-block">View cart</a>
                        <a href="checkout.php" class="main-btn btn-block">Checkout</a>
                    </div>           
                </div>
            </div>
        </div>
    </div>

    <!--====== Off Canvas Cart Ends ======-->