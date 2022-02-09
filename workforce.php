
<?php

require_once 'admin/db.php';

$sql = 'SELECT * FROM workforcepost';

$statement = $connection->prepare($sql);

$statement->execute();

$content = $statement->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>widerdebate | TIDE</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Calling Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Calling Favicon -->
    <!-- ********************* -->
    <!-- CSS files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/meanmenu.css" media="all">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" class="color-changing" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- End CSS files -->
</head>

<body>
    <!-- Preloader start -->
    <div class="loader-page flex-center">
        <img src="img/loader.gif" alt="loader">
    </div>
    <!-- Preloader end -->
    <!-- Header start -->

    <header>
        <section class="top-header">
            <div class="container">
                <div class="row d-flex  align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="left-head-top d-flex">
                            <div class="contact-head logo-2">
                                <a href="index.php">
                                    <img src="img/logo/logo-2.png" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="bottom-head transition-4 bg-blue">
            <div class="container ">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-9 text-left p-md-0">
                        <div class="menu-links-2">
                            <nav class="main-menu main-menu-2 white">
                                <ul>
                                    <li class="active">
                                        <a href="index.php">Home</i></a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us <i class="fas fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li>
                                                <a href="team.html" class="sub-2">BOARD OF VISITORS</a>
                                                <ul class="submenu">
                                                    <li><a href="debora.html">Deborah </a></li>
                                                    <li><a href="ibitoye.html">Ibitoye </a></li>
                                                    <li><a href="albert.html">Albert </a></li>
                                                    <li><a href="emmanuel.html">Emmanuel  </a></li>
                                                </ul>
                                            </li> 
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="parl.php">PARL</i></a>
                                    </li>
                                    <li>
                                        <a href="workforce.php">Workforce</i></a>
                                    </li>
                                    <li>
                                        <a href="roundtable.php">Roundtable</i></a>
                                    </li>
                                    <li>
                                        <a href="widerdebate.php">Wider debates</i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-2"></div>
                    </div>
                   
                </div>
            </div>
        </section>
    </header>

    <div class="search-popup modal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group relative">
                            <input type="text" class="form-control input-search" id="search" placeholder="Search here...">
                            <i class="fas fa-search transform-v-center"></i>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <i class="fas fa-times close-search-modal" data-dismiss="modal" aria-label="Close"></i>
    </div>
    <!-- Header end -->

    <!-- immer banner start -->
    <section class="inner-banner pt-80 pb-95" style="background-image: url('img/banner/inner-banner.jpg');" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">Workforce</h1>
                    <span class="green-line bg-green d-none d-md-inline-block"></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <nav aria-label="breadcrumb" class="banner-breadcump">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home fs-12 mr-5"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Workforce</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio deetails area start -->
    <section class="case-details pt-90 pb-100">
        <div class="container">
           
            <div class="row">
            <div class="col-lg-5">
                    <h5 class="fs-19 lh-19 case-quote pr-40 mb-md-30 pr-sm-00" style="text-align:justify; font-size:16px;">
                    <?php foreach($content as $cont): ?>
                    
                    <?= $cont->content1; ?>

                  <?php endforeach; ?>  

                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p class="mb-30" style="text-align:justify; font-size:16px;">
                    <?php foreach($content as $cont): ?>
                    
                         <?= $cont->content2; ?>

                  <?php endforeach; ?>  

                        </p>
               </div>
            </div>
           
               
            </div>
           
            
        </div>
    </section>
    <!-- portfolio deetails area end -->

      <!-- Footer area start -->
      <footer class="footer-area">
        <div class="container">
            <div class="row mb-sm-50 mb-xs-00">
                <div class="col-lg-4 z-5">
                    <div class="contact-area relative h-100 mr-lg-20 mr-md-00">
                        <div class="footer-logo mb-35">
                            <img src="img/logo/logo_footer.png" alt="">
                        </div>
                        <div class="contact-options mb-35">
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt green"></i>139 Old Ikang Road, Calabar
                                </li>
                                <li>
                                    <i class="fas fa-phone green"></i>+2348100397803
                                </li>
                                <li>
                                    <i class="fas fa-envelope green"></i>info@example.com
                                </li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://facebook.com/TideRoundtable/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/theroundtable97"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://youtu.com/channel/UCs6FgYUhUTcvg-nCffbT-Lg"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/the_roundtable97/"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="footer-links pt-85 pt-md-50 mb-sm-70" >
                        <h5 class="green f-700 mb-35">Quick Links</h5>
                        <ul class="links-list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="parl.php">PARL</a></li>
                            <li><a href="roundtable.php">Roundtable</a></li>
                            <li><a href="team.html">Board of Visitors</a></li>
                            <li><a href="widerdebate.php">widerdebate</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="footer-links pt-85 pt-md-50 mb-sm-70">
                        <h5 class="green f-700 mb-35">Our Programmes</h5>
                        <ul class="links-list">
                            <li><a href="#">scholarships</a></li>
                            <li><a href="#">SPACE</a></li>
                            <li><a href="#">Infrastructure</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="footer-links pt-85 pt-md-50 mb-50">
                        <h5 class="green f-700 mb-35">Need Help?</h5>
                        <ul class="links-list">
                            <li><a href="#">FAQS</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="copyright pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <p class="mb-0 white">© Copyrights 2022 TIDE. All rights reserved</p>
                    </div>
                    <div class="col-xl-4 text-right">
                        <a href="#" class="btn scroll-btn f-right flex-center z-25 opacity-0">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer area end -->
    <!-- ********************* -->
   
    <!-- JS Files -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/lightslider.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/main.js"></script>
    <!-- JS Files end -->
</body>

</html>