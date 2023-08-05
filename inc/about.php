<section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <h2 class="section-title">Hello, I'm Muhammed Rizwan, a professional photographer based on New York</h2>
                    <p>I love to pause the wild, happy and real moments of life, just to hear their stories untold. Viverra tristique usto duis vitae diam neque nivamus estan ateuene artines viverra nec setlie no curabit tristique.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Over 15 years of experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>200+ successfully executed projects</p>
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
                    <div class="about-bottom"> <img src="img/signature-dark.svg" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name-dark">Martin Dan</div>
                            <div class="about-rol">Founder of Photography</div>
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