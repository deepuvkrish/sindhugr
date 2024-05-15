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

    <style>
        .event {
            margin-top: 10pc;
        }

        .news-events-page--list-page {
            text-align: justify;
            text-align: center;

        }

        @media (min-width: 768px) {
            .modal-dialog {
                width: 980px;
            }
        }

        .customNavigation a {
            position: absolute;
            top: 35;
            left: 0;
            right: auto;
            padding: 30px;
            float: left;
            font-size: 3em;
            cursor: pointer;
            z-index: 1;
        }

        .customNavigation a.next {
            left: auto;
            right: 0;
        }

        @media (min-width: 320px) {
            .customNavigation a {
                top: 20%;
            }
        }

        @media (min-width: 480px) {
            .customNavigation a {
                top: 25%;
            }
        }

        @media (min-width: 768px) {
            .customNavigation a {
                top: 30%;
            }
        }

        @media (min-width: 992px) {
            .customNavigation a {
                top: 35%;
            }
        }

        #sync1 .item {
            background: #0c83e7;
            margin: 5px;
            color: #FFF;
            border-radius: 3px;
            text-align: center;
        }

        #sync2 .owl-item .item {
            background: #333;
            margin: 5px;
            color: #FFF;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
        }

        #sync2 .owl-item .item img {
            opacity: 0.5;
        }

        #sync2 .owl-item.synced .item img {
            opacity: 1;
        }

        .modal.in .modal-dialog {
            border-radius: 0px;
        }

        .modal.in .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .modal.in .modal-dialog .modal-content .modal-header {
            border-radius: 0px;
            text-align: center;
        }

        .customimage {
            width: 359px;
            height: 170px;
            object-fit: cover;
            border-radius: 10px;
        }

        .row {
            padding: 10px;
        }
    </style>
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
                    <li class="nav-item ps-5">
                        <a class="nav-link " href="home.php">Home</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="calc.php">Carbon Footprint Calculator</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link " href="edu.php">Educational Content</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="green.php">Green Shopping</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="forum.php">Community Forum</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link navbar-active" href="events.php">Events and Campaigns</a>
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





    <div class="event">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 news-events-page--list-page">
                    <img src="https://www.logicallyfacts.com/hubfs/view-green-forest-trees-with-co2.jpg" class="img-responsive customimage overlay">
                    </a>
                    <h6>
                        <p data-toggle="modal" data-target="#carouselModal">Global Growth in Emissions</p>
                    </h6>
                    <p>Despite disruptions caused by the global energy crisis, global energy-related CO2 emissions grew by 0.9% or 321 Mt in 2022, reaching a new high of over 36.8 Gt.
                        This growth was much slower than the sharp rebound observed in 2021 (over 6%) due to the Covid-19 pandemic.</p>
                </div>


                <div class="col-sm-4 news-events-page--list-page">
                    <a href="#" data-toggle="modal" data-target="#carouselModal">
                        <img src="https://media.istockphoto.com/id/1141520118/photo/ecological-catastrophy.jpg?s=612x612&w=0&k=20&c=hPbX_vmideFRGfEeOKQhusIrlmc31H2G9pPlT3yTCEw=" class="img-responsive customimage">
                    </a>
                    <h6>
                        <p data-toggle="modal" data-target="#carouselModal">Air Pollution Awareness Campaign:
                            Breathe Clean, Live Green</p>
                    </h6>
                    <p>Gain knowledge about air pollution’s impact on health and ecosystems.
                        Connect with like-minded individuals and organization. Be part of a collective effort to create a cleaner, healthier future.Registration: Visit our website to register and receive event updates.
                        Let’s breathe clean, live green, and protect our planet together! 🌿🌎 </p>
                </div>
                <div class="col-sm-4 news-events-page--list-page">
                    <a href="#" data-toggle="modal" data-target="#carouselModal">
                        <img src="https://housing.com/news/wp-content/uploads/2023/03/shutterstock_2008709621-1200x700-compressed.jpg" class="img-responsive customimage">
                    </a>
                    <h6><a data-toggle="modal" data-target="#carouselModal">Water Pollution Awareness Campaign: Safeguarding Our Blue Planet</a></h6>
                    <p>Join us in our mission to protect our precious water resources! The Water Pollution Awareness Campaign aims to educate, engage, and empower individuals and communities to take action against water pollution. Together, let’s create ripples of change and ensure clean water for generations to come! 💧🌊</p>
                </div>

                <div class="col-sm-4 news-events-page--list-page">
                    <img src="https://as2.ftcdn.net/v2/jpg/02/71/75/59/1000_F_271755921_rxz22woHX5UtWryKTYpGVfVaO2VGkWYS.jpg" class="img-responsive customimage overlay">
                    </a>
                    <h6><a data-toggle="modal" data-target="#carouselModal">Stuffed with stuffs</a></h6>
                    <p>Items shipped to your home often come wrapped in plastic packaging; toys bought at the store are covered in it. Think about what can be bought secondhand, what can be shared, and what doesn’t need to be purchased at all.</p>
                </div>
                <div class="col-sm-4 news-events-page--list-page">
                    <img src="https://sb.ecobnb.net/app/uploads/sites/3/2020/12/cycling-is-healthy.jpg" class="img-responsive customimage overlay">
                    </a>
                    <h6><a data-toggle="modal" data-target="#carouselModal">Walk it out</a></h6>
                    <p>Walk or bike as much as you can. Biking or walking just one mile a day for a year could save 330 pounds of carbon dioxide—that’s the same as planting four trees and letting them grow for 10 years!Together, let’s create a breath of fresh air. Join us with events</p>
                </div>
                <div class="col-sm-4 news-events-page--list-page">
                    <img src="https://europlas.com.vn/Data/Sites/1/News/5368/how-to-recycle-plastic-bottles-(2).jpg" class="img-responsive customimage overlay">
                    </a>
                    <h6><a data-toggle="modal" data-target="#carouselModal">Recycle Plastic</a></h6>
                    <p>According to one study, over eight million tons of plastic pollution end up in the ocean each year. Drink from a refillable water bottle, place your sandwich in cloth or a reusable container, and use bar soap instead of bottled.</p>
                </div>
            </div>
        </div>


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