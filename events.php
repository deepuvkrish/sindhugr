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
    <link rel="stylesheet" type="text/css" href="attributes/css/event.css">

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
                        <a class="nav-link" href="green.php">Green Shopping</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link" href="forum.php">Community Forum</a>
                    </li>
                    <li class="nav-item ps-3">
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
        <div class="content video-gallery-edu">
            <div class="section-header">
                <div class="section-heading">
                    <h4 class="poppins-semibold">Events <em>and </em> Campaigns </h4>
                </div>
            </div>

            <div class="video-gallery">
                <div class="gallery-item">
                    <img src="https://ddnews.gov.in/wp-content/uploads/2024/04/2102b797-58e4-4771-b520-0814f6973aab.jpeg" alt="Recycle Plastic" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>World Earth Day 2024</h2>
                        <p>EARTHDAY.ORG (EDO) is focused on accelerating solutions to combat plastic pollution by activating governments, citizens, and businesses to do their part– everyone accounted for, everyone accountable.</p>
                        <!--</div>-->
                        <a class="vimeo-popup" target="_blank" href="https://www.earthday.org/campaign/cleanup/#map"></a>
                    </div>
                </div>

                <div class="gallery-item ">
                    <img src="https://miro.medium.com/v2/resize:fit:626/0*x8A4BLPfImlj69H9.jpg" alt="CO2 Emmision" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>World Wetlands Day</h2>
                        <p>World Wetlands Day is celebrated every year on 2 February. This day marks the date of the adoption of the Convention on Wetlands on 2 February 1971, in the Iranian city of Ramsar on the shores of the Caspian Sea.</p>
                        <!--</div>-->
                        <a class="vimeo-popup" target="_blank" href="https://www.ramsar.org/our-work/activities/world-wetlands-day"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://media.assettype.com/freepressjournal/2024-05/1870a07a-a652-4a17-9b3c-f79532379c75/Untitled_design___2024_05_15T212632_531.jpg" alt="Air Pollution Awareness Campaign:
                    Breathe Clean, Live Green" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>'Plastic-Free Sahyadri' Initiative To Clean Up Malshej Ghat</h2>
                        <p>With an aim to create awareness amongst tourists and travellers to protect nature from pollution so that wildlife live trash free a ‘Plastic Sahyadri’ campaign at the Malshej Ghat has been launched.🌿🌎</p>
                        <!--</div>-->
                        <a class="vimeo-popup" href="https://timesofindia.indiatimes.com/city/navi-mumbai/greens-launch-campaign-to-make-sahyadri-plastic-free/articleshow/110219887.cms"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://wwfin.awsassets.panda.org/img/dscn3614_60568.jpg" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>A Beach clean-up like no other in Mumbai</h2>
                        <p>As the world celebrated Earth Day on April 22 – volunteer groups joined forces to clean several beaches in the city. Resonating with the theme for this year, “Invest in our Planet”, thousands of Mumbaikars participated in giving a new lease of life to Mumbai’s choked beaches dotted with domestic waste, plastics, and pollutants.💧🌊</p>
                        <!--</div>-->
                        <a class="vimeo-popup" target="_blank" href="https://www.wwfindia.org/news_facts/feature_stories/a_beach_clean_up_like_no_other_in_mumbai/"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://cdn.unenvironment.org/styles/article_billboard_image/s3/2022-03/51913923286_e1698e50e0_c.jpg?h=87a4b108&itok=pPPOUD78" alt="International Conference on Pollution Control & Sustainable Environment" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>International Conference on Pollution Control & Sustainable Environment</h2>
                        <p>International Conference on Pollution Control & Sustainable Environment ICPCSE-24 is a globally recognized, highly appreciated platform globally with the richness of abundance. To be held on 8th June 2024 at Coimbatore, this event is sure to repeat its history again.</p>
                        <!--</div>-->
                        <a class="vimeo-popup" target="_blank" href="https://www.sfe.net.in/conf/index.php?id=2479506"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://www.netsolwater.com/netsol-water/assets/img/product-images/Waste_management_in_India.jpg" alt="Walk it out" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>International Conference on Recycling and Waste Management (ICRWM-24)</h2>
                        <p>ICRWM organizing committee with great honor extending you a warm invitation to attend the International Conference on Recycling and Waste Management which is slated to held in 1st June'2024 in Coimbatore, India. </p>
                        <!--</div>-->
                        <a class="vimeo-popup" target="_blank" href="https://nier.in//conf/index.php?id=2479852"></a>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://resize.indiatvnews.com/en/centered/newbucket/1200_675/2021/06/world-environment-day-1622817142.jpg" alt="Recycle Plastic" />
                    <div class="gallery-item-caption">
                        <!--<div>-->
                        <h2>world environment day</h2>
                        <p>Creating environment awareness among local citizens regaring using environment friendly products, disposing of e-waste and batteries in safe ways.</p>
                        <!--</div>-->
                        <a class="vimeo-popup" target="_blank" href="https://www.worldenvironmentday.global/"></a>
                    </div>
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