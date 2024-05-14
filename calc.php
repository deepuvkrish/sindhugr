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
        </div>
        <div class="calculator-module">

            <div class="calc-quiz">
                <form id="calculator" class="calc-form-section">

                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Electricity Bill" name="ebill" id='ebill' required />
                        <label class="form__label">Enter your monthly Electricity bill:</label>
                    </div>

                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Gas Bill" name="gasbill" id='gasbill' required />
                        <label class="form__label">Enter your monthly gas bill:</label>
                    </div>

                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Oil Bill" name="oilbill" id='oilbill' onchange="oilfunction()" required />
                        <label class="form__label">Enter your monthly oil bill:</label>
                    </div>

                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Mileage Bill" name="mileage" id='mileage' required />
                        <label class="form__label">Enter your total yearly mileage on your car:</label>
                    </div>

                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Short Flight Bill" name="sfbill" id='sfbill' required />
                        <label class="form__label">Average short flights taken past year</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Long Flight Bill" name="lfbill" id='lfbill' required />
                        <label class="form__label">Average Long flights taken past year</label>
                    </div>
                    <div class="form__group field">
                        <label class="form__label">Do you recycle newspaper ?</label>
                        <input type="radio" placeholder="newspaper recycle" name="newsrecycle" value="0" required />Yes
                        <input type="radio" placeholder="newspaper recycle" name="newsrecycle" value="184" required />No
                    </div>
                    <div class="form__group field">
                        <label class="form__label">Do you recycle Aluminium and Tin ?</label>
                        <input type="radio" placeholder="newspaper recycle" name="metalrecycle" value="0" required />Yes
                        <input type="radio" placeholder="newspaper recycle" name="metalrecycle" value="166" required />No
                    </div>


                    <button type="submit" class="btn btn-primary">Calculate</button>
                    <div id="result" class="resilt"></div>

                </form>
                <script src="attributes/js/calc.js"></script>
            </div>
            <div class="calc-meter">
                <div class="calc-meters-type">
                    <div class="electricity"></div>
                    <div class="gas"></div>
                    <div class="oil">
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



                    </div>
                    <div class="car"></div>
                    <div class="flight"></div>
                    <div class="recycle"></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="attributes/js/easing.min.js"></script>
    <script src="attributes/js/waypoints.min.js"></script>
    <script src="attributes/js/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="attributes/js/main.js"></script>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle("active");
        }

        function oilfunction() {
            var x = document.getElementById("oilbill").value;
            document.getElementById("count").innerHTML = 113 * x;
            oilanimate();
        }

        function oilanimate() {
            const watcolor = getComputedStyle(document.querySelector('.water'));
            const watfcolor = getComputedStyle(document.querySelector('.water_wave_back'));
            const watbcolor = getComputedStyle(document.querySelector('.water_wave_front '));
            const upside = watcolor.backgroundColor;
            const frontside = watfcolor.fill;
            const backside = watbcolor.fill;
            let col1 = document.getElementsByClassName('water')[0];
            let col2 = document.getElementsByClassName('water_wave_front')[0];
            let col3 = document.getElementsByClassName('water_wave_back')[0];
            var cnt = document.getElementById("count");
            var water = document.getElementById("water");
            var percent = cnt.innerText;

            let grandpercentage = (percent / 4246653) * 100;
            var interval;
            interval = setInterval(function() {
                cnt.innerHTML = percent;
                water.style.transform = 'translate(0' + ',' + (100 - grandpercentage) + '%)';
                clearInterval(interval);
            }, 100);
            if (grandpercentage <= 30) {
                col1.style.background = "#329202";
                col2.style.fill = "#58c600";
                col3.style.fill = "#49b600";
                console.log("less than 30", grandpercentage);
            } else if (grandpercentage > 30 && grandpercentage <= 55) {
                col1.style.background = "#f0f31c";
                col2.style.fill = "#e8f345";
                col3.style.fill = "#f9ff00";
                console.log("greater than 30", grandpercentage)
            } else if (grandpercentage > 55 && grandpercentage < 85) {
                col1.style.background = "rgb(243 158 28)";
                col2.style.fill = "rgb(255 167 0)";
                col3.style.fill = "rgb(243 147 69)";
                console.log("greater than 55", grandpercentage)
            } else {
                col1.style.background = "rgb(243 28 28)";
                col2.style.fill = "rgb(221 0 0)";
                col3.style.fill = "rgb(173 15 1)";
                console.log("greater than 85", grandpercentage)
            }
        }
    </script>
</body>

</html>