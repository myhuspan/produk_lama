<HTML>
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <TITLE>Produk Lama</TITLE>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="marketing eCommerce shop">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/fv_icon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    
    
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/produk.min.css">
</HEAD>

<BODY class="home">
    
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    
    <div class="page-wrapper">
        <h1 class="d-none">Huspan - eCommerce HTML Template</h1>
        
        <header class="header">
            
            <div class="header-middle sticky-header fix-top sticky-content">
                
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="home" class="logo mr-4">
                            <img src="images/logo_j.png" alt="logo" width="163" height="39" />
                        </a>
                    </div>
                    <div class="header-center">
                        <a href="home" class="logo">
                            <img src="images/logo_j.png" alt="logo" width="163" height="39" />
                        </a>
                        <!-- End Logo -->
                        <div class="header-search hs-expanded">
                            <form action="#" method="get" class="input-wrapper">
                                <div class="select-box">
                                    <select id="category" name="category">
                                        <option value="">Semua Kategori</option>
                                        <option value="4">Kategori 1</option>
                                        <option value="12">- Pilihan 1</option>
                                        <option value="5">Kategori 2</option>
                                        <option value="21">- Pilihan 1</option>
                                        <option value="22">- Pilihan 2</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="Pencarian..." required="">
                                <button class="btn btn-sm btn-search" type="submit"><i
                                        class="d-icon-search"></i></button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                    </div>
                    
                    <div class="header-right">
                        <a class="login" href="ajax/login.html">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
                        <!-- End Login -->
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name">My Cart</span>
                                    <span class="cart-price">Rp. 250,000</span>
                                </span>
                                <i class="minicart-icon">
                                    <span class="cart-count">2</span>
                                </i>
                            </a>
                            
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="product product-cart-header">
                                    <span class="product-cart-counts">2 items</span>
                                    <span><a href="cart.html">View cart</a></span>
                                </div>
                                <div class="products scrollable">
                                    
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Nama Produk Yang Dipilih 1</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">Rp. 150,000</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="images/cart/sm_produk1.jpg" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
                                    
                                    <!-- End of Cart Product -->
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Nama Produk Yang Dipilih 2</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">Rp. 100,000</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="images/cart/sm_produk2.jpg" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
                                    <!-- End of Cart Product -->
                                </div>
                                
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">Rp. 250,000</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                            
                            
                        </div>
                        
                    </div>
                </div>

                
            </div>
            
            
            <?PHP
                include "header_bottom.php";
            ?>
            
            
        </header>
        
        
        <main class="main">
            <?PHP
            include "home.php";
            ?>
        </main>
        
        <footer class="footer">
            
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            
            <!-- End FooterMiddle -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-left">
                        <figure class="payment">
                            <!--<img src="images/payment.png" alt="payment" width="159" height="29" />-->
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">&copy; 2021. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
            
        </footer>
        
        
    </div>
    
    
    
    
    
    
    
    
    
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>

    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo20.html" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="demo20-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
    </div>
    
    
    
    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        
        <div class="mobile-menu-container scrollable">
            
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            
            <ul class="mobile-menu mmenu-anim">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#kategori">Kategori</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="#">Varian Kategori 1</a></li>
                                <li><a href="#">Varian Kategori 1
                                    <span class="tip tip-hot">Hot</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>
                                <li><a href="#">Varian Kategori 2
                                    <span class="tip tip-new">New</span></a></li>
                                <li><a href="#">Varian Kategori 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">About US</a></li>
            </ul>
            <!-- End MobileMenu -->
            
        </div>
        
    </div>
    

    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/parallax/parallax.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.js"></script>


    
</BODY>


</HTML>