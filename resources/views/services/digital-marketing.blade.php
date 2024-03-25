<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Online Advertising</title>
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
      <header id="header-sm-marketing">
        <nav>
            <div class="navbar" id="dark-nav">
              <div class="logo">
                <img src="assets/logo-digital.png" alt="logo" />
              </div>
              <ul class="nav-links">
                <li class="menu-link"><a href="index.html">Home</a></li>
                <li class="menu-link"><a href="aboutus.html">About us</a></li>
                <li class="menu-link"><a class="active" href="services.html">Services</a></li>
                <li class="menu-link"><a href="blogs.html">Blog</a></li>
                <li class="menu-link"><a href="#casestudy">Case Studies</a></li>
                <li class="menu-link"><a href="#contact">Contact us</a></li>
              </ul>
            </div>
          </nav>
          <div class="header-2">
            <img src="assets/services/marketing-header-2.png" alt="">
          </div>
        <!-- ends here -->
      </header>


      <section class="ad-space">
        <div class="ad-space-banner">
            <h1>AD SPACE</h1>
            <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
        </div>
      </section>



      <section class="sm-marketing-section">
        <div class="sm-marketing-row">
          <div class="marketing-card">
            <img src="assets/services/sm1.png" alt="">
            <h3>Serach engine Optimization</h3>
            <p>Find your spot in a noisy world. 
              We know the exact place. We 
              harness the power of digital 
              channels to expand your brand’s 
              reach. </p>
          </div>

          <div class="marketing-card">
            <img src="assets/services/sm2.png" alt="">
            <h3>Serach engine Optimization</h3>
            <p>Find your spot in a noisy world. 
              We know the exact place. We 
              harness the power of digital 
              channels to expand your brand’s 
              reach. </p>
          </div>

          <div class="marketing-card">
            <img src="assets/services/sm3.jpg" alt="">
            <h3>Serach engine Optimization</h3>
            <p>Find your spot in a noisy world. 
              We know the exact place. We 
              harness the power of digital 
              channels to expand your brand’s 
              reach. </p>
          </div>

          <div class="marketing-card">
            <img src="assets/services/sm4.png" alt="">
            <h3>Serach engine Optimization</h3>
            <p>Find your spot in a noisy world. 
              We know the exact place. We 
              harness the power of digital 
              channels to expand your brand’s 
              reach. </p>
          </div>
        </div>
      </section>




      <div class="ad-section">
      </div>
  
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
