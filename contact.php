<!DOCTYPE html>
<html lang="zxx">

<?php include './inc/head.php' ?>

<body>
    <!-- Preloader -->
    <?php include 'inc/preloader.php' ?>
    
    <!-- Navbar -->
    <?php include 'inc/navbar.php' ?>
    
    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="2" data-background="img/banner/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left caption">
                    <h1>Contact</h1>
                    <hr class="border-1">
                    <p>Feel free to reach out to us through the provided contact information below or by filling out the contact form.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact section-padding bg-cross">
        <div class="container">
            <div class="row mb-120">
                <div class="col-md-5 mb-60 animate-box" data-animate-effect="fadeInUp">
                    <h5>Information</h5>
                    <p class="mb-30">Feel free to reach out using any of the contact methods provided below. Our team of passionate photographers is dedicated to ensuring that your experience with us is enjoyable and tailored to your needs.</p>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="img/icons/c1.svg" alt=""></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Call us</div>
                            <div class="contact-link-text">+91 99612 04347</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="img/icons/c2.svg" alt=""></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Send us an email</div>
                            <div class="contact-link-text">hydrophotography@gmail.com</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="img/icons/c3.svg" alt=""></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Visit our office</div>
                            <div class="contact-link-text">CUSAT, My Tournament</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="form-box">
                        <h5>Get in touch</h5>
                        <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/phoxel/main-demo-light/mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit"  value="Send Message">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-20">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-title2">Quickly find answers to common photography questions in our concise and helpful FAQ section.</p>
                </div>
            </div>
            <div class="row">
                <!-- Accordion -->
                <div class="col-md-8 offset-md-2 faqs-accordion mb-30">
                    <div class="accordion">
                        <div class="item">
                            <div class="title">
                                <h6>Are you open for new projects or commissions?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum nulla.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Do you offer photography work abroad?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum nulla.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Where are you currently located?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum nulla.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Are you open for freelance/contract work?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Testimonial -->
    <?php include './inc/testimonials.php' ?>
    
    <!-- Footer -->
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
        activeNav(document.querySelector(".contact_button"))
    </script>
</body>


</html>
