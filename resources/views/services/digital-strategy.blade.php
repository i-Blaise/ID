<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - About Us</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <!-- Include the stylesheet -->
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
      <header id="header-digital-strategy">
        @include('components.navbar')
        <!-- ends here -->
        </header>



        
      <section id="digital-strat1">
        <div class="ds-row main">
            <div class="main-left">
                <div class="services">
                    <div class="service-text">
                        <h1>Photograghy</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque excepturi sit odit impedit, voluptas.</p>
                    </div>
                    <div class="service-icon">
                        <img src="assets/digital_strat/service_icon.svg">
                    </div>
                </div>
                <div class="services">
                    <div class="service-text">
                        <h1>UX/UI design</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque excepturi sit odit impedit, voluptas.</p>
                    </div>
                    <div class="service-icon">
                        <img src="assets/digital_strat/service_icon.svg">
                    </div>
                </div>
                <div class="services">
                    <div class="service-text">
                        <h1>Web design</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque excepturi sit odit impedit, voluptas.</p>
                    </div>
                    <div class="service-icon">
                        <img src="assets/digital_strat/service_icon.svg">
                    </div>
                </div>
            </div>

            <div class="main-center">
                <div class="center-img">
                    <img src="assets/digital_strat/vr-img.png">
                    <img class="img-shadow" src="assets/digital_strat/vr-shadow.png">
                </div>
            </div>

            <div class="main-right">
                <div class="services">
                    <div class="service-icon">
                        <img src="assets/digital_strat/service_icon.svg">
                    </div>
                    <div class="service-text">
                        <h1>Web development</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque excepturi sit odit impedit, voluptas.</p>
                    </div>
                </div>
                <div class="services">
                    <div class="service-icon">
                        <img src="assets/digital_strat/service_icon.svg">
                    </div>
                    <div class="service-text">
                        <h1>3d design</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque excepturi sit odit impedit, voluptas.</p>
                    </div>
                </div>
                <div class="services">
                    <div class="service-icon">
                        <img src="assets/digital_strat/service_icon.svg">
                    </div>
                    <div class="service-text">
                        <h1>2d design</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque excepturi sit odit impedit, voluptas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section>
        <div class="main-ad">
            <div class="ad-box">
                <div class="ad-text">
                    <h1>Lets's discuss and create Magic!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                </div>
                <button>
                    <p>Contact Us</p>
                    <img src="assets/digital_strat/arrow-right.svg">
                </button>
            </div>
        </div>
    </section> --}}


    <div class="mobile-ad-section">
    </div>
  
    <!-- Footer Starts  -->
          @include('components.footer')
    <!-- Footer Ends  -->


        <script> 
  
            // Targeting video element  
            let clip = document.querySelector(".vid") 
            let footer = document.querySelector(".footer-row") 
        
            /* Applying mouseover event on video clip  
            and then we call play() function to play  
            the video when the mouse is over the video */ 
            footer.addEventListener("mouseover", function (e) { 
                clip.play(); 
            }) 
        
            /* Applying mouseout event on video clip  
            and then we call pause() function to stop  
            the video when the mouse is out the video */ 
            footer.addEventListener("mouseout", function (e) { 
                clip.pause(); 
            }) 
        </script>
  </body>
  </html>