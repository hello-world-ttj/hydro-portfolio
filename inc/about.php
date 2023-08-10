<section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <h2 class="section-title">Hello, I am a fashion photographer with over five years of experience in the photography industry.</h2>
                    <p>I specialize in off-camera flash photography and have captured shots for digital media. My skills include portrait illustration, styling direction, retouching, and video production</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Over 5 years of experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>50+ successfully executed projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Exceptional work quality</p>
                            </div>
                        </li>
                    </ul>
                    <hr class="border-2">
                    <div class="about-bottom"> <img src="img/sign.png" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name-dark">Muhammed Rizwan</div>
                            <div class="about-rol">Hydro Photography</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="about-img">
                        <div class="img"> <img id="profile" src="img/about.jpg" class="img-fluid" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        async function displayProfileImage() {
            try {
                const profileData = await fetchData('profile');
                const profileImgUrl = profileData[0].secure_url;
                console.log("Profile Image URL:", profileImgUrl);
                document.querySelector("#profile").src = profileImgUrl;
            } catch (error) {
                // Handle any errors that occurred during fetchData or image display
                console.error('Error:', error);
            }
        }
        displayProfileImage()


    </script>