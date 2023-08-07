    <!-- Slider -->
    <header id="slider-area" class="header slider-fade">
        <div class="ruby-container">
            <div class="owl-carousel owl-theme">
                <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                <div class="text-left item bg-img banner_img_home_1" data-overlay-dark="2" data-background="img/slider/1.jpg">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Welcome to my</h4>
                                    <h1>Hydro photography</h1>
                                    <p>I love to pause the wild, happy and real moments of life, just to hear their stories untold.</p> <a href="#" class="button-primary">My works</a> <a href="#" class="button-tersiyer">Contact me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img banner_img_home_2" data-overlay-dark="2" data-background="img/slider/2.jpg">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Hello there !</h4>
                                    <h1>I'm Muhammed Rizwan</h1>
                                    <p>I am professional photographer based on Kochi, creating dreamscapes with black, white and shades in-between.</p> <a href="#" class="button-primary">My works</a> <a href="#" class="button-tersiyer">Contact me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </header>


    <script src="js/index.js"></script>

    <script>
    async function displayBannerImage() {
        try {
        const profileData = await fetchData('banner');


        document.querySelectorAll(".banner_img_home_1").forEach(element => {
            element.setAttribute("data-background", profileData[0].secure_url);
            console.log(element)
            element.style.background = `url("${profileData[0].secure_url}")`;
        });
        document.querySelectorAll(".banner_img_home_2").forEach(element => {
            console.log(element)
            element.setAttribute("data-background", profileData[1].secure_url);
            element.style.background = `url("${profileData[1].secure_url}")`;
        });


        } catch (error) {
        // Handle any errors that occurred during fetchData or image display
        console.error('Error:', error);
        }
    }
    displayBannerImage();
    </script>