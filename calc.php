<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>



<!DOCTYPE html>
<html>

<head>
    <title> Pro Planet Person</title>
    <link rel="stylesheet" type="text/css" href="attributes/css/home.css">
    <link rel="stylesheet" type="text/css" href="attributes/css/calc.css">

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
                    <li class="nav-item ps-5">
                        <a class="nav-link " href="home.php">Home</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link navbar-active" href="calc.php">Carbon Footprint Calculator</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="edu.php">Educational Content</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="green.php">Green Shopping</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="forum.php">Community Forum</a>
                    </li>
                    <li class="nav-item ps-5">
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
                            <li style="border-bottom:1px solid #5b585858;">
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

    <div class="calc-header" style="margin-top:150px">
        <h1 class="poppins-bold calc-title">Carbon Footprint</h1>
        <p class="poppins-medium">The carbon footprint represents the total volume of greenhouse gases (GG) resulting from everyday economic and human activity. Knowing the carbon footprint of an activity, which is measured in tons of CO2 emissions, is important when it comes to taking measures and launching initiatives to reduce it to the lowest possible level. It all starts with what each individual does every day.</p>
    </div>

    <!-- TOP 10 co2 emission table -->
    <div id="clients" class="the-clients">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h4>Top 10 <em>CO2-emitting </em> countries in the world -EU JRC 2022 </h4>
                    </div>

                    <div class="container-table">

                        <table>
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>CO2 Emission in 2022 - (Metric Tons)</th>
                                    <th>CO2 Emission in 2021 - (Metric Tons)</th>
                                    <th>CO2 Emission 2022- Per capita - (Tons)</th>
                                    <th>CO2 Emission 2021- Per capita - (Tons)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>China</td>
                                    <td>12,667</td>
                                    <td>12,718</td>
                                    <td>8.85</td>
                                    <td>8.90</td>

                                </tr>
                                <tr>
                                    <td>USA</td>
                                    <td>4,854</td>
                                    <td>4,769</td>
                                    <td>14.44</td>
                                    <td>14.29</td>

                                </tr>
                                <tr>
                                    <td>India</td>
                                    <td>2,693</td>
                                    <td>2,528</td>
                                    <td>1.91</td>
                                    <td>1.81</td>

                                </tr>
                                <tr>
                                    <td>Russia</td>
                                    <td>1,909</td>
                                    <td>1,933</td>
                                    <td>13.31</td>
                                    <td>13.46</td>

                                </tr>
                                <tr>
                                    <td>Japan</td>
                                    <td>1,083</td>
                                    <td>1,076</td>
                                    <td>8.61</td>
                                    <td>8.53</td>

                                </tr>
                                <tr>
                                    <td>Indonesia</td>
                                    <td>692</td>
                                    <td>612</td>
                                    <td>2.50</td>
                                    <td>2.23</td>

                                </tr>
                                <tr>
                                    <td>Iran</td>
                                    <td>686</td>
                                    <td>678</td>
                                    <td>8.08</td>
                                    <td>8.04</td>

                                </tr>
                                <tr>
                                    <td>Germany</td>
                                    <td>674</td>
                                    <td>679</td>
                                    <td>8.16</td>
                                    <td>8.22</td>

                                </tr>
                                <tr>
                                    <td>South Korea</td>
                                    <td>636</td>
                                    <td>643</td>
                                    <td>12.26</td>
                                    <td>12.44</td>

                                </tr>
                                <tr>
                                    <td>Saudi Arabia</td>
                                    <td>608</td>
                                    <td>591</td>
                                    <td>16.98</td>
                                    <td>16.75</td>
                                </tr>
                                <tr>
                                    <td>Canada</td>
                                    <td>582</td>
                                    <td>562</td>
                                    <td>15.22</td>
                                    <td>14.82</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="attributes/images/co2.png" style="width:100%;top: -10px;right: -20px;position: relative;">
                </div>
            </div>
        </div>
    </div>

    <!-- Calculator -->
    <div class="calc-section">
        <div class="section-heading">
            <h4>Calculate your <em>Carbon Footprint </em> here </h4>
            <h6>Enter last month details :</h6>
        </div>
        <div class="calculator-module">
            <div class="calc-quiz">
                <form id="calculator" class="calc-form-section">
                    <div class="calc-types">
                        <div class="household-calc">
                            <div class="calc-type-title">
                                <h4>Household Use :</h4>
                                <i class="fa-solid fa-fire-flame-simple fa-flip fa-2xl" style="color: #ff9500;"></i>
                            </div>
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="Electricity Bill" name="ebill" id='ebill' onchange="elecfunction()" />
                                <label class="form__label"><i class="fa-solid fa-bolt fa-2xs" style="color: #FFD43B;"></i>Enter your monthly Electricity bill in units/month:</label>
                            </div>
                            <div class="form__group field">
                                <div id="gaserror" class="bilerr"></div>
                                <input type="number" class="form__field" placeholder="Gas Bill" name="gasbill" id='gasbill' min="0" max="100" onchange="lpgfunction()" />
                                <label class="form__label"><img src="attributes/images/gascylinder.png" style="width: 20px;">Number of LPG Cylinders Used for cooking </label>
                            </div>
                            <div class="form__group field">
                                <div id="Coalerror" class="bilerr"></div>
                                <input type="number" class="form__field" placeholder="Coal Bill" name="coalbill" id='coalbill' min="0" max="9000" onchange="coalfunction()" />
                                <label class="form__label">
                                    <img src="attributes/images/coal.png" style="width: 20px;">How much Coal in Kilos used for cooking (If any):
                                </label>
                            </div>
                            <div class="form__group field">
                                <div id="cngcookerror" class="bilerr"></div>
                                <input type="number" class="form__field" placeholder="CNG Bill" name="cngcookbill" id='cngcookbill' min="0" max="100" onchange="cngcookfunction()" />
                                <label class="form__label"><img src="attributes/images/cng.png" style="width: 20px;">Number of CNG Cylinders used at home (If any) : </label>
                            </div>
                        </div>
                        <div class="transport-calc">
                            <div class="calc-type-title">
                                <h4>Transportation Use :-</h4>
                                <i class="fa-solid fa-gas-pump fa-fade fa-2xl" style="color: #9b0303;"></i>
                            </div>
                            <div class="form__group field">
                                <div id="petrolerror" class="bilerr"></div>
                                <input type="number" class="form__field" placeholder="Mileage Bill" name="mileage" id='petrol' onchange="petrolusage()" min='0' max='99999' />
                                <label class="form__label"><img src="attributes/images/petrol.png" style="width: 20px;">Enter Litres of Petrol bought (If any):</label>
                            </div>
                            <div class="form__group field">
                                <div id="dieselerror" class="bilerr"></div>
                                <input type="input" class="form__field" placeholder="Mileage Bill" name="mileage" id='diesel' onchange="dieselusage()" />
                                <label class="form__label"><img src="attributes/images/diesel.png" style="width: 20px;">Enter Litres of Diesel bought (If any):</label>
                            </div>
                            <div class="form__group field">
                                <div id="cngusageerror" class="bilerr"></div>
                                <input type="number" class="form__field" placeholder="Mileage Bill" name="CNG fuel" id='cngfuel' onchange="cngusage()" min="0" max="99999" />
                                <label class="form__label"><img src="attributes/images/cng.png" style="width: 20px;">Enter Kilos of CNG bought (If any):</label>
                            </div>
                            <div class="form__group field">
                                <div id="autolpgerror" class="bilerr"></div>

                                <input type="number" class="form__field" placeholder="Mileage Bill" name="mileage" id='autolpg' onchange="autolgpsusage()" min="0" max="99999" />
                                <label class="form__label"><img src="attributes/images/lpg.png" style="width: 20px;">Enter number of Auto LGP Cylinders bought (If any):</label>
                            </div>
                            <div class="form__group field">
                                <div id="taxierror" class="bilerr"></div>
                                <input type="number" class="form__field" placeholder="Taxi Bill" name="taxi" id='taxiid' onchange="taxisusage()" min="0" max="99999" />
                                <label class="form__label"><img src="attributes/images/taxi.png" style="width: 20px;">Enter Kms you travelled in a taxi (If any):</label>
                            </div>
                            <div class="form__group field">
                                <div id="buserror" class="bilerr"></div>
                                <input type="number" min="0" max="99999" class="form__field" placeholder="Bus Travel" name="bustravel" id='bus' onchange="bususage()" />
                                <label class="form__label"><img src="attributes/images/bus.png" style="width: 20px;">Enter Kms you travelled in a bus (If any):</label>
                            </div>
                            <div class="form__group field">
                                <div id="trainerror" class="bilerr"></div>
                                <input type="number" min="0" max="99999" class="form__field" placeholder="Train travel" name="Train Travel" id='traintravel' onchange="trainusage()" />
                                <label class="form__label"><img src="attributes/images/train.png" style="width: 20px;">Enter Kms you travelled in a Train (If any):</label>
                            </div>
                        </div>
                        <div class="recycle-calc">
                            <div class="calc-type-title">
                                <h4>Waste Management:-</h4>
                                <i class="fa-solid fa-recycle fa-spin fa-2xl" style="color: #0b6100;"></i>
                            </div>
                            <div class="form__group field">
                                <label class="form__label"><img src="attributes/images/news.png" style="width: 20px;">Do you recycle newspaper ?</label>
                                <input type="radio" placeholder="newspaper recycle" name="newsrecycle" value="0" style="margin-top:20px" />Yes
                                <input type="radio" placeholder="newspaper recycle" name="newsrecycle" value="184" style="margin-top:20px;margin-left:30px" />No
                            </div>
                            <div class="form__group field">
                                <label class="form__label"><img src="attributes/images/dustbin.png" style="width: 20px;">Do you recycle Aluminium & Tin ?</label>
                                <input type="radio" placeholder="newspaper recycle" name="metalrecycle" value="0" style="margin-top:20px" />Yes
                                <input type="radio" placeholder="newspaper recycle" name="metalrecycle" value="166" style="margin-top:20px;margin-left:30px" />No
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 90%;">Calculate</button>
                </form>
            </div>
        </div>
    </div>
    <div class="calc-results">
        <div class="calc-meter">
            <div class="calc-meters-type">
                <div class="electricity">
                    <p>Electricity</p>

                    <div class="bolt">
                        <svg viewBox="0 0 170 57" class="white left">
                            <path d="M36.2701759,17.9733192 C-0.981139498,45.4810755 -7.86361824,57.6618438 15.6227397,54.5156241 C50.8522766,49.7962945 201.109341,31.1461782 161.361488,2"></path>
                        </svg>
                        <svg viewBox="0 0 170 57" class="white right">
                            <path d="M36.2701759,17.9733192 C-0.981139498,45.4810755 -7.86361824,57.6618438 15.6227397,54.5156241 C50.8522766,49.7962945 201.109341,31.1461782 161.361488,2"></path>
                        </svg>
                        <div>
                            <span></span>
                        </div>
                        <svg viewBox="0 0 112 44" class="circle">
                            <path d="M96.9355003,2 C109.46067,13.4022454 131.614152,42 56.9906735,42 C-17.6328048,42 1.51790702,13.5493875 13.0513641,2"></path>
                        </svg>
                        <svg viewBox="0 0 70 3" class="line left">
                            <path transform="translate(-2.000000, 0.000000)" d="M2,1.5 L70,1.5"></path>
                        </svg>
                        <svg viewBox="0 0 70 3" class="line right">
                            <path transform="translate(-2.000000, 0.000000)" d="M2,1.5 L70,1.5"></path>
                        </svg>
                    </div>



                    <div id="elecresult" class="fireoil"> </div>
                    <div id="co2measure" class="fireoils"> KgCO<sub>2</sub>e</div>

                </div>
                <div class="gas">
                    <p>Gas</p>
                    <div class="fire">
                        <div class="fire-left">
                            <div class="main-fire"></div>
                            <div class="particle-fire"></div>
                        </div>
                        <div class="fire-center">
                            <div class="main-fire"></div>
                            <div class="particle-fire"></div>
                        </div>
                        <div class="fire-right">
                            <div class="main-fire"></div>
                            <div class="particle-fire"></div>
                        </div>
                        <div class="fire-bottom">
                            <div class="main-fire"></div>
                        </div>
                    </div>
                    <div id="fireresult" class="fireoil"> </div>
                    <div id="co2measure" class="fireoils"> KgCO<sub>2</sub>e</div>
                </div>
                <!-- <div class="oil">
                    <p>Oil</p>
                    <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" style="display: none;">
                        <symbol id="wave">
                            <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z"></path>
                            <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z"></path>
                            <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z"></path>
                            <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z"></path>
                        </symbol>
                    </svg>
                    <div class="water-jar">
                        <div class="water-filling">
                            <div class="percentNum" id="count" oninput="oilanimate()"></div>

                            <div class="percentB">MTs</div>
                        </div>
                        <div id="water" class="water">
                            <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
                                <use xlink:href="#wave"></use>
                            </svg>
                            <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
                                <use xlink:href="#wave"></use>
                            </svg>
                        </div>
                    </div>



                </div> -->
                <div class="flight">
                    <p>Transportation</p>
                    <div class="loading-flight-animation">
                        <div class="cloud cloud-1">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="cloud cloud-2">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="cloud cloud-3">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <i class="fa-solid fa-plane fa-2l" style="color: #74C0FC;"></i>

                        <div class="stars">
                            <svg class='star star-1' height='19' viewBox='0 0 19 19' width='19' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z' fill='#f1c40f'>
                            </svg>
                            <svg class='star star-2' height='19' viewBox='0 0 19 19' width='19' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z' fill='#f1c40f'>
                            </svg>
                            <svg class='star star-3' height='19' viewBox='0 0 19 19' width='19' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z' fill='#f1c40f'>
                            </svg>
                        </div>
                    </div>
                    <div id="transport" class="fireoil"> </div>
                    <div id="co2measure" class="fireoils"> KgCO<sub>2</sub>e</div>
                </div>
                <div class="recycle">
                    <p>Waste Recycle</p>
                    <div class="dustbin-wrapper" :class="{'blue' : blue}">
                        <div class="dustbin">
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="dustbin-design"></div>
                            <div class="recycle-wrapper">
                                <div class="recycle-logo">&#9851;</div>
                            </div>
                            <div class="dustbin-wrapper-2">
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                                <div class="dustbin-design-2"></div>
                            </div>
                        </div>
                    </div>
                    <div id="recycleresult" class="fireoil"> </div>
                    <div id="co2measure" class="fireoils"> KgCO<sub>2</sub>e</div>
                </div>
            </div>
        </div>

        <div class="calc-output-section">
            <div class="calc-metars-type">
                <div id="result" class="resilt"></div>
                <div id="resultkg" class="resultinkg"></div>
                <div id="resultmetric" class="resultinmetrictons"></div>
                <div id="msg" class="messagecarbon"></div>
            </div>
            <div class="calc-metars-result-bar">
                <div class="alert-box calc-result-box" id="alert-result">
                    <i class="fa-solid fa-down-long fa-beat-fade" style="color: #ff0000;font-size:50px"></i>
                    <h5 class="alert-msg">You contribute tooo much carbon.Please take necessary steps</h5>
                    <h6 class="alert-msg">Learn more about how to reduce your carbon footprint.</h6>
                    <a class="read-more alert-btn-clr" href="edu.php">Read More</a>
                </div>
                <div class="warning-box calc-result-box" id="warning-result">
                    <i class="fa-solid fa-triangle-exclamation fa-beat-fade" style="color: #ffae00;font-size:50px"></i>
                    <h5 class="warning-msg">You are an average contributer of carbon. If possible take necessary steps</h5>
                    <h6 class="warning-msg">Tips to reduce your carbon footprint.</h6>
                    <a class="read-more warning-btn-clr" href="edu.php">Read More</a>
                </div>
                <div class="ideal-box calc-result-box" id="ideal-result">
                    <i class="fa-brands fa-pagelines fa-fade fa-2xl" style="color: #19a706;font-size:50px"></i>
                    <h5 class="ideal-msg">You are an Ideal contributer of carbon.If possible maintain your score</h5>
                    <h6 class="ideal-msg">Check our portal for more information.</h6>
                    <a class="read-more ideal-btn-clr" href="edu.php">Read More</a>
                </div>
                <div class="congrats-box calc-result-box" id="congrates">
                    <i class="fa-solid fa-earth-americas fa-2xl" style="color: #4b9bd8;font-size:50px;"></i>
                    <h5 class="congrats">You are an Ideal contributer of carbon.If possible maintain your score</h5>
                    <h6 class="congrats">Check our portal for more information.</h6>
                    <a class="read-more ideal-btn-clr" href="edu.php">Read More</a>
                </div>
            </div>
        </div>

    </div>








    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <footer style="background-color: #4CAF50; color: white; text-align: center; padding: 1rem; margin-top:20px;">
        <p style="margin: 10;">&copy; 2024 Pro Planet Person</p>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="attributes/js/calc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="attributes/js/easing.min.js"></script>
    <script src="attributes/js/waypoints.min.js"></script>
    <script src="attributes/js/owl.carousel.min.js"></script> -->

    <!-- Template Javascript -->
    <!-- <script src="attributes/js/main.js"></script> -->
    <script>
        $('.bolt').each(function(e) {

            var bolt = $(this),
                div = $(this).children('div');

            bolt.addClass('animate');

            var tween = new TimelineMax({
                onComplete() {
                    bolt.removeClass('animate');
                    repeat();
                }
            }).set(div, {
                rotation: 360
            }).to(div, .7, {
                y: 80,
                rotation: 370
            }).to(div, .6, {
                y: -140,
                rotation: 20
            }).to(div, .1, {
                rotation: -24,
                y: 80
            }).to(div, .8, {
                ease: Back.easeOut.config(1.6),
                rotation: 0,
                y: 0
            });

            function repeat() {
                setTimeout(() => {
                    bolt.addClass('animate');
                    tween.restart();
                }, 100);
            }

        })

        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle("active");
        }
    </script>
</body>

</html>