<!DOCTYPE html>
<html lang="zxx">

<?php include './inc/head.php' ?>

<body>
    <!-- Preloader -->
    <?php include 'inc/preloader.php' ?>
    
    <!-- Navbar -->
    <?php include 'inc/navbar.php' ?>
    
    <!-- Header Banner -->
    <section id="contact_banner" class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="2" data-background="img/banner/6.jpg">
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
                            <div class="contact-link-text">rizwan@hydrophotography.in</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="img/icons/c3.svg" alt=""></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Visit our office</div>
                            <div class="contact-link-text">CUSAT, Ernakulam</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="form-box">
                        <h5>Get in touch</h5>
                        <div>
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <form id="message_form" class="row">
                                <div class="col-md-12 form-group">
                                    <input id="nameInput" name="name" type="text" placeholder="Your Name *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea id="messageInput" name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button name="submit" type="submit">Send Message</button>
                                </div>
                            </form>
                        </d>
                        
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
                                <h6>What types of photography do you specialize in?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>I specialize in portrait, wedding, event, and landscape photography, capturing moments with a unique perspective.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>How do I book a photography session?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Booking is easy! Simply visit the Contact page on my website and There will be my phone number to contact</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>What should I wear for a photoshoot?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Wearing solid colors and avoiding busy patterns can make you stand out in photos. We can discuss specifics before the session.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Can I request specific poses or styles for my session?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Absolutely! I encourage your input to ensure your vision is realized in the final images.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6> Can I bring props or pets to the photoshoot?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Certainly! Props and pets can add a personal touch to your photos. Let's discuss ideas beforehand.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Can you provide references from past clients?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Absolutely, I'm happy to provide references or showcase testimonials on my website. And you can also View the photos from gallery page of the website</p>
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
    <script src="js/index.js"></script>


    <script>
        form = document.getElementById("message_form")
        form.addEventListener("submit", function(){
            const name = document.getElementById("nameInput").value;
            const message = document.getElementById("messageInput").value;
            let waUrl = `https://wa.me/9961204347?text=Hello%20I%20am%20${name}. %20${message}`;
            window.open(waUrl, '_blank');
        })
    </script>

    <script>
        activeNav(document.querySelector(".contact_button"))


        async function displayBannerImage() {
            try {
                const profileData = await fetchData('bgup');
                const profileImgUrl = profileData[0].secure_url;
                document.querySelector("#contact_banner").setAttribute('data-background', profileImgUrl);
                document.querySelector("#contact_banner").style.backgroundImage = `url(${profileImgUrl})`;

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayBannerImage()



        async function displayBannerImageBottom() {
            try {
                const profileData = await fetchData('bgdown');
                const profileImgUrl = profileData[0].secure_url;
                document.querySelector("#bottom_banner").setAttribute('data-background', profileImgUrl);
                document.querySelector("#bottom_banner").style.backgroundImage = `url(${profileImgUrl})`;

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayBannerImageBottom()
    </script>
</body>


</html>
