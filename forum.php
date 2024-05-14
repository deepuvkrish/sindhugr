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
    <link rel="stylesheet" type="text/css" href="attributes/css/underconstruction.css">

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
                        <a class="nav-link" href="calc.php">Carbon Footprint Calculator</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link " href="edu.php">Educational Content</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" href="green.php">Green Shopping</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link navbar-active" href="forum.php">Community Forum</a>
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




    <div class='container community-chat'>
        <svg viewBox="0 0 1924 1179" class="chatanime">
            <g id="conversation">
                <g id="chatbox1">
                    <path id="Vector" d="M429.248 365.783C428.118 365.781 426.998 365.57 425.945 365.159C424.243 364.505 422.78 363.348 421.751 361.843C420.721 360.338 420.174 358.555 420.182 356.731V262.269C420.178 259.072 418.907 256.007 416.646 253.746C414.386 251.485 411.321 250.213 408.124 250.209H388.784C380.793 250.2 373.132 247.021 367.481 241.37C361.831 235.719 358.653 228.057 358.644 220.064V30.1447C358.653 22.1526 361.831 14.4904 367.481 8.83908C373.132 3.18779 380.793 0.00895718 388.784 0H1070.98C1078.97 0.0089678 1086.63 3.1878 1092.28 8.83908C1097.93 14.4904 1101.11 22.1526 1101.12 30.1447V220.064C1101.11 228.057 1097.93 235.719 1092.28 241.37C1086.63 247.021 1078.97 250.2 1070.98 250.209H544.422C542.75 250.211 541.097 250.56 539.568 251.233C538.038 251.906 536.664 252.889 535.533 254.12L435.888 362.842C435.047 363.767 434.021 364.506 432.878 365.013C431.735 365.519 430.498 365.781 429.248 365.783ZM388.784 4.01681C381.857 4.02463 375.217 6.7799 370.32 11.6781C365.422 16.5764 362.668 23.2175 362.66 30.1447V220.064C362.668 226.992 365.422 233.633 370.32 238.531C375.217 243.429 381.857 246.184 388.784 246.192H408.124C412.386 246.197 416.472 247.892 419.485 250.906C422.498 253.92 424.193 258.007 424.198 262.269V356.731C424.198 357.744 424.504 358.733 425.076 359.568C425.647 360.404 426.458 361.048 427.402 361.415C428.345 361.782 429.378 361.855 430.364 361.626C431.35 361.396 432.243 360.873 432.928 360.127L532.573 251.406C534.08 249.765 535.911 248.454 537.951 247.557C539.99 246.659 542.194 246.195 544.422 246.192H1070.98C1077.91 246.184 1084.55 243.429 1089.45 238.531C1094.34 233.633 1097.1 226.992 1097.11 220.064V30.1447C1097.1 23.2175 1094.34 16.5764 1089.45 11.6781C1084.55 6.7799 1077.91 4.02463 1070.98 4.01681H388.784Z" fill="#CCCCCC" />
                    <path id="Vector_2" d="M432.574 85.5383C447.14 85.5383 458.947 73.7286 458.947 59.1605C458.947 44.5925 447.14 32.7827 432.574 32.7827C418.008 32.7827 406.2 44.5925 406.2 59.1605C406.2 73.7286 418.008 85.5383 432.574 85.5383Z" fill="#CCCCCC" />
                    <path id="Vector_3" d="M1040.21 205.117H419.553C417.705 205.119 415.874 204.757 414.166 204.051C412.457 203.345 410.904 202.309 409.596 201.002C408.289 199.696 407.251 198.144 406.543 196.436C405.835 194.728 405.471 192.898 405.471 191.049C405.471 189.2 405.835 187.369 406.543 185.661C407.251 183.953 408.289 182.402 409.596 181.095C410.904 179.788 412.457 178.753 414.166 178.047C415.874 177.341 417.705 176.978 419.553 176.98H1040.21C1042.06 176.978 1043.89 177.341 1045.6 178.047C1047.31 178.753 1048.86 179.788 1050.17 181.095C1051.48 182.402 1052.52 183.953 1053.22 185.661C1053.93 187.369 1054.3 189.2 1054.3 191.049C1054.3 192.898 1053.93 194.728 1053.22 196.436C1052.52 198.144 1051.48 199.696 1050.17 201.002C1048.86 202.309 1047.31 203.345 1045.6 204.051C1043.89 204.757 1042.06 205.119 1040.21 205.117Z" fill="#CCCCCC" />
                    <path id="Vector_4" d="M838.015 145.328H419.553C417.705 145.33 415.874 144.968 414.166 144.262C412.457 143.556 410.904 142.52 409.596 141.213C408.289 139.907 407.251 138.355 406.543 136.647C405.835 134.939 405.471 133.108 405.471 131.26C405.471 129.411 405.835 127.58 406.543 125.872C407.251 124.164 408.289 122.612 409.596 121.306C410.904 119.999 412.457 118.963 414.166 118.257C415.874 117.551 417.705 117.189 419.553 117.191H838.015C839.864 117.189 841.695 117.551 843.403 118.257C845.112 118.963 846.664 119.999 847.972 121.306C849.28 122.612 850.318 124.164 851.026 125.872C851.734 127.58 852.098 129.411 852.098 131.26C852.098 133.108 851.734 134.939 851.026 136.647C850.318 138.355 849.28 139.907 847.972 141.213C846.664 142.52 845.112 143.556 843.403 144.262C841.695 144.968 839.864 145.33 838.015 145.328Z" fill="#CCCCCC" />
                </g>
                <g id="chatbox2">
                    <path id="Vector_5" d="M1343.95 661.522C1342.7 661.521 1341.47 661.259 1340.32 660.752C1339.18 660.246 1338.15 659.507 1337.31 658.581L1237.67 549.86C1236.54 548.629 1235.16 547.646 1233.63 546.973C1232.1 546.299 1230.45 545.951 1228.78 545.949H702.219C694.228 545.94 686.567 542.761 680.917 537.11C675.266 531.458 672.088 523.796 672.079 515.804V325.884C672.088 317.892 675.266 310.23 680.917 304.579C686.567 298.928 694.228 295.749 702.219 295.74H1384.42C1392.41 295.749 1400.07 298.928 1405.72 304.579C1411.37 310.23 1414.55 317.892 1414.56 325.884V515.804C1414.55 523.796 1411.37 531.458 1405.72 537.11C1400.07 542.761 1392.41 545.94 1384.42 545.949H1365.08C1361.88 545.953 1358.81 547.224 1356.55 549.485C1354.29 551.746 1353.02 554.812 1353.02 558.009V652.471C1353.03 654.294 1352.48 656.077 1351.45 657.582C1350.42 659.088 1348.96 660.244 1347.26 660.898C1346.2 661.309 1345.08 661.521 1343.95 661.522ZM702.219 299.756C695.293 299.764 688.653 302.52 683.755 307.418C678.858 312.316 676.103 318.957 676.095 325.884V515.804C676.103 522.731 678.858 529.372 683.755 534.271C688.653 539.169 695.293 541.924 702.219 541.932H1228.78C1231.01 541.934 1233.21 542.399 1235.25 543.296C1237.29 544.194 1239.12 545.504 1240.63 547.145L1340.27 655.867C1340.96 656.613 1341.85 657.135 1342.84 657.365C1343.82 657.595 1344.86 657.522 1345.8 657.154C1346.74 656.787 1347.55 656.144 1348.12 655.308C1348.7 654.472 1349 653.483 1349 652.471V558.009C1349.01 553.747 1350.7 549.66 1353.72 546.646C1356.73 543.632 1360.81 541.937 1365.08 541.932H1384.42C1391.34 541.924 1397.98 539.169 1402.88 534.271C1407.78 529.372 1410.53 522.731 1410.54 515.804V325.884C1410.53 318.957 1407.78 312.316 1402.88 307.418C1397.98 302.52 1391.34 299.764 1384.42 299.757L702.219 299.756Z" fill="#3F3D56" />
                    <path id="Vector_6" d="M746.009 379.519C760.575 379.519 772.383 367.709 772.383 353.141C772.383 338.573 760.575 326.763 746.009 326.763C731.444 326.763 719.636 338.573 719.636 353.141C719.636 367.709 731.444 379.519 746.009 379.519Z" fill="#3F3D56" />
                    <path id="line2" d="M1353.65 499.099H732.99C729.259 499.099 725.682 497.617 723.044 494.978C720.406 492.34 718.924 488.762 718.924 485.031C718.924 481.299 720.406 477.721 723.044 475.083C725.682 472.445 729.259 470.962 732.99 470.962H1353.65C1357.38 470.962 1360.96 472.445 1363.6 475.083C1366.23 477.721 1367.72 481.299 1367.72 485.031C1367.72 488.762 1366.23 492.34 1363.6 494.978C1360.96 497.617 1357.38 499.099 1353.65 499.099Z" fill="#DC3545" />
                    <path id="line1" d="M1151.45 439.309H732.989C731.14 439.311 729.309 438.949 727.601 438.243C725.892 437.537 724.34 436.501 723.032 435.194C721.724 433.888 720.686 432.336 719.979 430.628C719.271 428.92 718.906 427.089 718.906 425.241C718.906 423.392 719.271 421.561 719.979 419.853C720.686 418.145 721.724 416.593 723.032 415.287C724.34 413.98 725.892 412.944 727.601 412.238C729.309 411.532 731.14 411.17 732.989 411.172H1151.45C1153.3 411.17 1155.13 411.532 1156.84 412.238C1158.55 412.944 1160.1 413.98 1161.41 415.287C1162.72 416.593 1163.75 418.145 1164.46 419.853C1165.17 421.561 1165.53 423.392 1165.53 425.241C1165.53 427.089 1165.17 428.92 1164.46 430.628C1163.75 432.336 1162.72 433.888 1161.41 435.194C1160.1 436.501 1158.55 437.537 1156.84 438.243C1155.13 438.949 1153.3 439.311 1151.45 439.309Z" fill="#DC3545" />
                </g>
                <g id="leaf2">
                    <path class="bg" d="M1749.08 1150.95C1711.12 1178.3 1661.94 1179.67 1614.39 1176.31C1607.76 1175.84 1601.16 1175.29 1594.63 1174.7C1594.59 1174.69 1594.54 1174.69 1594.5 1174.68C1594.19 1174.65 1593.87 1174.62 1593.57 1174.61C1592.23 1174.48 1590.88 1174.35 1589.54 1174.23L1589.86 1174.83L1590.85 1176.7C1590.49 1176.07 1590.14 1175.46 1589.78 1174.84C1589.67 1174.65 1589.56 1174.46 1589.45 1174.27C1577.14 1152.84 1564.92 1130.61 1561.81 1106.14C1558.58 1080.73 1567.64 1051.96 1589.99 1039.47C1592.93 1037.84 1596.03 1036.54 1599.25 1035.6C1600.59 1035.19 1601.94 1034.86 1603.31 1034.57C1611.7 1032.71 1620.43 1033.11 1628.6 1035.74C1636.78 1038.37 1644.11 1043.13 1649.84 1049.54C1655.56 1055.94 1659.48 1063.75 1661.19 1072.17C1662.9 1080.59 1662.33 1089.31 1659.55 1097.44C1678.5 1078 1674.97 1046.46 1668.43 1020.11C1661.88 993.751 1653.95 964.424 1667.27 940.752C1674.68 927.575 1687.7 919.4 1702.32 916.107C1702.77 916.01 1703.22 915.914 1703.67 915.83C1721.08 912.302 1739.19 915.475 1754.37 924.715C1782.32 942.331 1796.68 975.731 1801.34 1008.45C1808.84 1061.1 1792.23 1119.86 1749.08 1150.95Z" fill="#E07781" />
                    <path id="Vector_8" d="M1736.82 1066.55C1735.72 1078.17 1732.93 1089.56 1728.54 1100.36C1724.5 1109.93 1719.05 1118.84 1712.37 1126.79C1698.49 1143.04 1680.9 1155.72 1661.1 1163.76C1646.12 1169.9 1630.43 1174.11 1614.39 1176.31C1607.76 1175.84 1601.16 1175.29 1594.63 1174.7C1594.59 1174.69 1594.54 1174.69 1594.5 1174.68C1594.19 1174.65 1593.87 1174.62 1593.57 1174.61C1592.23 1174.48 1590.88 1174.35 1589.54 1174.23L1589.86 1174.83L1590.85 1176.7C1590.49 1176.07 1590.14 1175.46 1589.78 1174.83C1589.67 1174.65 1589.56 1174.46 1589.45 1174.27C1601.48 1162.29 1610.45 1147.61 1615.63 1131.44C1620.81 1115.28 1622.04 1098.11 1619.21 1081.37C1616.26 1064.75 1609.42 1049.07 1599.25 1035.59C1600.59 1035.19 1601.94 1034.86 1603.31 1034.57C1607.18 1039.85 1610.57 1045.47 1613.44 1051.35C1623.76 1072.32 1627.05 1096.05 1622.83 1119.04C1618.91 1139.84 1609.13 1159.09 1594.65 1174.53C1595.92 1174.44 1597.2 1174.34 1598.45 1174.22C1622.18 1172.21 1645.86 1167.11 1667.39 1156.66C1685.79 1147.94 1701.76 1134.83 1713.9 1118.49C1726.94 1100.5 1732.69 1078.87 1733.67 1056.89C1734.43 1033.21 1731.95 1009.53 1726.3 986.518C1720.81 963.054 1712.48 940.349 1701.48 918.91C1701.23 918.424 1701.18 917.861 1701.34 917.34C1701.5 916.818 1701.85 916.376 1702.32 916.106C1702.72 915.84 1703.2 915.741 1703.67 915.829C1703.9 915.89 1704.11 916.001 1704.29 916.155C1704.47 916.309 1704.61 916.502 1704.71 916.719C1706.06 919.367 1707.39 922.017 1708.68 924.697C1719.34 947.019 1727.2 970.58 1732.06 994.839C1736.77 1018.24 1739.29 1042.72 1736.82 1066.55Z" fill="white" />
                    <path id="Vector_9" d="M1923.2 1176.25C1923.2 1176.78 1922.99 1177.29 1922.61 1177.67C1922.24 1178.04 1921.73 1178.26 1921.19 1178.26H1156.11C1155.58 1178.26 1155.07 1178.04 1154.69 1177.67C1154.32 1177.29 1154.1 1176.78 1154.1 1176.25C1154.1 1175.72 1154.32 1175.2 1154.69 1174.83C1155.07 1174.45 1155.58 1174.24 1156.11 1174.24H1921.19C1921.73 1174.24 1922.24 1174.45 1922.61 1174.83C1922.99 1175.21 1923.2 1175.72 1923.2 1176.25Z" fill="#3F3D56" />
                </g>
                <g id="person2">
                    <g id="hand-right_2">
                        <path id="Vector_10" d="M1318.38 751.187C1318.98 748.296 1320.21 745.573 1321.98 743.209C1323.75 740.845 1326.01 738.898 1328.62 737.505C1331.22 736.111 1334.09 735.305 1337.04 735.144C1339.99 734.983 1342.94 735.47 1345.68 736.571L1392.78 682.432L1402.79 718.359L1356.52 764.263C1354.37 768.742 1350.64 772.276 1346.06 774.194C1341.47 776.112 1336.34 776.281 1331.64 774.669C1326.94 773.057 1322.99 769.777 1320.55 765.449C1318.1 761.121 1317.33 756.046 1318.38 751.187Z" fill="#FFB8B8" />
                        <path id="Vector_11" d="M1373.69 754.237L1347.78 734.859C1346.77 734.099 1345.92 733.134 1345.3 732.025C1344.68 730.917 1344.31 729.691 1344.19 728.426C1344.08 727.162 1344.23 725.888 1344.65 724.688C1345.06 723.487 1345.72 722.387 1346.58 721.459L1500.93 555.817C1505.89 550.546 1512.57 547.227 1519.76 546.462C1526.95 545.697 1534.18 547.537 1540.13 551.648L1540.13 551.649C1543.76 554.177 1546.78 557.475 1548.99 561.306C1551.2 565.137 1552.53 569.407 1552.9 573.813C1553.27 578.219 1552.66 582.653 1551.13 586.798C1549.59 590.943 1547.15 594.697 1544 597.794L1385.43 753.449C1384.04 754.83 1382.23 755.717 1380.29 755.974C1378.34 756.231 1376.37 755.844 1374.66 754.872C1374.33 754.681 1374 754.469 1373.69 754.237Z" fill="#27282D" />
                    </g>
                    <g id="body">
                        <path id="Vector_12" d="M1576.93 497.13C1604.17 497.13 1626.25 475.044 1626.25 447.801C1626.25 420.558 1604.17 398.473 1576.93 398.473C1549.69 398.473 1527.61 420.558 1527.61 447.801C1527.61 475.044 1549.69 497.13 1576.93 497.13Z" fill="#FFB8B8" />
                        <path id="Vector_13" d="M1518.99 1126.79L1494.37 1126.79L1482.65 1031.81L1518.99 1031.81L1518.99 1126.79Z" fill="#FFB8B8" />
                        <path id="Vector_14" d="M1525.26 1150.65L1445.88 1150.65V1149.65C1445.88 1145.59 1446.68 1141.57 1448.24 1137.82C1449.79 1134.07 1452.06 1130.67 1454.93 1127.8C1457.8 1124.93 1461.21 1122.65 1464.96 1121.1C1468.71 1119.54 1472.72 1118.75 1476.78 1118.75H1476.78L1525.27 1118.75L1525.26 1150.65Z" fill="#2F2E41" />
                        <path id="Vector_15" d="M1593.28 1152.9L1568.67 1152.89L1565.26 1060.19L1593.29 1057.92L1593.28 1152.9Z" fill="#FFB8B8" />
                        <path id="Vector_16" d="M1599.56 1176.76L1520.18 1176.76V1175.76C1520.18 1171.7 1520.98 1167.68 1522.53 1163.93C1524.09 1160.18 1526.36 1156.78 1529.23 1153.91C1532.1 1151.04 1535.51 1148.76 1539.26 1147.21C1543.01 1145.65 1547.02 1144.85 1551.08 1144.85H1551.08L1599.57 1144.86L1599.56 1176.76Z" fill="#2F2E41" />
                        <path id="Vector_17" d="M1586.28 1135.56L1567.11 1133.31C1564.94 1133.05 1562.93 1132.01 1561.46 1130.38C1560 1128.75 1559.17 1126.65 1559.13 1124.46L1555.54 874.738C1555.53 874.032 1555.27 873.351 1554.81 872.816C1554.35 872.281 1553.71 871.925 1553.02 871.81C1552.32 871.696 1551.6 871.83 1551 872.19C1550.39 872.549 1549.92 873.111 1549.69 873.777L1523.09 948.89L1524.99 1089.68C1525.02 1092.01 1524.16 1094.25 1522.58 1095.96C1521 1097.66 1518.82 1098.69 1516.5 1098.83L1491.47 1099.89C1489.18 1100.02 1486.93 1099.28 1485.16 1097.82C1483.4 1096.36 1482.25 1094.28 1481.95 1092.01L1468.87 932.739L1468.86 932.639L1488.7 766.304L1637.67 777.084L1596.31 1127.65C1596.05 1129.84 1594.99 1131.87 1593.34 1133.34C1591.69 1134.81 1589.56 1135.62 1587.34 1135.63C1586.99 1135.63 1586.64 1135.61 1586.28 1135.56Z" fill="#2F2E41" />
                        <path id="Vector_18" d="M1489.33 781.05C1488 780.336 1486.86 779.295 1486.04 778.024C1485.21 776.754 1484.72 775.295 1484.61 773.783C1484.61 773.783 1498 690.465 1502.91 688.902L1492.17 599.803C1490.88 588.936 1491.78 577.921 1494.81 567.405C1497.84 556.89 1502.93 547.085 1509.8 538.566C1516.42 530.302 1524.64 523.464 1533.97 518.465C1543.3 513.466 1553.54 510.409 1564.08 509.48C1565.59 509.344 1567.08 509.241 1568.56 509.17C1581.27 508.489 1593.96 510.887 1605.54 516.161C1617.13 521.435 1627.27 529.428 1635.1 539.461C1643.23 549.58 1648.79 561.512 1651.31 574.242C1653.83 586.973 1653.25 600.125 1649.6 612.579L1643.57 633.546V780.071C1643.57 781.501 1643.23 782.91 1642.58 784.184C1641.93 785.458 1640.99 786.563 1639.83 787.408C1621.08 801.177 1599.88 806.045 1579.28 806.045C1540.3 806.045 1503.46 788.612 1489.33 781.05Z" fill="#DC3545" />
                        <path id="Vector_19" d="M1613.47 491.9C1612.31 492.598 1611 493.018 1609.65 493.13C1608.3 493.241 1606.94 493.04 1605.68 492.542C1604.42 492.044 1603.29 491.262 1602.38 490.257C1601.47 489.253 1600.81 488.052 1600.43 486.749L1600.4 486.626C1599.4 482.521 1600.19 478.226 1600.45 474.008C1600.71 469.791 1600.27 465.161 1597.39 462.077C1592 456.327 1582.5 459.441 1574.75 458.022C1570.21 457.034 1566.19 454.426 1563.44 450.686C1560.68 446.946 1559.38 442.33 1559.79 437.703C1559.89 436.826 1560.06 435.947 1560.25 435.07C1560.72 432.846 1560.67 430.542 1560.1 428.341C1559.54 426.139 1558.47 424.099 1556.98 422.381C1555.49 420.663 1553.62 419.313 1551.52 418.437C1549.43 417.562 1547.15 417.185 1544.89 417.336C1537.07 417.825 1528.64 420.24 1522.14 414.481C1519.75 412.208 1518.09 409.284 1517.36 406.072C1516.62 402.861 1516.85 399.505 1518.01 396.422C1521.65 385.736 1532.06 380.096 1542.38 376.971C1555.14 373.21 1568.58 372.339 1581.72 374.423C1594.86 376.507 1607.37 381.494 1618.34 389.02C1624.89 393.586 1631.02 399.335 1633.84 406.807C1636.66 414.279 1635.37 423.731 1629.12 428.707C1634.01 433.83 1637.47 440.148 1639.15 447.029C1640.83 453.91 1640.67 461.111 1638.69 467.912C1635.65 477.914 1620.91 487.566 1613.47 491.9Z" fill="#2F2E41" />
                    </g>
                    <g id="hand-left_2">
                        <path id="Vector_20" d="M1571.99 732.305C1573.12 729.579 1574.84 727.133 1577.02 725.142C1579.19 723.151 1581.78 721.661 1584.6 720.779C1587.42 719.897 1590.4 719.644 1593.32 720.036C1596.25 720.429 1599.05 721.459 1601.54 723.053L1657.94 678.68L1661.05 715.845L1607.01 752.285C1604.06 756.282 1599.74 759.057 1594.88 760.084C1590.01 761.111 1584.94 760.317 1580.63 757.855C1576.31 755.392 1573.05 751.431 1571.45 746.722C1569.86 742.013 1570.05 736.883 1571.99 732.305Z" fill="#FFB8B8" />
                        <path id="Vector_21" d="M1622.47 749.627C1620.98 749.163 1619.63 748.317 1618.56 747.172C1617.5 746.028 1616.75 744.625 1616.4 743.102L1610.7 719.17C1610.28 717.471 1610.37 715.687 1610.96 714.039C1611.55 712.392 1612.61 710.955 1614.01 709.907L1652.35 668.444L1595.96 581.488C1591.7 576.233 1589.29 569.711 1589.12 562.942C1588.95 556.174 1591.03 549.541 1595.03 544.08C1598.23 539.729 1602.51 536.298 1607.45 534.136C1612.39 531.973 1617.82 531.156 1623.18 531.766C1628.54 532.377 1633.64 534.393 1637.97 537.612C1642.3 540.83 1645.71 545.136 1647.84 550.093L1700.26 652.141C1705.47 662.28 1706.77 673.982 1703.91 685.017C1701.05 696.053 1694.23 705.65 1684.75 711.982L1631.18 747.772C1629.54 749.24 1627.42 750.053 1625.22 750.055C1624.28 750.054 1623.36 749.909 1622.47 749.627Z" fill="#27282D" />
                    </g>
                </g>
                <g id="leaf1">
                    <path class="bg" d="M174.123 1150.95C212.078 1178.3 261.263 1179.67 308.807 1176.31C315.446 1175.84 322.037 1175.29 328.568 1174.7C328.608 1174.69 328.659 1174.69 328.7 1174.68C329.013 1174.65 329.328 1174.62 329.628 1174.61C330.976 1174.48 332.325 1174.35 333.66 1174.23L333.345 1174.83L332.355 1176.7C332.71 1176.07 333.066 1175.46 333.422 1174.84C333.526 1174.65 333.644 1174.46 333.748 1174.27C346.064 1152.84 358.28 1130.61 361.396 1106.14C364.616 1080.73 355.565 1051.96 333.208 1039.47C330.275 1037.84 327.17 1036.54 323.95 1035.6C322.613 1035.19 321.258 1034.86 319.887 1034.57C311.502 1032.71 302.773 1033.11 294.596 1035.74C286.42 1038.37 279.091 1043.13 273.365 1049.54C267.638 1055.94 263.72 1063.75 262.013 1072.17C260.305 1080.59 260.871 1089.31 263.652 1097.44C244.697 1078 248.233 1046.46 254.771 1020.11C261.322 993.751 269.253 964.424 255.929 940.752C248.522 927.575 235.496 919.4 220.879 916.107C220.43 916.01 219.982 915.914 219.533 915.83C202.117 912.302 184.01 915.475 168.831 924.715C140.881 942.331 126.525 975.731 121.866 1008.45C114.359 1061.1 130.972 1119.86 174.123 1150.95Z" fill="#E07781" />
                    <path id="Vector_23" d="M186.378 1066.55C187.479 1078.17 190.269 1089.56 194.657 1100.36C198.702 1109.93 204.154 1118.84 210.831 1126.79C224.714 1143.04 242.297 1155.72 262.099 1163.76C277.078 1169.9 292.771 1174.11 308.807 1176.31C315.446 1175.84 322.038 1175.29 328.569 1174.7C328.608 1174.69 328.66 1174.69 328.7 1174.68C329.014 1174.65 329.328 1174.62 329.629 1174.61C330.976 1174.48 332.325 1174.35 333.66 1174.23L333.345 1174.83L332.355 1176.7C332.711 1176.07 333.066 1175.46 333.422 1174.83C333.527 1174.65 333.644 1174.46 333.748 1174.27C321.726 1162.29 312.75 1147.61 307.572 1131.44C302.395 1115.28 301.166 1098.11 303.989 1081.37C306.944 1064.75 313.783 1049.07 323.95 1035.59C322.613 1035.19 321.258 1034.86 319.887 1034.57C316.023 1039.85 312.634 1045.47 309.759 1051.35C299.442 1072.32 296.151 1096.05 300.372 1119.04C304.296 1139.84 314.073 1159.09 328.555 1174.53C327.287 1174.44 326.006 1174.34 324.753 1174.22C301.021 1172.21 277.337 1167.11 255.812 1156.66C237.412 1147.94 221.438 1134.83 209.297 1118.49C196.26 1100.5 190.516 1078.87 189.529 1056.89C188.77 1033.21 191.252 1009.53 196.906 986.518C202.39 963.054 210.724 940.349 221.722 918.91C221.968 918.424 222.018 917.861 221.861 917.34C221.704 916.818 221.352 916.376 220.879 916.106C220.484 915.84 220.001 915.741 219.533 915.829C219.305 915.89 219.093 916.001 218.913 916.155C218.733 916.309 218.59 916.502 218.495 916.719C217.139 919.367 215.807 922.017 214.526 924.697C203.858 947.019 196.004 970.58 191.145 994.839C186.427 1018.24 183.909 1042.72 186.378 1066.55Z" fill="white" />
                    <path id="Vector_24" d="M0.000244141 1176.25C0.00164795 1176.78 0.213745 1177.29 0.589966 1177.67C0.966248 1178.04 1.4762 1178.26 2.0083 1178.26H767.09C767.623 1178.26 768.133 1178.04 768.51 1177.67C768.887 1177.29 769.098 1176.78 769.098 1176.25C769.098 1175.72 768.887 1175.2 768.51 1174.83C768.133 1174.45 767.623 1174.24 767.09 1174.24H2.0083C1.4762 1174.24 0.966248 1174.45 0.589966 1174.83C0.213745 1175.21 0.00164795 1175.72 0.000244141 1176.25Z" fill="#3F3D56" />
                </g>
                <g id="person1">
                    <g id="hand-left_1">
                        <path id="Vector_25" d="M604.823 751.187C604.221 748.296 602.992 745.573 601.223 743.209C599.454 740.845 597.189 738.898 594.586 737.505C591.984 736.111 589.107 735.305 586.159 735.144C583.212 734.983 580.265 735.47 577.525 736.571L530.417 682.432L520.411 718.359L566.68 764.263C568.835 768.742 572.557 772.276 577.142 774.194C581.728 776.112 586.857 776.281 591.559 774.669C596.26 773.057 600.208 769.777 602.652 765.449C605.097 761.121 605.87 756.046 604.823 751.187Z" fill="#FFB8B8" />
                        <path id="Vector_26" d="M549.51 754.237L575.419 734.859C576.436 734.099 577.281 733.134 577.899 732.025C578.518 730.917 578.896 729.691 579.009 728.426C579.122 727.162 578.968 725.888 578.556 724.688C578.144 723.487 577.483 722.387 576.618 721.459L422.27 555.817C417.316 550.546 410.636 547.227 403.443 546.462C396.25 545.697 389.022 547.537 383.07 551.648L383.07 551.649C379.443 554.177 376.418 557.475 374.211 561.306C372.004 565.137 370.668 569.407 370.299 573.813C369.93 578.219 370.536 582.653 372.075 586.798C373.614 590.943 376.048 594.697 379.203 597.794L537.77 753.449C539.163 754.83 540.97 755.717 542.914 755.974C544.859 756.231 546.834 755.844 548.538 754.872C548.875 754.681 549.2 754.469 549.51 754.237Z" fill="#DC3545" />
                    </g>
                    <g id="body_2">
                        <path id="Vector_27" d="M346.275 497.13C319.036 497.13 296.954 475.044 296.954 447.801C296.954 420.558 319.036 398.473 346.275 398.473C373.514 398.473 395.595 420.558 395.595 447.801C395.595 475.044 373.514 497.13 346.275 497.13Z" fill="#FFB8B8" />
                        <path id="Vector_28" d="M404.216 1126.79L428.833 1126.79L440.546 1031.81L404.21 1031.81L404.216 1126.79Z" fill="#FFB8B8" />
                        <path id="Vector_29" d="M397.937 1150.65L477.318 1150.65V1149.65C477.318 1145.59 476.519 1141.57 474.966 1137.82C473.413 1134.07 471.137 1130.67 468.268 1127.8C465.399 1124.93 461.993 1122.65 458.244 1121.1C454.496 1119.55 450.478 1118.75 446.42 1118.75H446.418L397.936 1118.75L397.937 1150.65Z" fill="#2F2E41" />
                        <path id="Vector_30" d="M329.917 1152.9L354.534 1152.89L357.943 1060.19L329.91 1057.92L329.917 1152.9Z" fill="#FFB8B8" />
                        <path id="Vector_31" d="M323.638 1176.76L403.019 1176.76V1175.76C403.019 1171.7 402.219 1167.68 400.667 1163.93C399.114 1160.18 396.838 1156.78 393.969 1153.91C391.1 1151.04 387.694 1148.76 383.945 1147.21C380.197 1145.65 376.179 1144.85 372.121 1144.85H372.119L323.637 1144.86L323.638 1176.76Z" fill="#2F2E41" />
                        <path id="Vector_32" d="M336.918 1135.56L356.089 1133.31C358.263 1133.05 360.27 1132.01 361.737 1130.38C363.204 1128.75 364.032 1126.65 364.069 1124.46L367.662 874.738C367.672 874.032 367.93 873.351 368.392 872.816C368.853 872.281 369.488 871.925 370.185 871.81C370.882 871.696 371.598 871.83 372.206 872.19C372.814 872.549 373.277 873.111 373.512 873.777L400.111 948.89L398.209 1089.68C398.176 1092.01 399.041 1094.25 400.622 1095.96C402.204 1097.66 404.381 1098.69 406.7 1098.83L431.729 1099.89C434.018 1100.02 436.272 1099.28 438.039 1097.82C439.806 1096.36 440.955 1094.28 441.256 1092.01L454.328 932.739L454.336 932.639L434.502 766.304L285.536 777.084L326.888 1127.65C327.15 1129.84 328.207 1131.87 329.86 1133.34C331.512 1134.81 333.645 1135.62 335.857 1135.63C336.212 1135.63 336.566 1135.61 336.918 1135.56Z" fill="#2F2E41" />
                        <path id="Vector_33" d="M433.866 781.05C435.203 780.336 436.338 779.295 437.165 778.024C437.992 776.754 438.484 775.295 438.595 773.783C438.595 773.783 425.199 690.465 420.29 688.902L431.031 599.803C432.317 588.936 431.42 577.921 428.392 567.405C425.364 556.89 420.267 547.085 413.398 538.566C406.784 530.302 398.564 523.464 389.235 518.465C379.905 513.466 369.659 510.409 359.116 509.48C357.615 509.344 356.122 509.241 354.637 509.17C341.928 508.489 329.242 510.887 317.658 516.161C306.074 521.435 295.935 529.428 288.101 539.461C279.976 549.58 274.415 561.512 271.89 574.242C269.366 586.973 269.954 600.125 273.604 612.579L279.628 633.546V780.071C279.634 781.501 279.976 782.91 280.625 784.184C281.274 785.458 282.213 786.563 283.366 787.408C302.124 801.177 323.321 806.045 343.921 806.045C382.9 806.045 419.741 788.612 433.866 781.05Z" fill="#27282D" />
                        <path id="Vector_34" d="M309.728 491.9C310.89 492.598 312.197 493.018 313.548 493.13C314.899 493.241 316.257 493.04 317.518 492.542C318.779 492.044 319.908 491.262 320.818 490.257C321.728 489.253 322.395 488.052 322.767 486.749L322.798 486.626C323.802 482.521 323.009 478.226 322.75 474.008C322.49 469.791 322.928 465.161 325.815 462.077C331.198 456.327 340.703 459.441 348.449 458.022C352.988 457.034 357.01 454.426 359.765 450.686C362.52 446.946 363.817 442.33 363.415 437.703C363.309 436.826 363.141 435.947 362.952 435.07C362.48 432.846 362.53 430.542 363.097 428.341C363.665 426.139 364.735 424.099 366.224 422.381C367.712 420.663 369.579 419.313 371.677 418.437C373.775 417.562 376.047 417.185 378.316 417.336C386.134 417.825 394.563 420.24 401.065 414.481C403.449 412.208 405.112 409.284 405.845 406.072C406.578 402.861 406.349 399.505 405.188 396.422C401.55 385.736 391.137 380.096 380.82 376.971C368.059 373.21 354.621 372.339 341.482 374.423C328.342 376.507 315.833 381.494 304.862 389.02C298.31 393.586 292.184 399.335 289.362 406.807C286.54 414.279 287.831 423.731 294.078 428.707C289.188 433.83 285.73 440.148 284.05 447.029C282.371 453.91 282.529 461.111 284.508 467.912C287.553 477.914 302.29 487.566 309.728 491.9Z" fill="#2F2E41" />
                    </g>
                    <g id="hand-right_1">
                        <path id="Vector_35" d="M351.214 732.305C350.082 729.579 348.365 727.133 346.186 725.142C344.006 723.151 341.417 721.661 338.599 720.779C335.782 719.897 332.806 719.644 329.88 720.036C326.954 720.429 324.15 721.459 321.665 723.053L265.265 678.68L262.153 715.845L316.189 752.285C319.143 756.282 323.46 759.057 328.323 760.084C333.186 761.111 338.257 760.317 342.574 757.855C346.892 755.392 350.156 751.431 351.748 746.722C353.341 742.013 353.151 736.883 351.214 732.305Z" fill="#FFB8B8" />
                        <path id="Vector_36" d="M300.733 749.627C302.226 749.163 303.571 748.317 304.636 747.172C305.701 746.028 306.448 744.625 306.803 743.102L312.501 719.17C312.918 717.471 312.827 715.687 312.238 714.039C311.648 712.392 310.587 710.955 309.187 709.907L270.854 668.444L327.239 581.488C331.506 576.233 333.912 569.711 334.079 562.942C334.247 556.174 332.168 549.541 328.166 544.08C324.976 539.729 320.693 536.298 315.75 534.136C310.808 531.973 305.381 531.156 300.021 531.766C294.661 532.377 289.557 534.393 285.227 537.612C280.897 540.83 277.495 545.136 275.364 550.093L222.945 652.141C217.734 662.28 216.434 673.982 219.293 685.017C222.152 696.053 228.971 705.65 238.449 711.982L292.019 747.772C293.659 749.24 295.782 750.053 297.984 750.055C298.916 750.054 299.844 749.909 300.733 749.627Z" fill="#DC3545" />
                    </g>
                </g>
            </g>
        </svg>
    </div>








    <div class="warning-content">
        <h1>Our Community Forum is Under Construction</h1>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100.001px" height="70px" viewBox="0 0 100 68">
            <g id="large">
                <g>
                    <path d="M55.777,38.473l6.221-1.133c0.017-1.791-0.123-3.573-0.41-5.324l-6.321-0.19c-0.438-2.053-1.135-4.048-2.076-5.931
		l4.82-4.094c-0.868-1.552-1.874-3.028-3.005-4.417l-5.569,2.999c-1.385-1.54-2.98-2.921-4.771-4.099l2.124-5.954
		c-0.759-0.452-1.543-0.878-2.357-1.269c-0.811-0.39-1.625-0.732-2.449-1.046l-3.325,5.381c-2.038-0.665-4.113-1.052-6.183-1.174
		L31.34,6.002c-1.792-0.02-3.571,0.119-5.32,0.406l-0.191,6.32c-2.056,0.439-4.051,1.137-5.936,2.08l-4.097-4.82
		c-1.546,0.872-3.022,1.875-4.407,3.006l2.996,5.566c-1.54,1.384-2.925,2.985-4.104,4.778c-2.16-0.771-4.196-1.498-5.953-2.127
		c-0.449,0.765-0.875,1.544-1.265,2.354c-0.39,0.811-0.733,1.63-1.049,2.457c1.587,0.981,3.424,2.119,5.377,3.325
		c-0.662,2.037-1.049,4.117-1.172,6.186l-6.218,1.136c-0.021,1.789,0.12,3.566,0.407,5.321l6.32,0.188
		c0.442,2.06,1.143,4.057,2.082,5.937l-4.818,4.095c0.872,1.549,1.873,3.026,3.009,4.412l5.563-2.998
		c1.392,1.54,2.989,2.92,4.777,4.099l-2.121,5.954c0.756,0.446,1.538,0.871,2.348,1.258c0.813,0.394,1.633,0.739,2.462,1.05
		l3.326-5.375c2.033,0.662,4.109,1.05,6.175,1.17l1.137,6.221c1.791,0.019,3.569-0.123,5.323-0.407l0.194-6.324
		c2.053-0.438,4.045-1.136,5.927-2.079l4.093,4.817c1.55-0.865,3.026-1.87,4.414-2.999l-2.995-5.572
		c1.537-1.385,2.914-2.98,4.093-4.772l5.953,2.127c0.448-0.761,0.878-1.545,1.268-2.356c0.388-0.808,0.729-1.631,1.047-2.458
		l-5.378-3.324C55.268,42.615,55.655,40.542,55.777,38.473z M42.302,42.435c-3.002,6.243-10.495,8.872-16.737,5.866
		c-6.244-2.999-8.872-10.493-5.867-16.736c3.002-6.244,10.495-8.873,16.736-5.869C42.676,28.698,45.306,36.19,42.302,42.435z" fill="none" stroke="#E43" />
                    <animateTransform attributeName="transform" begin="0s" dur="3s" type="rotate" from="0 31 37" to="360 31 37" repeatCount="indefinite" </animateTransform>
                </g>
                <g id="small">
                    <path d="M93.068,19.253L99,16.31c-0.371-1.651-0.934-3.257-1.679-4.776l-6.472,1.404c-0.902-1.436-2.051-2.735-3.42-3.819
		l2.115-6.273c-0.706-0.448-1.443-0.867-2.213-1.238c-0.774-0.371-1.559-0.685-2.351-0.958l-3.584,5.567
		c-1.701-0.39-3.432-0.479-5.118-0.284L73.335,0c-1.652,0.367-3.256,0.931-4.776,1.672l1.404,6.47
		c-1.439,0.899-2.744,2.047-3.835,3.419c-2.208-0.746-4.38-1.476-6.273-2.114c-0.451,0.71-0.874,1.448-1.244,2.229
		c-0.371,0.764-0.68,1.541-0.954,2.329c1.681,1.078,3.612,2.323,5.569,3.579c-0.399,1.711-0.486,3.449-0.291,5.145
		c-2.086,1.034-4.143,2.055-5.936,2.945c0.368,1.648,0.929,3.25,1.67,4.769c1.954-0.426,4.193-0.912,6.468-1.405
		c0.906,1.449,2.06,2.758,3.442,3.853l-2.117,6.27c0.708,0.449,1.439,0.865,2.218,1.236c0.767,0.371,1.551,0.685,2.338,0.96
		c1.081-1.68,2.319-3.612,3.583-5.574c1.714,0.401,3.457,0.484,5.156,0.288L82.695,42c1.651-0.371,3.252-0.931,4.773-1.676
		c-0.425-1.952-0.912-4.194-1.404-6.473c1.439-0.902,2.744-2.057,3.835-3.436l6.273,2.11c0.444-0.7,0.856-1.43,1.225-2.197
		c0.372-0.777,0.691-1.569,0.963-2.361l-5.568-3.586C93.181,22.677,93.269,20.939,93.068,19.253z M84.365,24.062
		c-1.693,3.513-5.908,4.991-9.418,3.302c-3.513-1.689-4.99-5.906-3.301-9.419c1.688-3.513,5.906-4.991,9.417-3.302
		C84.573,16.331,86.05,20.549,84.365,24.062z" fill="none" stroke="#E43" />
                    <animateTransform attributeName="transform" begin="0s" dur="2s" type="rotate" from="0 78 21" to="-360 78 21" repeatCount="indefinite" </animateTransform>
                </g>
        </svg>
        <p>
            Please forgive the inconvenience. <br />
            We are currently initializing our brand new site.
        </p>
        <p>
            It's okay, we're excited too!
        </p>

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