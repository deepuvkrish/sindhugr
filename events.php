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

    <!-- Libraries Stylesheet -->
    <link href="attributes/css/animate.min.css" rel="stylesheet">
    <!-- <link href="attributes/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="attributes/css/owl.carousel.min.css" rel="stylesheet">

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


            <!-- Main Post Section Start -->
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="row g-4">
                        <div class="col-lg-7 col-xl-8 mt-0">
                            <div class="position-relative overflow-hidden rounded">
                                <img src="https://apnipathshala.com/wp-content/uploads/2024/04/Picture-1-8.png" class="img-fluid rounded img-zoomin w-100" alt="">
                                <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</a>
                                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                    <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <a href="https://www.earthday.org/earth-day-2024/" target="_blank" class="display-4 text-dark mb-0 link-hover">Happy Earth Day 2024</a>
                            </div>
                            <p class="mt-3 mb-4">EARTHDAY.ORG (EDO) is focused on accelerating solutions to combat plastic pollution by activating governments, citizens, and businesses to do their part– everyone accounted for, everyone accountable </p>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="bg-light rounded p-4 pt-0">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="rounded overflow-hidden">
                                            <img src="https://resize.indiatvnews.com/en/centered/newbucket/1200_675/2021/06/world-environment-day-1622817142.jpg" alt="Recycle Plastic" class="img-fluid rounded img-zoomin w-100" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-column news-links-latest">
                                            <a href="https://www.worldenvironmentday.global/" target="_blank" class="h4 mb-2">World Environment Day</a>
                                            <div class="news-icons">
                                                <p class="mb-0 news-icon-p"><i class="fa-solid fa-calendar-days"></i>June 5 </p>
                                                <p class="mb-0 news-icon-p"><i class="fa-solid fa-eye"></i>25 Views</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-5">
                                                <div class="overflow-hidden rounded">
                                                    <img src="https://bowralcoop.com.au/wp-content/uploads/2024/02/soil-fertility.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="features-content d-flex flex-column news-links-latest">
                                                    <a href="https://www.sfe.net.in/conf/index.php?id=2479108" target="_blank" class="h6">International Conference on Plant & Soil Science</a>
                                                    <div class="news-icons">
                                                        <p class="mb-0 news-icon-p"><i class="fa-solid fa-calendar-days"></i>May 25 </p>
                                                        <p class="mb-0 news-icon-p"><i class="fa-solid fa-eye"></i>5 Views</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-5">
                                                <div class="overflow-hidden rounded">
                                                    <img src="https://i0.wp.com/stanzaliving.wpcomstaging.com/wp-content/uploads/2022/04/a34bb-places-to-visit-in-visakhapatnam.jpg?fit=1000%2C662&ssl=1" class="img-zoomin img-fluid rounded w-100" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="features-content d-flex flex-column news-links-latest">
                                                    <a href="https://www.sfe.net.in/conf/index.php?id=2479500" target="_blank" class="h6">International Conference on Ecology IC-E-24</a>
                                                    <div class="news-icons">
                                                        <p class="mb-0 news-icon-p"><i class="fa-solid fa-calendar-days"></i>June 1 </p>
                                                        <p class="mb-0 news-icon-p"><i class="fa-solid fa-eye"></i>29 Views</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-5">
                                                <div class="overflow-hidden rounded">
                                                    <img src="https://deih43ym53wif.cloudfront.net/shimla-india-shutterstock_401682040_782e317f1f.jpeg" class="img-zoomin img-fluid rounded w-100" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="features-content d-flex flex-column news-links-latest">
                                                    <a href="https://www.sfe.net.in/conf/index.php?id=2629260" target="_blank" class="h6">International Conference on Environment and Life Science</a>
                                                    <div class="news-icons">
                                                        <p class="mb-0 news-icon-p"><i class="fa-solid fa-calendar-days"></i>JuLY 14 </p>
                                                        <p class="mb-0 news-icon-p"><i class="fa-solid fa-eye"></i>35 Views</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Post Section End -->








            <div class="section-header-white">
                <div class="section-heading">
                    <h4 class="poppins-semibold">Camp<em>ai</em>gns </h4>
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




            <div class="section-header-white">
                <div class="section-heading">
                    <h4 class="poppins-semibold">Important<em> Events</em> </h4>
                </div>
            </div>
            <div class="events-months">
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> April</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://t4.ftcdn.net/jpg/05/70/19/31/360_F_570193139_qjwVpWasr9VSUS4ZASIpIdVB5CFels64.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">22</span>
                                    <span class="monthofevent">April</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">Earth Day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/271/986/465/nature-plants-macro-depth-of-field-wallpaper-preview.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">26</span>
                                    <span class="monthofevent">April</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">Arbor Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> May</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://curiouscraig.net/wp-content/uploads/Texas/Great-Egret.jpeg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">11</span>
                                    <span class="monthofevent">May</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">WORLD MIGRATORY BIRD DAY (SPRING)</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://t4.ftcdn.net/jpg/07/72/92/19/360_F_772921961_iaIGfUeP7vFY9VMPD8ZYgIaOEuijQ4yj.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">17</span>
                                    <span class="monthofevent">May</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">Endangered species Day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://www.hdwallpapers.in/download/bee_is_hovering_in_light_purple_blur_background_hd_bee-2560x1440.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">20</span>
                                    <span class="monthofevent">May</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World BEE Day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://static.vecteezy.com/system/resources/previews/029/629/072/large_2x/studio-shot-of-various-fruits-and-vegetables-isolated-on-black-background-top-view-high-resolution-products-free-photo.jpeg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">22</span>
                                    <span class="monthofevent">May</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">INTERNATIONAL DAY FOR BIOLOGICAL DIVERSITY</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> June</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://t4.ftcdn.net/jpg/06/66/09/79/360_F_666097959_lbuhsuU5rqomJarRBNnm4y7ikOiBG5BO.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">05</span>
                                    <span class="monthofevent">June</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World Environment Day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://img.freepik.com/premium-photo/banner-menu-page-kitchen-board-with-vegetable_1029679-26733.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">07</span>
                                    <span class="monthofevent">June</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World Food Safety Day</h5>
                            </div>
                        </div>

                        <div class="montheventwise" style="background-image: url('https://w.forfun.com/fetch/48/483c98a42be59a966479e822e86925e3.jpeg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">08</span>
                                    <span class="monthofevent">June</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World Ocean Day</h5>
                            </div>
                        </div>

                        <div class="montheventwise" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/759/681/241/desert-4k-hd-download-widescreen-wallpaper-thumb.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">17</span>
                                    <span class="monthofevent">June</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">WORLD DAY TO COMBAT DESERTIFICATION AND DROUGHT</h5>
                            </div>
                        </div>




                        <div class="montheventwise" style="background-image: url('https://i.redd.it/jungle-backgrounds-1920x1080-v0-feg83dhzwdh91.png?width=1920&format=png&auto=webp&s=2122d32dfb152ae39596bcf30525c103d7072c3f');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">22</span>
                                    <span class="monthofevent">June</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">WORLD RAINFOREST DAY</h5>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="monthwise">
                    <div class="monthname poppins-semibold"> July</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://www.britannica.com/explore/savingearth/wp-content/uploads/sites/4/2019/03/population-hero-1.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">11</span>
                                    <span class="monthofevent">July</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World Population Day</h5>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> September</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://i.pinimg.com/originals/f3/00/f7/f300f743f0db79db1f18860615832c03.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">16</span>
                                    <span class="monthofevent">Sept</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World Ozone Day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://www.violinschool.com/wp-content/uploads/2020/09/Amazing-Grace-Dove-1920-x-1080.png');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">21</span>
                                    <span class="monthofevent">Sept</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">International Day of peace </h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://images.squarespace-cdn.com/content/v1/54ac9e94e4b0c9d38e248bf6/1569205163203-391L6J3NESJJS0IPDOWT/rainforest');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">22</span>
                                    <span class="monthofevent">Sept</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World River Day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://wallpapercave.com/wp/wp2864829.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">22</span>
                                    <span class="monthofevent">Sept</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World Car Free Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> October</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://swall.teahub.io/photos/small/106-1065059_4-wallpapers-country-side.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">2</span>
                                    <span class="monthofevent">Oct</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World ENERGY EFFICIENCY DAY</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> December</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://wallpaperswide.com/download/mountain_lake_scenery_2-wallpaper-2560x1024.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">11</span>
                                    <span class="monthofevent">Dec</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">INTERNATIONAL MOUNTAIN DAY</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> January</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://www.hussle.com/blog/wp-content/uploads/2020/07/Running-bug-1-1080x675.png');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">28</span>
                                    <span class="monthofevent">Jan</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">World ZERO EMISSIONS DAY</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="monthwise">
                    <div class="monthname poppins-semibold"> March</div>
                    <div class="monthevents">
                        <div class="montheventwise" style="background-image: url('https://t3.ftcdn.net/jpg/07/11/77/28/360_F_711772818_fWLmwTiBonKPKlbPQz8GYbRp8LW56kJt.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">18</span>
                                    <span class="monthofevent">Mar</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">GLOBAL RECYCLING DAY</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://www.colorwallpapers.com/uploads/wallpaper/4k-forest-wallpapers/width-853/Y9AGhYGH8QjR-download-forest-picture-4k-ultra-hd.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">21</span>
                                    <span class="monthofevent">Mar</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">international forest day</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://c1.wallpaperflare.com/preview/758/1001/105/winter-wood-stack-log.jpg');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">21</span>
                                    <span class="monthofevent">Mar</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">International wood DAY</h5>
                            </div>
                        </div>
                        <div class="montheventwise" style="background-image: url('https://lh4.googleusercontent.com/proxy/jAsTrPj7gXXJVal-ZVSuKATva87RqLBDzcnLvRzR6dNSb-HubSSrF4dkm1QWCpuR3lq4uoCI9fePyc9NV0noOOu2BXGff8Bg5mYraENNllk0SQ2WGp298L77bzj_BL-b4h14RtTULJrJUq-1djIVHyDrmhbeKDseGrSC');">
                            <div class="monthoverlay"></div>
                            <div class="eventday">
                                <div class="eventdate">
                                    <span class="date0fevent">22</span>
                                    <span class="monthofevent">Mar</span>
                                </div>
                                <h5 class="poppins-semibold eventname-month">international water DAY</h5>
                            </div>
                        </div>
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