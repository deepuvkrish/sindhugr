<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html>

<head>
    <title> Pro Planet Person</title>
    <link rel="stylesheet" type="text/css" href="attributes/css/home.css">
    <link rel="stylesheet" type="text/css" href="attributes/css/green.css">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/77a003771d.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="attributes/css/animate.min.css" rel="stylesheet">
    <link href="attributes/css/owl.carousel.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm p-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand nav-logo-branding " href="home.php">
                <span class="righteous-regular logo-title-nav">Terra</span>
                <span class="righteous-regular logo-title-nav-lower"> Infini</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item ps-3">
                        <a class="nav-link " href="home.php">Home</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="calc.php">Carbon Footprint Calculator</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link " href="edu.php">Educational Content</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link navbar-active" href="green.php">Green Shopping</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link " href="forum.php">Community Forum</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="events.php">Events and Campaigns</a>
                    </li>
                </ul>
                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <i class="fa-solid fa-circle-user fa-2xl" style="color: #368304;"></i>
                    </div>
                    <div class="menu">
                        <h3 class="user-name"><?php echo htmlspecialchars($_SESSION["username"]); ?><br /><span></span></h3>
                        <ul class="dropdown-menu-user poppins-regular">
                            <li>
                                <i class="fa-solid fa-bell fa-sm" style="color: #000;"></i><a href="#">Notification</a>
                            </li>
                            <li><i class="fa-solid fa-gear fa-sm" style="color: #000;"></i><a href="reset-password.php">Reset Password</a></li>
                            <li style="border-bottom:1px solid #5753535c;">
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <i class="fa-solid fa-right-from-bracket fa-sm" style="color: #000;"></i><a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
    </nav>



    <div class="green-section">


        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> hello@proplanetperson.com</li>
                                    <li>Free Shipping for all Order of 100₹</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./shop-grid.html">Shop</a></li>
                                <li><a href="./blog.html">Blog</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./shop-details.html">Shop Details</a></li>
                                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                        <li><a href="./checkout.html">Check Out</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            </ul>
                            <div class="header__cart__price">item: <span>₹150.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->



        <!-- Hero Section Begin -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>All departments</span>
                            </div>
                            <ul>
                                <li><a href="#">Body Care</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Eat & Drinks</a></li>
                                <li><a href="#">Home & Living</a></li>
                                <li><a href="#">Office Accessories</a></li>
                                <li><a href="#">Clothes</a></li>
                                <li><a href="#">Gifts</a></li>
                                <li><a href="#">Offer Sale</a></li>
                                <li><a href="#">Plants</a></li>
                                <li><a href="#">Bulk Request</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        All Categories
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="What do yo u need?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+91 123 456 789</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero__item set_bg banner1">
                            <div class="hero__text">
                                <span>SUSTAINABLE ACCESSORIES</span>
                                <h2>OFFICE <br />100% Plastic Free</h2>
                                <p>Free Pickup and Delivery Available</p>
                                <a href="#" class="primary-btn">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->


        <!-- Categories Section Begin -->
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-8">
                            <div class="categories__item set_bg cate1">
                                <h5><a href="#">Fresh Fruits</a></h5>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="categories__item set_bg cate2">
                                <h5><a href="#">Cotton Clothes</a></h5>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="categories__item set_bg cate3">
                                <h5><a href="#">Herbal Cosmetics</a></h5>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="categories__item set_bg cate4">
                                <h5><a href="#">Plants</a></h5>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="categories__item set_bg cate5">
                                <h5><a href="#">Recycled Gifts</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->


        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Featured Product</h2>
                        </div>
                        <div class="featured__controls">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".oranges">Care</li>
                                <li data-filter=".fresh-meat">Home</li>
                                <li data-filter=".vegetables">Work</li>
                                <li data-filter=".fastfood">Gifts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature1">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cleansing Oil</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature2">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cotton Curtains</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature3">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Pro Planet Item</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature4">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Pro Planet Item</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature5">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Pro Planet Item</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature6">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Organic Mandya</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature7">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Eminance Cleansing Oil</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set_bg feature8">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Pro Planet Item</a></h6>
                                <h5>₹30.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Section End -->


        <!-- Banner Begin -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="img/banner/banner-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="img/banner/banner-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->


        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://www.handmakers.in/cdn/shop/products/IMG_8452-Copy.jpg?v=1654412723" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://www.albertpaperproducts.com/wp-content/uploads/2021/05/GettyImages-1225818659.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://dotmom.in/cdn/shop/products/dotmom-newborn-baby-cloth-gift-set-23-pcs-organic-cotton-cloth-set-21360155558046.jpg?v=1650853927" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://birlahealthcare.com/wp-content/uploads/2022/02/Importance-of-Green-Vegetables.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://api2.kemenparekraf.go.id/storage/app/uploads/public/65f/cf4/7a5/65fcf47a59cc4457672417.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://nurserylive.com/cdn/shop/products/nurserylive-combo-packs-plants-popular-outdoor-plants-for-gardening-on-terrace-16969219211404.jpg?v=1634226628" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Top Rated Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://www.jangirdecor.in/cdn/shop/files/image_65a89f27-76d5-40af-aa4a-03a5171b23fa.png?v=1696767416&width=1445" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/9/WX/RL/CC/25362378/herbal-products-third-party-manufacturers.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://www.addveda.com/admin/pro_images/5f9719bbe4198tulsi.jpg" alt="">
                                        </div>
                                        <div class=" latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://cdn.dotpe.in/longtail/store-items/1020247/FgLxATWc.jpeg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://travelsleek.in/cdn/shop/files/WoodenDiary.jpg?v=1697872456" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://images-cdn.ubuy.co.in/634e3a4940250f6f1e2fdbd2-set-of-2-handmade-wooden-business-pens.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Review Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://thoppia.com/wp-content/uploads/2021/12/mosaic-print-cotton-bedsheet-black-online.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://www.cleanipedia.com/images/2lmwybzp5rca/22lCuLYf6DlDfkIXyCPp1M/83d087dccf86fe65c6f2216ba37e7b0b/ZG9lcy1jb3R0b24tc2hyaW5rLmpwZw/990w-660h/three-cotton-t-shirts-hanging-up-on-a-clothes-rail-with-an-orange-background.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://assets.winni.in/c_limit,dpr_1,fl_progressive,q_80,w_1000/48811_lucky-plant-gift-for-best-mom.jpeg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://www.vahdam.in/cdn/shop/files/GingerChocolate1.jpg?v=1686925133" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://m.media-amazon.com/images/I/41DePy0h4ML._AC_UF1000,1000_QL80_DpWeblab_.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="https://d3cif2hu95s88v.cloudfront.net/blog/wp-content/uploads/2021/05/04150624/Spider-plant.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Pro Planet Item</h6>
                                            <span>₹30.00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Product Section End -->


        <!-- Blog Section Begin -->
        <!-- <section class="from-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title from-blog__title">
                            <h2>From The Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Visit the clean farm in the US</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Blog Section End -->

    </div>




















    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <footer style="background-color: #4CAF50; color: white; text-align: center; padding: 1rem;">
        <p style="margin: 10;">&copy; 2024 Pro Planet Person</p>
    </footer>






    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="attributes/js/easing.min.js"></script>
    <script src="attributes/js/waypoints.min.js"></script>
    <script src="attributes/js/owl.carousel.min.js"></script>
    <script src="attributes/js/jquery-3.3.1.min.js"></script>
    <script src="attributes/js/bootstrap.min.js"></script>
    <script src="attributes/js/jquery.nice-select.min.js"></script>
    <script src="attributes/js/jquery-ui.min.js"></script>
    <script src="attributes/js/jquery.slicknav.js"></script>
    <script src="attributes/js/mixitup.min.js"></script>
    <script src="attributes/js/owl.carousel.min.js"></script>
    <script src="attributes/js/main.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle("active");
        }
    </script>
</body>



<script>
    document.getElementById('pageSelect').addEventListener('change', function() {
        window.location.href = this.value;
    });
</script>

</html>