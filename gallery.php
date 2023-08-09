<!DOCTYPE html>
<html lang="zxx">

<?php include './inc/head.php' ?>

<body>
    <!-- Preloader -->
    <?php include 'inc/preloader.php' ?>
    
    <!-- Navbar -->
    <?php include 'inc/navbar.php' ?>

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="2" data-background="img/banner/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>Gallery 01</h1>
                    <hr class="border-1">
                    <p>Welcome to our Photography Gallery, a visual journey capturing moments, stories, and emotions through the lens of our talented photographer. Each image here has been carefully curated to showcase the beauty and artistry that photography brings to life.</p>
                </div>
            </div>
        </div>
    </section>
    <!--  Gallery 01 -->
    <section class="section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="gallery-filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".indoor">Indoor</li>
                        <li data-filter=".outdoor">Outdoor</li>
                        <li data-filter=".beauty">Beauty</li>
                        <li data-filter=".glamour">Galamour</li>
                        <li data-filter=".editorial">Editorial</li>
                    </ul>
                </div>
            </div>
            <div id="gallery_parent" class="row gallery-items">
                    
            </div>
        </div>   
    </section>

    
    <!-- Testimonials -->
    <?php include './inc/testimonials.php' ?>
    <!-- Footer -->
    <?php include './inc/footer.php' ?>

    <!-- jQuery -->
    <script src="js/index.js"></script>

    
    <script src="js/script.js"></script>

    <script>
        activeNav(document.querySelector(".gallery_button"))


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



        async function displayIndoorImages() {
            try {
                const profileData = await fetchData('indoor');
                const gallery_parent = document.getElementById("gallery_parent");

                

                // Sort profileData based on the created_at property in descending order
                profileData.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                let new_html = ''; // Initialize the HTML content variable

                profileData.forEach(element => {
                    new_html += `
                    <div class="col-md-4 gallery-masonry-wrapper single-item indoor">
                        <a href="${element.secure_url}" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="${element.secure_url}" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <div class="gallery-masonry-item-category">Indoor</div>
                                    <h4 class="gallery-masonry-item-title">Indoor Photography</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    `;
                });

                gallery_parent.innerHTML += new_html; // Set the HTML content

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayIndoorImages()
        
        
        
        async function displayOutdoorImages() {
            try {
                const profileData = await fetchData('outdoor');
                const gallery_parent = document.getElementById("gallery_parent");



                // Sort profileData based on the created_at property in descending order
                profileData.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                let new_html = ''; // Initialize the HTML content variable

                profileData.forEach(element => {
                    new_html += `
                    <div class="col-md-4 gallery-masonry-wrapper single-item outdoor">
                        <a href="${element.secure_url}" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="${element.secure_url}" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <div class="gallery-masonry-item-category">Outdoor</div>
                                    <h4 class="gallery-masonry-item-title">Outdoor Photography</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    `;
                });

                gallery_parent.innerHTML += new_html; // Set the HTML content

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayOutdoorImages()
        
        
        
        async function displayBeautyImages() {
            try {
                const profileData = await fetchData('beauty');
                const gallery_parent = document.getElementById("gallery_parent");



                // Sort profileData based on the created_at property in descending order
                profileData.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                let new_html = ''; // Initialize the HTML content variable

                profileData.forEach(element => {
                    new_html += `
                    <div class="col-md-4 gallery-masonry-wrapper single-item beauty">
                        <a href="${element.secure_url}" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="${element.secure_url}" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <div class="gallery-masonry-item-category">Beauty</div>
                                    <h4 class="gallery-masonry-item-title">Beauty Photography</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    `;
                });

                gallery_parent.innerHTML += new_html; // Set the HTML content

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayBeautyImages()
       
       
       
        async function displayGlamourImages() {
            try {
                const profileData = await fetchData('glamor');
                const gallery_parent = document.getElementById("gallery_parent");




                let new_html = ''; // Initialize the HTML content variable

                profileData.forEach(element => {
                    new_html += `
                    <div class="col-md-4 gallery-masonry-wrapper single-item glamour">
                        <a href="${element.secure_url}" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="${element.secure_url}" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <div class="gallery-masonry-item-category">Glamour</div>
                                    <h4 class="gallery-masonry-item-title">Glamour Photography</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    `;
                });

                gallery_parent.innerHTML += new_html; // Set the HTML content

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayGlamourImages()
       





        async function displayEditorialImages() {
            try {
                const profileData = await fetchData('editorial');
                const gallery_parent = document.getElementById("gallery_parent");



                // Sort profileData based on the created_at property in descending order
                profileData.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                let new_html = ''; // Initialize the HTML content variable

                profileData.forEach(element => {
                    new_html += `
                    <div class="col-md-4 gallery-masonry-wrapper single-item editorial">
                        <a href="${element.secure_url}" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="${element.secure_url}" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <div class="gallery-masonry-item-category">Editorial</div>
                                    <h4 class="gallery-masonry-item-title">Editorial Photography</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    `;
                });

                gallery_parent.innerHTML += new_html; // Set the HTML content

            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }

        displayEditorialImages()
    </script>



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
</body>

</html>