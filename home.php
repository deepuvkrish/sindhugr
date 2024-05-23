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
                        <a class="nav-link navbar-active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="calc.php">Carbon Footprint Calculator</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="edu.php">Educational Content</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="green.php">Green Shopping</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="forum.php">Community Forum</a>
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



    <!-- Page info section -->
    <section class="page-info-section set-bg" data-setbg="attributes/images/bck.gif">
        <div class="page-info-section2">
            <div class="pi-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-6 text-white">
                            <h2 class="poppins-bold carousel-title">Pro Planet Person </h2>
                            <div class="col-xl-7 col-lg-6 text-white">
                                <p class="about-carousel">“For in the true nature of things, if we rightly consider, every green tree is far more glorious than if it were made of gold and silver.” </p>
                                <p class="author">—Martin Luther King Jr..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <rssapp-ticker id="twatYDeumtjuUZ6v"></rssapp-ticker>
        <script src="https://widget.rss.app/v1/ticker.js" type="text/javascript" async></script>
    </section>
    <!-- Page info section -->



    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>About <em>What We Do</em> &amp; Who We Are</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Pro Planet Person is a website dedicated to helping people live more sustainable lives. We provide tips and resources for reducing waste, conserving energy, and making environmentally-friendly choices.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item announce-box">
                                <h4><a href="events.php">Check our Events</a></h4>
                                <p>A little change makes a whole lot</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item support-box">
                                <h4><a href="forum.php">24/7 Support &amp; Help</a></h4>
                                <p>Tips and Resources are provided for sustainable living movement</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item shop-box">
                                <h4><a href="green.php">Go Green</a></h4>
                                <p>Shop for best Sustainable products</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="box-item email-box">
                                <h4><a href="https://groups.google.com/u/1/g/pro-planet-updates">Sign Up for Tips</a></h4>
                                <p>Sign up for our newsletter to stay informed.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>We give importance to sustainable development, approach to social, economic, and environmental planning that attempts to balance the social and economic needs of present and future human generations with the imperative of preserving, or preventing undue damage to, the natural environment.</p>
                            <div class="gradient-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="attributes/images/green-planet.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main style="display: flex; justify-content: space-around; padding: 2rem;">


        <section style="background-color: #f8f9fa; flex: 1; padding: 2rem;">
            <h2 style="color: #4CAF50;margin-left: 33px;">Latest Articles</h2>
            <!-- RSS NEWS FEED GENERATOR -->
            <rssapp-list id="tcPD5zisG8PUvwSz"></rssapp-list>
            <script src="https://widget.rss.app/v1/list.js" type="text/javascript" async></script>
        </section>
        <section style="background-color: #f8f9fa; flex: 1; padding: 2rem;">
            <h2 style="color: #4CAF50;margin-left: 33px;">Top Trending</h2>
            <rssapp-imageboard id="tZpEbrgg83e6Unyo"></rssapp-imageboard>
            <script src="https://widget.rss.app/v1/imageboard.js" type="text/javascript" async></script>
        </section>



    </main>




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