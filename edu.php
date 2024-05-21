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
	<link rel="stylesheet" type="text/css" href="attributes/css/edu.css">

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
						<a class="nav-link navbar-active" href="edu.php">Educational Content</a>
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


	<div class="edu_section_1">
		<div class="main_video_section" id="video_suggestion_id">
			<iframe width="965" height="500" src="https://www.youtube.com/embed/VzC6w0DdEtA?si=rrOTv-pCFfpbsWJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video1"></iframe>

			<iframe width="965" height="500" src="https://www.youtube.com/embed/xtf1eHBlh14?si=WidVduC9nZEobtrP&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video2"></iframe>

			<iframe width="965" height="500" src="https://www.youtube.com/embed/TPG6E4nxtSw?si=8w_B3vXx4R4kzLN_&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video3"></iframe>

			<iframe width="965" height="500" src="https://www.youtube.com/embed/7tYG3MepUu0?si=-KoCv9FkL-Gg-yPZ&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video4"></iframe>

			<iframe width="965" height="500" src="https://www.youtube.com/embed/xpAnLXc_bIU?si=LFeO5MSm5sYdTPdK&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video5"></iframe>

			<iframe width="965" height="500" src="https://www.youtube.com/embed/fABjb1pszrI?si=5WlwzXLk8PlqA5v4&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video6"> </iframe>
		</div>
		<div class="side_suggestions">
			<div class="suggestion_thumb" onclick="suggestion1()">
				<h6>How to Massive Impact without Going Fully Zero Waste</h6>
				<p>Exploring Alternatives</p>
			</div>
			<div class="suggestion_thumb" onclick="suggestion2()">
				<h6>Save Planet | Global Warming</h6>
				<p>Utku Demircan</p>
			</div>
			<div class="suggestion_thumb" onclick="suggestion3()">
				<h6>Responsible Consumption for Kids - The 3R Principle: Reduce, Reuse and Recycle</h6>
				<p>Smile and Learn - English</p>
			</div>
			<div class="suggestion_thumb" onclick="suggestion4()">
				<h6>How walls of moss could help reduce urban air pollution</h6>
				<p>BBC News</p>
			</div>
			<div class="suggestion_thumb" onclick="suggestion5()">
				<h6>Importance of Recycling - Animated Video For Kids</h6>
				<p>Nuevo.Pictures</p>
			</div>
			<div class="suggestion_thumb" onclick="suggestion6()">
				<h6>10 Easy Ways to Remove Plastic From Your Life | Going zero waste</h6>
				<p>Everlane</p>
			</div>
		</div>
	</div>


	<div class="edu_section">




	</div>
	<div class="edu_section_2">

		<div class="edu_section_2_title">
			<div class="section-heading">
				<h4>Knowledge <em>Tips</em> &amp; News</h4>
			</div>
		</div>

		<div class="big_thumbs">
			<div class="bthumb">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/J_iDcKDAwbA?si=A73zPFc5RX4Tzla5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<h5>How to reduce carbon Foot print</h5>

			</div>
			<div class="bthumb">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/hIwiIBorX3E?si=kucBwCWtgUfllUPB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<h5>The Cumulative CO2 Emissions by Country Since 1882 </h5>
			</div>

		</div>
		<div class="gallery small_thumbs">
			<div class="single-video">
				<figure>
					<iframe src="https://www.youtube.com/embed/HK8LLWSIIm4?si=1hpk1SCMc_MfrkhD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</figure>
				<h6>Climate Science in a Nutshell #4</h6>
			</div>
			<div class="single-video">
				<figure>
					<iframe src="https://www.youtube.com/embed/uynhvHZUOOo?si=yEnr5Bj41IsGFIB3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</figure>
				<h6>See what 3 degrees of global warming looks like.</h6>
			</div>
			<div class="single-video">
				<figure>
					<iframe src="https://www.youtube.com/embed/QwLyscT3NgI?si=JtTgj_WjccikAxwB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</figure>
				<h6>Change in climate change</h6>
			</div>
			<div class="single-video">
				<figure>
					<iframe src="https://www.youtube.com/embed/93T1o6_nU88?si=mLcyd9utEsOpK50l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

				</figure>
				<h6>Carbon Footprints and Food </h6>
			</div>
			<div class="single-video">
				<figure>
					<iframe src="https://www.youtube.com/embed/5bVDpmzMICE?si=qIAPCC17kM0kVZhK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</figure>
				<h6>What is Sustainable Living</h6>
			</div>
		</div>

		<div class="big_thumbs_2">
			<div class="bthumb">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/m5ych9oDtk0?si=UWJ77Oo7sTgSAR5_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<h5>How do carbon market works? </h5>

			</div>
			<div class="bthumb">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/dRvkOFdfW7k?si=eyE6Vz3h_NlfI1WX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<h5>The rise of carbon removal industry </h5>

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

		let videosug1 = document.getElementById('video1');
		let videosug2 = document.getElementById('video2');
		let videosug3 = document.getElementById('video3');
		let videosug4 = document.getElementById('video4');
		let videosug5 = document.getElementById('video5');
		let videosug6 = document.getElementById('video6');

		function suggestion1() {
			videosug1.style.display = "block";
			videosug2.style.display = "none";
			videosug3.style.display = "none";
			videosug4.style.display = "none";
			videosug5.style.display = "none";
			videosug6.style.display = "none";

		}

		function suggestion2() {
			videosug1.style.display = "none";
			videosug2.style.display = "block";
			videosug3.style.display = "none";
			videosug4.style.display = "none";
			videosug5.style.display = "none";
			videosug6.style.display = "none";
		}

		function suggestion3() {
			videosug1.style.display = "none";
			videosug2.style.display = "none";
			videosug3.style.display = "block";
			videosug4.style.display = "none";
			videosug5.style.display = "none";
			videosug6.style.display = "none";
		}

		function suggestion4() {

			videosug1.style.display = "none";
			videosug2.style.display = "none";
			videosug3.style.display = "none";
			videosug4.style.display = "block";
			videosug5.style.display = "none";
			videosug6.style.display = "none";
		}

		function suggestion5() {
			videosug1.style.display = "none";
			videosug2.style.display = "none";
			videosug3.style.display = "none";
			videosug4.style.display = "none";
			videosug5.style.display = "block";
			videosug6.style.display = "none";
		}

		function suggestion6() {
			videosug1.style.display = "none";
			videosug2.style.display = "none";
			videosug3.style.display = "none";
			videosug4.style.display = "none";
			videosug5.style.display = "none";
			videosug6.style.display = "block";
		}
	</script>
</body>





</html>