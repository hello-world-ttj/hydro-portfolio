<!DOCTYPE html>
<html lang="zxx">

<?php include './inc/head.php' ?>

<body>
    <!-- Preloader -->
    <?php include 'inc/preloader.php' ?>
    
    <!-- Navbar -->
    <?php include 'inc/navbar.php' ?>

    <!-- Header Banner -->
    <section class="banner-header section-padding valign bg-img bg-fixed" data-overlay-darkgray="4" data-background="img/banner/4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left caption">
                    <h1>My Services</h1>
                    <hr class="border-1">
                    <p>Praesent sed nisl ullamcorper, viverra magna the finibus viventa ipsum eros amet vacun in the vitae miss.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <?php include './inc/service.php' ?>
    
    <!-- Pricing -->
    <section class="annie-pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-20">
                    <h2 class="section-title">Pricing Plan</h2>
                    <hr class="border-2">
                    <p class="section-title2">Quisque sed tellus nullam biben the volutpat dignissim pretium.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner img-grayscale" style="background-image: url(img/pricing/1.jpg)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Standart</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">300</span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>3 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>50 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner" style="background-image: url(img/pricing/2.jpg)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Premium</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">450</span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>6 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>100 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner" style="background-image: url(img/pricing/3.jpg)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Platinum</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">750</span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>12 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>250 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include './inc/testimonials.php' ?>
    <?php include './inc/footer.php' ?>

    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/script.js"></script>

    <script>
        activeNav(document.querySelector(".service_button"))
    </script>
</body>

</html>