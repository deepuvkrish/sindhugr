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
    <link rel="stylesheet" type="text/css" href="attributes/css/forum.css">

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










    <div class="below-site-header-outlet search-banner">
        <div class="custom-search-banner">
            <div class="wrap custom-search-banner-wrap">
                <h1>Pro Planet Community</h1>


                <p>We're happy to have you here. If you need help, please search before you post.</p>
                <div class="search-menu">


                    <a href="/search?expanded=true" class="btn no-text btn-icon btn search-icon" title="Open advanced search">
                        <svg class="fa d-icon d-icon-search svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                            <use href="#search"></use>
                        </svg> ​

                    </a>


                    <div class="search-menu-container menu-panel-results">
                        <div class="search-input">
                            <!---->



                            <input id="search-term" autocomplete="off" placeholder="Search" aria-label="Search" type="text">

                            <div class="searching">

                                <!---->

                                <!---->

                                <!---->
                                <!---->

                                <button class="btn no-text btn-icon show-advanced-search" title="Open advanced search" type="button">
                                    <svg class="fa d-icon d-icon-sliders-h svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#sliders-h"></use>
                                    </svg> ​

                                </button>


                            </div>
                        </div>

                        <!---->
                    </div>
                    <!---->
                </div>


            </div>
        </div>
    </div>



    <div id="main-outlet-wrapper" class="wrap" role="main">
        <div class="sidebar-wrapper">
            <!---->
        </div>


        <!---->




        <div id="main-outlet">


            <div class="container" id="main-container">
                <div id="ember6" class="ember-view"></div>

                <!---->
                <div id="ember7" class="ember-view"><!----></div>
                <div class="global-notice">
                    <!---->
                </div>


            </div>

            <div class="container">
                <div id="ember9" class="ember-view"><!----></div>
                <!---->
            </div>

            <span>


            </span>






            <div class="container list-container">
                <div class="row">
                    <div class="full-width">
                        <div id="header-list-area">



                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="full-width">


                        <div id="list-area">







                            <div class="contents">
                                <div class="show-more">
                                    <div role="button" class="alert alert-info clickable">

                                        <span>See 17 new or updated topics</span>

                                    </div>
                                </div>




                                <div id="ember21" class="categories-and-latest ember-view">
                                    <div class="column categories">
                                        <div class="coda-column">
                                            <div aria-role="heading" aria-level="2" id="categories-only-category" class="coda-column-header">
                                                <h3 class="headline-3">
                                                    Top Categories
                                                </h3>

                                                <a href="#" class="coda-column-more">See more</a>

                                            </div>
                                            <div class="coda-column-list">
                                                <div id="ember23" class="coda-category ember-view"><a class="coda-column-list-item" href="https://groups.google.com/u/1/g/pro-planet-updates" target="_blank">
                                                        <div class="coda-category-border" style="background-color:#0088CC;"></div>
                                                        <img class="coda-category-icon" src="https://cdn.coda.io/icons/svg/color/ask-question.svg">
                                                        <div class="coda-column-title coda-category-title headline-4">Ask the Community</div>
                                                    </a></div>
                                                <div id="ember24" class="coda-category ember-view"><a class="coda-column-list-item" href="https://groups.google.com/u/1/g/pro-planet-updates" target="_blank">
                                                        <div class="coda-category-border" style="background-color:#F46A54;"></div>
                                                        <img class="coda-category-icon" src="https://cdn.coda.io/icons/svg/color/coda.svg">
                                                        <div class="coda-column-title coda-category-title headline-4">News from Pro Planet</div>
                                                    </a></div>
                                                <div id="ember25" class="coda-category ember-view"><a class="coda-column-list-item" href="https://groups.google.com/u/1/g/pro-planet-updates" target="_blank">
                                                        <div class="coda-category-border" style="background-color:#39B24A;"></div>
                                                        <img class="coda-category-icon" src="https://cdn.coda.io/icons/svg/color/checked-checkbox.svg">
                                                        <div class="coda-column-title coda-category-title headline-4">Join our Community Here</div>
                                                    </a></div>
                                            </div>
                                        </div>

                                        <div id="ember26" class="coda-column coda-champions ember-view">
                                            <div class="coda-column-header">
                                                <h3 class="headline-3">Maker Highlights</h3>
                                                <a href="#" class="coda-column-more">See more</a>
                                            </div>
                                            <div class="coda-column-list">
                                                <a class="coda-column-list-item champion-item" href="edu.php">
                                                    <div class="coda-champion-left">
                                                        <div class="coda-column-title headline-4">💡
                                                            ✴️ Pro Planet Tips — A complete tips from our team about all sustainable development</div>
                                                    </div>
                                                    <div class="coda-champion-right">
                                                        <span class="relative-date" data-time="1708368522050" data-format="tiny">Feb 20</span>
                                                    </div>
                                                </a>
                                                <a class="coda-column-list-item champion-item" href="#">
                                                    <div class="coda-champion-left">
                                                        <div class="coda-column-title headline-4">💡
                                                            New Open Journals</div>
                                                    </div>
                                                    <div class="coda-champion-right">
                                                        <span class="relative-date" data-time="1707592224685" data-format="tiny">Feb 11</span>
                                                    </div>
                                                </a>
                                                <a class="coda-column-list-item champion-item" href="events.php">
                                                    <div class="coda-champion-left">
                                                        <div class="coda-column-title headline-4">💡
                                                            Green GoEvent </div>
                                                    </div>
                                                    <div class="coda-champion-right">
                                                        <span class="relative-date" data-time="1706715946612" data-format="tiny">Jan 31</span>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="lower-column">
                                        <div class="list-controls">


                                            <div class="container">


                                                <!---->
                                                <!---->

                                                <!---->


                                                <section class="navigation-container">
                                                    <ol id="ember11" class="category-breadcrumb ember-view">


                                                        <li>
                                                            <details id="ember12" class="select-kit single-select combobox combo-box category-drop ember-view">
                                                                <summary aria-label="Filter by: categories" name="Filter by: categories" data-name="categories" data-value="" tabindex="0" role="listbox" id="ember12-header" class="select-kit-header single-select-header combo-box-header category-drop-header ember-view">
                                                                    <div class="select-kit-header-wrapper">
                                                                        <div title="categories" data-name="categories" class="select-kit-selected-name selected-name choice">
                                                                            <!---->
                                                                            <!---->
                                                                            <span class="name">
                                                                                categories
                                                                            </span>

                                                                            <!---->
                                                                        </div>


                                                                        <svg class="fa d-icon d-icon-caret-right svg-icon caret-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                                                            <use href="#caret-right"></use>
                                                                        </svg>
                                                                    </div>
                                                                </summary>

                                                                <div id="ember12-body" class="select-kit-body ember-view" style="position: relative;"><!----></div>
                                                            </details>
                                                        </li>

                                                        <li>
                                                            <details id="ember14" class="select-kit single-select combobox combo-box tag-drop tag_all ember-view">
                                                                <summary aria-label="Filter by: tags" name="Filter by: tags" data-name="tags" data-value="" tabindex="0" role="listbox" id="ember14-header" class="select-kit-header single-select-header combo-box-header tag-drop-header ember-view">
                                                                    <div class="select-kit-header-wrapper">
                                                                        <div title="tags" data-name="tags" class="select-kit-selected-name selected-name choice">
                                                                            <!---->
                                                                            <!---->
                                                                            <span class="name">
                                                                                tags
                                                                            </span>

                                                                            <!---->
                                                                        </div>


                                                                        <svg class="fa d-icon d-icon-caret-right svg-icon caret-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                                                            <use href="#caret-right"></use>
                                                                        </svg>
                                                                    </div>
                                                                </summary>

                                                                <div id="ember14-body" class="select-kit-body ember-view" style="position: relative;"><!----></div>
                                                            </details>
                                                        </li>


                                                        <!---->


                                                        <!---->
                                                    </ol>

                                                    <ul id="navigation-bar" class="nav nav-pills ember-view">
                                                        <li title="all topics grouped by category" id="ember16" class="active categories ember-view nav-item_categories"><a href="/categories" class="active" aria-current="true">
                                                                <!----> Categories
                                                            </a></li>
                                                        <li title="topics with recent posts" id="ember17" class="latest ember-view nav-item_latest"><a href="/latest" class="">
                                                                <!----> Latest
                                                            </a></li>
                                                        <li title="the most active topics in the last year, month, week or day" id="ember18" class="top ember-view nav-item_top"><a href="/top" class="">
                                                                <!----> Top
                                                            </a></li>


                                                    </ul>

                                                    <div class="navigation-controls">
                                                        <!---->
                                                        <div class="row dismiss-container-top"><!----><!----></div>


                                                        <!---->
                                                        <!---->
                                                        <!---->



                                                        <!---->




                                                        <!---->
                                                        <!---->
                                                    </div>

                                                    <!---->
                                                    <!---->
                                                </section>

                                            </div>
                                        </div>
                                        <div class="column-widgets">
                                            <div id="ember27" class="coda-widget coda-featured ember-view">
                                                <h4 class="widget-header widget-header-featured">
                                                    <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/6/e/6ec049a998b5d5688bfdb5aa704f2a766e8d0708.png" class="featured-megaphone">
                                                    Launched: Pro Planet Events!
                                                </h4>
                                                <div class="coda-featured-body body-3">
                                                    <div class="coda-featured-content">
                                                        Show us how you evolve the sustainable living for a chance to win great prizes.
                                                    </div>
                                                    <div class="coda-ad-time">
                                                        <img src="https://community.coda.io/user_avatar/community.coda.io/shishir/100/6017_2.png">
                                                        <div class="widget-status-time">224d ago</div>
                                                    </div>
                                                    <a href="events.php" class="body-3">Learn more
                                                    </a>
                                                </div>

                                            </div>
                                            <div id="ember28" class="coda-widget coda-ad ember-view">
                                                <h3 class="widget-header">Posted: Improvements to Global Warming</h3>
                                                <div class="coda-ad-time body-3">
                                                    <img src="https://community.coda.io/user_avatar/community.coda.io/sam_harper/100/33549_2.png">
                                                    <div class="widget-status-time">225d ago</div>
                                                </div>
                                                <a href="edu.php" class="body-3">Learn more
                                                </a>
                                            </div>
                                            <div id="ember29" class="coda-widget coda-status ember-view custom-cursor-on-hover">
                                                <h3 class="widget-header custom-cursor-on-hover">Infi Status</h3>
                                                <div class="widget-status-details">
                                                    <div class="widget-status-indicator" style="background: #39b24a"></div>
                                                    <div class="body-3" style="color: #212121">Healthy</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div id="ember30" class="latest-topic-list ember-view">
                                                <div role="heading" aria-level="2" class="table-heading">
                                                    Latest


                                                </div>

                                                <div data-topic-id="45085" id="ember31" class="latest-topic-list-item category-news-from-coda ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Leo_Choi" href="#" id="ember32" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/leo_choi/96/31510_2.png" class="avatar" title="Leo_Choi">
                                                        </a>
                                                        <div id="ember34" class="ember-view"><!---->
                                                            <div class="avatar-flair avatar-flair-coda-team  avatar-flair-image" style="background-image: url(https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/8/0/805daa70ac972d8e1bff79288088c53ccf9c1612.png); " title="coda-team"></div>
                                                        </div>

                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="45085">Launched: Native dependencies for easy and powerful project management</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #F46A54;--category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="10" data-drop-close="true" class="badge-category" title="The latest Coda feature releases and announcements."><span class="badge-category__name">News from Pro Planet</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts heatmap-med topic-list-data" title="This topic has 17 replies with a very high like to post ratio">
                                                            <button class="btn-link posts-map badge-posts heatmap-med" aria-label="This topic has 17 replies with a very high like to post ratio">

                                                                <span class="number">17</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                17
                                                            </a>
                                                            <a href="#" title="Created: Dec 12, 2023 11:36 pm Latest: May 15, 2024 6:16 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715777216334" data-format="tiny">3h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48402" id="ember35" class="latest-topic-list-item category-marketplace-requests-gigs ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Dean_Gammell" href="#" id="ember36" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/dean_gammell/96/42147_2.png" class="avatar" title="Dean_Gammell">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48402">Freelance Help for Pro planet table for my company</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #AB9364;--category-badge-text-color: #FFFFFF;--parent-category-badge-color: #EB3D82;--parent-category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="40" data-parent-category-id="38" data-drop-close="true" class="badge-category --has-parent" title="An area to post your project requests and paid gigs. Please title each topic as Request or Gig for a quick response."><span class="badge-category__name">Requests and Gigs</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 3 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 3 replies">

                                                                <span class="number">3</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                3
                                                            </a>
                                                            <a href="#" title="Created: May 3, 2024 2:37 am Latest: May 15, 2024 5:53 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715775834595" data-format="tiny">4h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48686" id="ember38" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="James_Naylor" href="#" id="ember39" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/james_naylor/96/8493_2.png" class="avatar" title="James_Naylor">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <div class="topic-statuses">
                                                                <span title="This topic has a solution" class="topic-status"><svg class="fa d-icon d-icon-far-check-square svg-icon solved svg-string" xmlns="http://www.w3.org/2000/svg">
                                                                        <use href="#far-check-square"></use>
                                                                    </svg></span>
                                                            </div>

                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48686">Very unpleasant new visuals for auto-populated fields - any way to change?</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><span class="topic-status-solved">Solved</span>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 4 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 4 replies">

                                                                <span class="number">4</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                4
                                                            </a>
                                                            <a href="#" title="Created: May 14, 2024 8:59 pm Latest: May 15, 2024 3:38 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715767697003" data-format="tiny">6h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="41956" id="ember41" class="latest-topic-list-item category-showcase-tipsandhacks ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Rickard_Abraham" href="#" id="ember42" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/rickard_abraham/96/35007_2.png" class="avatar" title="Rickard_Abraham">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="41956">Released Pack: Google Drive Extra</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #F6A524;--category-badge-text-color: #FFFFFF;--parent-category-badge-color: #662D8E;--parent-category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="12" data-parent-category-id="32" data-drop-close="true" class="badge-category --has-parent" title="Pro tips, hidden formulas, and creative solutions to common use cases."><span class="badge-category__name">Tips and Hacks</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 6 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 6 replies">

                                                                <span class="number">6</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                6
                                                            </a>
                                                            <a href="#" title="Created: Aug 10, 2023 5:52 pm
Latest: May 15, 2024 3:21 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715766705391" data-format="tiny">6h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48666" id="ember44" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Abbirah_Athithan" href="#" id="ember45" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://avatars.discourse-cdn.com/v4/letter/a/c0e974/96.png" class="avatar" title="Abbirah_Athithan">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48666">How do you get a table sync from one page to another using cross doc</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 3 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 3 replies">

                                                                <span class="number">3</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                3
                                                            </a>
                                                            <a href="#" title="Created: May 14, 2024 1:59 am
Latest: May 15, 2024 3:15 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715766346279" data-format="tiny">6h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48688" id="ember47" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Jannis" href="#" id="ember48" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/jannis/96/34283_2.png" class="avatar" title="Jannis">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <div class="topic-statuses">
                                                                <span title="This topic has a solution" class="topic-status"><svg class="fa d-icon d-icon-far-check-square svg-icon solved svg-string" xmlns="http://www.w3.org/2000/svg">
                                                                        <use href="#far-check-square"></use>
                                                                    </svg></span>
                                                            </div>

                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48688">Sustainable living tips for children</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><span class="topic-status-solved">Solved</span>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 2 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 2 replies">

                                                                <span class="number">2</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                2
                                                            </a>
                                                            <a href="#" title="Created: May 14, 2024 11:48 pm Latest: May 15, 2024 3:07 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715765856204" data-format="tiny">7h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48703" id="ember50" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Gregg_Stebben" href="#" id="ember51" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/gregg_stebben/96/597_2.png" class="avatar" title="Gregg_Stebben">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48703">Filter formula from cell?</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 0 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 0 replies">

                                                                <span class="number">0</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                0
                                                            </a>
                                                            <a href="#" title="Created: May 15, 2024 2:04 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715762048536" data-format="tiny">8h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48505" id="ember53" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Vitaliy_Malanchuk" href="#" id="ember54" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/vitaliy_malanchuk/96/35786_2.png" class="avatar" title="Vitaliy_Malanchuk">
                                                        </a>
                                                        <div id="ember56" class="ember-view"><!---->
                                                            <div class="avatar-flair avatar-flair-Doctorate  avatar-flair-image" style="background-image: url(https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/e/b/ebe7a028615ace8f0f17fe1a9f79d7df52fd4eb4.png); " title="Doctorate"></div>
                                                        </div>

                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48505">What additional features do you believe are necessary for CO2 Emmision to be reduced?</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts heatmap-low topic-list-data" title="This topic has 13 replies with a high like to post ratio">
                                                            <button class="btn-link posts-map badge-posts heatmap-low" aria-label="This topic has 13 replies with a high like to post ratio">

                                                                <span class="number">13</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                13
                                                            </a>
                                                            <a href="#" title="Created: May 8, 2024 2:26 am Latest: May 15, 2024 12:53 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715757833545" data-format="tiny">9h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48698" id="ember57" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Rai_Cornell" href="#" id="ember58" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/rai_cornell/96/39703_2.png" class="avatar" title="Rai_Cornell">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48698">Recycling plastic daily</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 1 reply">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 1 reply">

                                                                <span class="number">1</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                1
                                                            </a>
                                                            <a href="#" title="Created: May 15, 2024 8:24 am
Latest: May 15, 2024 12:50 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715757621000" data-format="tiny">9h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48547" id="ember60" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Alberto_Delgado" href="#" id="ember61" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/alberto_delgado/96/37263_2.png" class="avatar" title="Alberto_Delgado">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48547">Is green gas farming effective?</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 4 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 4 replies">

                                                                <span class="number">4</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                4
                                                            </a>
                                                            <a href="#" title="Created: May 9, 2024 8:33 am Latest: May 15, 2024 5:57 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715732840258" data-format="tiny">16h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48672" id="ember63" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="SALEM_MALIBARY" href="#" id="ember64" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/salem_malibary/96/42257_2.png" class="avatar" title="SALEM_MALIBARY">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <div class="topic-statuses">
                                                                <span title="This topic has a solution" class="topic-status"><svg class="fa d-icon d-icon-far-check-square svg-icon solved svg-string" xmlns="http://www.w3.org/2000/svg">
                                                                        <use href="#far-check-square"></use>
                                                                    </svg></span>
                                                            </div>

                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48672">How to reduce carbon footprint</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><span class="topic-status-solved">Solved</span>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 2 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 2 replies">

                                                                <span class="number">2</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                2
                                                            </a>
                                                            <a href="#" title="Created: May 14, 2024 9:58 am
Latest: May 15, 2024 5:32 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715731361398" data-format="tiny">16h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48382" id="ember66" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Matty_Stratton" href="#" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/matty_stratton/96/41941_2.png" class="avatar" title="Matty_Stratton">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48382">How to get pro planet merchandise</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 2 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 2 replies">

                                                                <span class="number">2</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                2
                                                            </a>
                                                            <a href="#" title="Created: May 2, 2024 7:03 pm
Latest: May 15, 2024 4:40 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715728223733" data-format="tiny">17h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48260" id="ember69" class="latest-topic-list-item category-suggestionbox ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Robert_C" href="#" id="ember70" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/robert_c/96/39618_2.png" class="avatar" title="Robert_C">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48260">Fix excess co2 footprint</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #39B24A;--category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="7" data-drop-close="true" class="badge-category" title="Suggest ideas and debate our roadmap with the Coda team."><span class="badge-category__name">Suggestion Box</span></span></a>
                                                            <div class="discourse-tags" role="list" aria-label="Tags"><a href="#" class="list-vote-count vote-count-0 discourse-tag simple">0 votes</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 1 reply">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 1 reply">

                                                                <span class="number">1</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                1
                                                            </a>
                                                            <a href="#" title="Created: Apr 25, 2024 11:41 pm
Latest: May 15, 2024 2:49 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715721559058" data-format="tiny">19h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48693" id="ember72" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Troy_Larson" href="#" id="ember73" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/troy_larson/96/29176_2.png" class="avatar" title="Troy_Larson">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48693">DISCUSSION: What’s your favorite go-to trick for making pro planet docs visually pop?</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 0 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 0 replies">

                                                                <span class="number">0</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                0
                                                            </a>
                                                            <a href="#" title="Created: May 15, 2024 2:40 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715721059444" data-format="tiny">19h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48314" id="ember75" class="latest-topic-list-item category-ask-the-community ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Troy_Larson" href="#" id="ember76" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/troy_larson/96/29176_2.png" class="avatar" title="Troy_Larson">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48314">DISCUSSION: What are most common mistakes you see in larger pro planet implementations?</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #0088CC;--category-badge-text-color: #00ABEC;" href="#"><span data-category-id="1" data-drop-close="true" class="badge-category" title="The “anybody-know-how-to-do-this??” thread"><span class="badge-category__name">Ask the Community</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts heatmap-low topic-list-data" title="This topic has 14 replies with a high like to post ratio">
                                                            <button class="btn-link posts-map badge-posts heatmap-low" aria-label="This topic has 14 replies with a high like to post ratio">

                                                                <span class="number">14</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                14
                                                            </a>
                                                            <a href="#" title="Created: Apr 30, 2024 5:08 am
Latest: May 15, 2024 2:36 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715720760963" data-format="tiny">19h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="46406" id="ember78" class="latest-topic-list-item category-news-from-coda ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Randy_Yan" href="#" id="ember79" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/randy_yan/96/30250_2.png" class="avatar" title="Randy_Yan">
                                                        </a>
                                                        <div id="ember81" class="ember-view"><!---->
                                                            <div class="avatar-flair avatar-flair-coda-team  avatar-flair-image" style="background-image: url(https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/8/0/805daa70ac972d8e1bff79288088c53ccf9c1612.png); " title="coda-team"></div>
                                                        </div>

                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="46406">Launched: More insight into your team’s productivity with new AI analytics</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #F46A54;--category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="10" data-drop-close="true" class="badge-category" title="The latest Coda feature releases and announcements."><span class="badge-category__name">News from Proplanet</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 1 reply">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 1 reply">

                                                                <span class="number">1</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                1
                                                            </a>
                                                            <a href="#" title="Created: Feb 8, 2024 1:42 am
Latest: May 15, 2024 2:02 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715718748533" data-format="tiny">20h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="22224" id="ember82" class="latest-topic-list-item category-suggestionbox ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Johg_Ananda" href="#" id="ember83" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/johg_ananda/96/13930_2.png" class="avatar" title="Johg_Ananda">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="22224">Eco Friendly products for kids and old people</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #39B24A;--category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="7" data-drop-close="true" class="badge-category" title="Suggest ideas and debate our roadmap with the Coda team."><span class="badge-category__name">Suggestion Box</span></span></a>
                                                            <div class="discourse-tags" role="list" aria-label="Tags"><a href="#" class="list-vote-count vote-count-1 discourse-tag simple">1 vote</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 3 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 3 replies">

                                                                <span class="number">3</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                3
                                                            </a>
                                                            <a href="#" title="Created: Mar 18, 2021 2:57 am
Latest: May 15, 2024 1:52 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715718127038" data-format="tiny">20h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="48616" id="ember85" class="latest-topic-list-item category-suggestionbox-bugs ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Matthew_Strax-Haber" href="#" id="ember86" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://avatars.discourse-cdn.com/v4/letter/m/85f322/96.png" class="avatar" title="Matthew_Strax-Haber">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="48616">Forest wild fire protection</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #BC322D;--category-badge-text-color: #FFFFFF;--parent-category-badge-color: #39B24A;--parent-category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="20" data-parent-category-id="7" data-drop-close="true" class="badge-category --has-parent" title="File your bugs here. Feel free to tag @Shaina_Torgerson if it is urgent."><span class="badge-category__name">Bugs</span></span></a><!---->
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 1 reply">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 1 reply">

                                                                <span class="number">1</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                1
                                                            </a>
                                                            <a href="#" title="Created: May 12, 2024 11:40 pm
Latest: May 15, 2024 1:38 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715717336205" data-format="tiny">20h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="6502" id="ember88" class="latest-topic-list-item category-suggestionbox ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Nuutti_Kotivuori1" href="#" id="ember89" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/nuutti_kotivuori1/96/6277_2.png" class="avatar" title="Nuutti_Kotivuori1">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="6502">Multiline text boxes in layouts</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #39B24A;--category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="7" data-drop-close="true" class="badge-category" title="Suggest ideas and debate our roadmap with the Coda team."><span class="badge-category__name">Suggestion Box</span></span></a>
                                                            <div class="discourse-tags" role="list" aria-label="Tags"><a href="#" class="list-vote-count vote-count-6 discourse-tag simple">6 votes</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 11 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 11 replies">

                                                                <span class="number">11</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                11
                                                            </a>
                                                            <a href="#" title="Created: Feb 21, 2019 10:23 pm
Latest: May 15, 2024 12:04 am" class="topic-list-item-duration"><span class="relative-date" data-time="1715711655196" data-format="tiny">22h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-topic-id="44374" id="ember91" class="latest-topic-list-item category-suggestionbox ember-view">

                                                    <div class="topic-poster">
                                                        <a data-user-card="Akash_Agarwal" href="#" id="ember92" class="ember-view"> <img loading="lazy" alt="" width="48" height="48" src="https://sea2.discourse-cdn.com/business6/user_avatar/community.coda.io/akash_agarwal/96/37437_2.png" class="avatar" title="Akash_Agarwal">
                                                        </a> <!---->
                                                    </div>
                                                    <div class="main-link">
                                                        <div class="top-row">
                                                            <!---->
                                                            <a href="#" role="heading" aria-level="2" class="title" data-topic-id="44374">Terrace Farming ideas</a>
                                                            <!---->
                                                            <span class="topic-post-badges"><!----><!----></span>

                                                        </div>
                                                        <div class="bottom-row">
                                                            <a class="badge-category__wrapper " style="--category-badge-color: #39B24A;--category-badge-text-color: #FFFFFF;" href="#"><span data-category-id="7" data-drop-close="true" class="badge-category" title="Suggest ideas and debate our roadmap with the Coda team."><span class="badge-category__name">Suggestion Box</span></span></a>
                                                            <div class="discourse-tags" role="list" aria-label="Tags"><a href="#" class="list-vote-count vote-count-1 discourse-tag simple">1 vote</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="topic-stats">
                                                        <div class="num posts-map posts  topic-list-data" title="This topic has 5 replies">
                                                            <button class="btn-link posts-map badge-posts " aria-label="This topic has 5 replies">

                                                                <span class="number">5</span>
                                                            </button>
                                                        </div>

                                                        <div class="topic-last-activity">
                                                            <a class="num-of-replies" href="#">
                                                                <img src="https://global.discourse-cdn.com/business6/uploads/coda1/original/3X/b/5/b512e5462c86530abc7ca7eac600b6f516bea0a3.png" class="num-replies-image">
                                                                5
                                                            </a>
                                                            <a href="#" title="Created: Nov 12, 2023 3:52 am
Latest: May 14, 2024 11:53 pm" class="topic-list-item-duration"><span class="relative-date" data-time="1715710985796" data-format="tiny">22h</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="more-topics">
                                                    <a href="#" class="btn btn-default pull-right">More</a>
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

            <span>


            </span>


            <!---->

            <div id="user-card" class="user-card show-badges no-bg group-undefined ember-view" role="dialog"><!----></div>



            <div id="group-card" class="no-bg group-card show-badges ember-view"><!----></div>



        </div>




        <!---->
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