<!DOCTYPE html>
<html lang="zxx">

<?php include './inc/head.php' ?>

<body>
    <!-- Preloader -->
    <?php include 'inc/preloader.php' ?>
    
    <!-- Navbar -->
    <?php include 'inc/navbar.php' ?>

    <!-- Slider -->
    <?php include './inc/slider.php' ?>
    
    <!-- About section -->
    <?php include './inc/about.php' ?>
    
    <!-- Services section -->
    <?php include './inc/service.php' ?>

    <!-- News section -->
    <?php include './inc/news.php' ?>

    <!-- Works Gallery -->
    <?php include './inc/gallery.php' ?>

    <!-- Testiominals -->
    <?php include './inc/testimonials.php' ?>

    
    <!-- Footer -->
    <?php include './inc/footer.php' ?>



    <!-- Load your custom script first -->
    <script src="js/script.js"></script>
    <script>
        activeNav(document.querySelector(".home_button"))


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




     
       
        async function displayGlamourImages() {
            try {
                const profileData = await fetchData('glamour');
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



        // Wrap your async functions in a Promise
        function executeCustomScript() {
            return new Promise(async (resolve, reject) => {
                try {
                    await displayBannerImageBottom();
                    await displayIndoorImages();
                    await displayOutdoorImages();
                    await displayBeautyImages();
                    await displayGlamourImages();
                    await displayEditorialImages();
                    resolve();
                } catch (error) {
                    reject(error);
                }
            });
        }

        // Execute your custom script before loading other scripts
        executeCustomScript()
            .then(() => {
                // Now load the rest of the scripts
                const scriptElements = [
                    "js/jquery-3.6.3.min.js",
                    "js/jquery-migrate-3.0.0.min.js",
                    "js/modernizr-2.6.2.min.js",
                    "js/imagesloaded.pkgd.min.js",
                    "js/jquery.isotope.v3.0.2.js",
                    "js/popper.min.js",
                    "js/bootstrap.min.js",
                    "js/scrollIt.min.js",
                    "js/jquery.waypoints.min.js",
                    "js/owl.carousel.min.js",
                    "js/jquery.stellar.min.js",
                    "js/jquery.magnific-popup.js",
                    "js/YouTubePopUp.js",
                    "js/custom.js"
                    // Add other script paths here
                ];

                function loadScript(src) {
                    return new Promise((resolve, reject) => {
                        const script = document.createElement("script");
                        script.src = src;
                        script.onload = resolve;
                        script.onerror = reject;
                        document.body.appendChild(script);
                    });
                }

                // Load scripts one by one sequentially
                function loadScriptsSequentially(index) {
                    if (index < scriptElements.length) {
                        loadScript(scriptElements[index])
                            .then(() => loadScriptsSequentially(index + 1))
                            .catch(error => console.error("Script loading error:", error));
                    }
                }

                // Start loading scripts
                loadScriptsSequentially(0);
            })
            .catch(error => console.error("Custom script execution error:", error));
    </script>

</body>

</html>