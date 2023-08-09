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
            <div id="offer_soon" class="row">

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
    <script src="js/index.js"></script>

    <script>
        activeNav(document.querySelector(".service_button"))


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
       


        async function displayPlanImage() {
            try {
                const profileData = await fetchData('offersoon');
                const offer_div = document.getElementById("offer_soon");

                // Sort profileData based on the created_at property in descending order
                profileData.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                let new_html = ''; // Initialize the HTML content variable

                profileData.forEach(element => {
                    new_html += `
                    <div class="col-md-4">
                        <img src='${element.secure_url}' alt="">
                    </div>`;
                });

                offer_div.innerHTML = new_html; // Set the HTML content

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayPlanImage();




    </script>
</body>

</html>