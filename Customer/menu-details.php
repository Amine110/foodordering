<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Menu Details ||  Aahar Food Delivery Html5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/foody.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                            <nav class="main__menu__nav d-none d-lg-block">
                                            <ul class="mainmenu">
                                                <li class="drop"><a href="index.html">Home</a></li>
                                                <li><a href="menu-list.php">Menu</a></li>
                                                <li><a href="about-us.html">About</a></li>
                                            </ul>
                                    </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Menu Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Menu Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Blog List View Area -->
        <section class="blog__list__view section-padding--lg menudetails-right-sidebar bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="food__menu__container">
                            <div class="food__menu__inner d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                                <div class="food__menu__thumb">
                                <?php
                                include 'classes/product.class.php';
                                $product =new product;
                                $products =$product->readOneProduct($_GET["id"]);
                                $data=$products->fetch();
                                echo'
                                    <img src="images/menu-list/'.$data['file'].'" alt="images">
                                </div>
                                <div class="food__menu__details">
                                    <div class="food__menu__content">
                                        <h2>'.$data['name'].'</h2>
                                        <ul class="food__dtl__prize d-flex">
                                            <li>'.$data['price'].'DTN</li>
                                        </ul>
                                        <p>'.$data['description'].'</p>
                                        <div class="product-action-wrap">
                                            <div class="prodict-statas"><span>Food Type : '.$data['type'].'</span></div>
                                            <div class="product-quantity">
                                                <form method="POST" action="addcart.php">
                                                    <div class="product-quantity">
                                                    <input type="number" name="pid" id="pid" value="'.$data['pid'].'" hidden>
                                                        <div class="cart-plus-minus">
                                                            <input  type="number" name="qty" id="qty" value="1">
                                                            <div class="add__to__cart__btn">
                                                            <button type="submit" class="food__btn">Add To Cart</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog List View Area -->
        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Aahar</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p>Lorem ipsum dolor sit amconsectetur adipisicing elit,</p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>Elizabeth Tower. 6th Floor Medtown, New York</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">+088 01673-453290</a></p>
                                                    <p><a href="#">+088 01773-458290</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">Aahardelivery@email.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2>
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                        <li><a href="#"><img src="images/gallery/sm-img/1.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/2.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/3.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/4.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/5.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/6.jpg" alt="gallery images"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        <li>Saturday<span>.......</span>9am to 11pm</li>
                                        <li>Sunday<span>.......</span>9am to 11pm</li>
                                        <li>Monday<span>.......</span>9am to 11pm</li>
                                        <li>Tuesday<span>.......</span>9am to 11pm</li>
                                        <li>Wednesday<span>.......</span>9am to 11pm</li>
                                        <li>Thursday<span>.......</span>9am to 11pm</li>
                                        <li>Friday<span>.......</span>9am to 11pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Latest Post</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/1.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Chicken Shawarma </a></h6>
                                                <p>Lordo loram consecte turadip isicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/2.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Fruits Desert</a></h6>
                                                <p>Lordo loramcon secte turadipi sicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/3.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Vanilla Pastry</a></h6>
                                                <p>Lordo loramcon secte turadip isicing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved.<a href="https://devitems.com">Devitems</a></p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                        <img src="images/icon/shape/2.png" alt="payment images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name or email">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" placeholder="Email address">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Confirm password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
            <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->   
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>
</html>
