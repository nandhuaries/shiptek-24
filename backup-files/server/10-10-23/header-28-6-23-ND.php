<?php
$pagename=basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!--<title>ShipTek 2024</title>-->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="styleNd.css">
    <link rel="stylesheet" href="video.css" />
    <link rel="stylesheet" href="styleNd.css" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet" />
    <!-- font aswome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <!-- end font aswome -->

    <link rel="shortcut icon" href="pics/logos/favicon.png" type="image/x-icon" />
    <link rel="icon" href="pics/logos/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta property="og:image" content="https://shiptekmaritimeevents.com/shiptek-2024/pics/logos/shipeve.png"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:image:width" content="350"/>
<meta property="og:image:height" content="58"/>

 <?php  if($pagename=="index.php") { ?> 
    <title>ShipTek 2024</title>
    <meta property="og:title" content="ShipTek 2024" />
  <meta property="og:url" content="http://shiptekmaritimeevents.com/shiptek-2024/">


<?php } if($pagename=="blog-full.php") { ?> 
    <title>Blog | ShipTek 2024</title>
    <meta property="og:title" content="Blog | ShipTek 2024" />
    <meta property="og:url" 
    content="http://shiptekmaritimeevents.com/shiptek-2024/blog-full">
<?php } if($pagename=="delegate-registration.php") { ?> 
    <title>Delegate Registration | ShipTek 2024</title>
    <meta property="og:title" content="Delegate Registration | ShipTek 2024" />
    <meta property="og:url" 
    content="http://shiptekmaritimeevents.com/shiptek-2024/delegate-registration">
<?php } if($pagename=="nomination-registration.php") { ?> 
    <title>Nomination | ShipTek 2024</title>
    <meta property="og:title" content="Nomination | ShipTek 2024" />
    <meta property="og:url" content="https://www.shiptekmaritimeevents.com/shiptek-2024/nomination-registration">
  <?php } if($pagename=="sponsorship-enquiry-form.php") { ?> 
    <title>Sponsorship Enquiry | ShipTek 2024</title>
    <meta property="og:title" content="Sponsorship Enquiry | ShipTek 2024" />
    <meta property="og:url" content="https://www.shiptekmaritimeevents.com/shiptek-2024/sponsorship-enquiry-form">


    <?php } ?>
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- Header span -->

        <!-- Main Header-->
        <header class="main-header">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="index"><img class="logo23" src="pics/logos/navLogo.png" alt="" title="" /></a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <span class="icon flaticon-menu"></span>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown">
                                        <a href="index">Home</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="index#about">About Us</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="index#speakers">Speakers</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="index#sponsors">Sponsors</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://www.shiptekmaritimeevents.com/gallery" target="_blank" >Gallery</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="index#agenda">Agenda</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="Javascript: void(0)">Previous Editions</a>
                                        <ul>
                                            <li>
                                                <a href="https://www.shiptekmaritimeevents.com/shiptek-india/" target="_blank">ShipTek 2023 India</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptekmaritimeevents.com/shiptek-singapore" target="_blank">ShipTek 2023 Singapore</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptekmaritimeevents.com/shiptek-2023/" target="_blank">ShipTek 2023 Dubai</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptekmaritimeevents.com/shiptek-greece" target="_blank">ShipTek 2022 Greece</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptekmaritimeevents.com/shiptek-2022/" target="_blank">ShipTek 2022 Dubai</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptek20.com/" target="_blank">ShipTek 2021</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptek2019.com/shiptek-uaechapter.php" target="_blank">ShipTek 2019 UAE Chapter</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptek2018.com/" target="_blank">ShipTek 2018</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptek2017.com/" target="_blank">ShipTek 2017</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptek2013.com/" target="_blank">ShipTek 2013</a>
                                            </li>
                                            <li>
                                                <a href="https://www.shiptek2011.com/" target="_blank">ShipTek 2011</a>
                                            </li>
                                            <li>
                                                <a href="http://shiptek2010.com/" target="_blank">ShipTek 2010</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer box -->
                        <div class="outer-box">
                            <!--Search Box-->
                            <!-- <div class="search-box-outer">
                                <div class="search-box-btn"><span class="flaticon-search"></span></div>
                            </div> -->

                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="index#contact" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn">
                    <span class="icon flaticon-cancel-1"></span>
                </div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index"><img class="logo23" src="pics/logos/navLogo.png" alt="" title="" /></a>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>
        <!--End Main Header -->