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
      <header>

        @include('components.navbar')

        <!-- ends here -->

        <div class="about-header">
            <div class="header-text">
                <h3>About Us</h3>
                <h1>All you need to know</h1>
                <p>We discus on business performance and metrics that matter- sales, new customers, revenue, and such.</p>
            </div>
            <div class="header-image">
                <img src="assets/about-header-1.png" alt="" class="header1">
                <img src="assets/about-header-2.png" alt="" class="header2">
            </div>
        </div>
      </header>

      
      <section class="about-column">
        <div class="about-row-1">
          <div class="about-card"><img src="assets/about1.png" alt="" class="about1"></div>
          <div class="about-card"><img src="assets/about2.png" alt="" class="about2"></div>
          <div class="about-card"><img src="assets/about3.png" alt="" class="about3"></div>
        </div>
        

        <div class="about-row-2">
            <div class="about-intro-img">
                <img src="assets/about-intro.png" alt="">
            </div>
            <div class="about-intro-text">
                <h2>Introducing the best Digital Agency!</h2>
                <p>We are an award-winning, full service digital marketing agency that creates compelling online experiences in digital media for great brands. Our solutions leverage strategy, creative thinking and coordinated execution to deliver on business goals through digital..</p>
            </div>
        </div>
      </section>
      
      <img src="assets/about-page-blob.svg" alt="" class="about-blob-1">

      <secion class="about-section-2">
        <div class="banner-1">
            <img src="assets/about-banner.png" alt="">
        </div>
        <div class="section-2">
            <div class="section-2-container">
                <div class="section-2-text">
                    <h2>Why choose Us?</h2>
                    <p>Our company has a strong and proven track record in delivering exceptional results for businesses. We offer customized strategies tailored to your unique needs, ensuring maximum effectiveness. With our comprehensive services, we can handle all aspects of your digital marketing and advertising campaigns. Our data-driven approach allows us to make informed decisions and optimize your campaigns for better results. We also bring creativity, innovation, and transparency to the table, ensuring a successful partnership and open communication..</p>
                </div>
                <div class="section-2-img">
                    <img src="assets/about-img.png" alt="">
                </div>
            </div>
        </div>
      </secion>


      <section class="about-section-3">
        <h1 class="section-title">Meet Expert Team</h1>
        <div class="team-card-row">
            <div class="team-card">
                <img src="assets/team/team1.png" alt="" class="team-pic">
                <div class="team-title">
                    <h5>Chief Operating Officer</h5>
                </div>
                <div class="team-name">
                    <h4>Mr. Ekow Thompson</h4>
                </div>
            </div>

            <div class="team-card">
                <img src="assets/team/team2.png" alt="" class="team-pic">
                <div class="team-title">
                    <h5>UI/UX Designer</h5>
                </div>
                <div class="team-name">
                    <h4>Mr. Alex Jerry Sam</h4>
                </div>
            </div>

            <div class="team-card">
                <img src="assets/team/team3.png" alt="" class="team-pic">
                <div class="team-title">
                    <h5>Snr. Animator</h5>
                </div>
                <div class="team-name">
                    <h4>Mr. Akrofi Sam</h4>
                </div>
            </div>
        </div>
      </section>


      
      <section class="adbox-2">
        <div class="adbox-2-row">
          <div class="ad-img">
            <img src="assets/ad-card-round.png" alt="">
          </div>
          <div class="ad-text">
            <h1>Let's <span>Collaborate</span> to <br>create a better experience</h1>
          </div>
          <div class="ad-gif">

          </div>
        </div>
      </section>


          <!-- Footer Starts  -->
    <footer>
        <div class="footer-row">
            <div class="footer-row-1">
                <div class="company">
                  <img src="assets/IDlogo.png" alt="">
                  <h1>Interactive Digital</h1>
                </div>
                <p>Creates compelling online experiences in digital media for great brands, <span>2024</span>.</p>
                <div class="footer-social">
                  <img src="assets/fb.svg" alt="facebook-logo">
                  <img src="assets/x.svg" alt="twitter-logo">
                  <img src="assets/in.svg" alt="linkedin-logo">
                  <img src="assets/ig.svg" alt="instagram-logo">
                </div>
            </div>
            <div class="footer-row-2">
              <div class="footer-menu">
                <div class="column-1">
                  <h4>Products</h4>
                  <a href="#">Social Media</a>
                  <a href="#">Online Advertisnent</a>
                  <a href="#">Media</a>
                  <a href="#">Website Design</a>
                  <a href="#">Strategy</a>
                </div>

                <div class="column-2">
                  <h4>Platforms</h4>
                  <a href="#">About Us</a>
                  <a href="#">Services</a>
                  <a href="#">Portfolio</a>
                  <a href="#">Case Study</a>
                  <a href="#">Contact Us</a>
                </div>

                <div class="column-3">
                  <h4>Utility Pages</h4>
                  <a href="#">Use Cases</a>
                  <a href="#">SEO</a>
                  <a href="#">Public Relation</a>
                  <a href="#">Content Marketing</a>
                  <a href="#">Licenses</a>
                </div>
              </div>
            </div>
            <div class="footer-row-3">
              <video id="player" poster="assets/footer-video.png" class="vid" playsinline width="320" data-poster="assets/blog2.png" controls muted>
                <source src="assets/video/footer-vid.mp4" type="video/mp4">
                <source src="assets/video/footer-vid.mp4" type="video/ogg">
                Your browser does not support the video tag.
              </video>
  
              <!-- <div class="video" id="player">
                <iframe
                  src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                  allowfullscreen
                  allowtransparency
                  allow="autoplay"
                ></iframe>
              </div> -->
              </div>
        </div>

        <!-- <hr> -->

        <div class="copy-rights">
          <p>interactivedigital © 2024. All rights reserved.</p>
          <a href="#"><p>Contact &nbsp; &nbsp; &nbsp;/</p></a>
          <a href="#"><p>Terms of Service &nbsp; &nbsp; &nbsp;/</p></a>
          <a href="#"><p>Privacy Statement</p></a>
          <!-- <p>Contact &nbsp; / &nbsp; Terms of Service &nbsp; /  &nbsp;   Privacy Statement</p> -->
        </div>
    </footer>
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