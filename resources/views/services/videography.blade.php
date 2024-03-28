<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Services</title>
        <!-- Favicon  -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <!-- Include the stylesheet -->
  {{-- <link rel="stylesheet" href="dist/style.css"> --}}
  <link rel="stylesheet" href="css/styles.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  </head>
<body>
    <header id="header-videography">
      @include('components.navbar')
        <!-- ends here -->
      </header>
<!-- partial:index.partial.html -->
<div class="grid-container">
    
    <h2>Projects</h2>
  <main class="grid-item main">
    <img src="assets/videography/video-line-1.svg" class="line-1" alt="">
    <img src="assets/videography/video-line-2.svg" class="line-2" alt="">
    <div class="items">

        <div class="video-show-card item item1">
            <div class="video-card">
              <img src="assets/videography/video-show1.png" alt="">
            </div>
            <div class="video-card-details">
              <h3>The K- POP Live Show</h3>
              <p>1h 14m</p>
            </div>
        </div>
        
        <div class="video-show-card item item2">
            <div class="video-card">
              <img src="assets/videography/video-show2.png" alt="">
            </div>
            <div class="video-card-details">
              <h3>The K- POP Live Show</h3>
              <p>1h 14m</p>
            </div>
        </div>

        
        <div class="video-show-card item item3">
            <div class="video-card">
              <img src="assets/videography/video-show3.png" alt="">
            </div>
            <div class="video-card-details">
              <h3>The K- POP Live Show</h3>
              <p>1h 14m</p>
            </div>
        </div>

        
        <div class="video-show-card item item4">
            <div class="video-card">
              <img src="assets/videography/video-show4.png" alt="">
            </div>
            <div class="video-card-details">
              <h3>The K- POP Live Show</h3>
              <p>1h 14m</p>
            </div>
        </div>


        
        <div class="video-show-card item item5">
            <div class="video-card">
              <img src="assets/videography/video-show5.png" alt="">
            </div>
            <div class="video-card-details">
              <h3>The K- POP Live Show</h3>
              <p>1h 14m</p>
            </div>
        </div>
    </div>
  </main>

</div>



<section id="video-projects-section">
    <div class="video-description">
        <h1>videography</h1>
        <p>Augue feugiat mi, massa amet. Id purus aliquam bibendum purus dictum elementum nullam odio tellus. Imperdiet feugiat est odio fames magna orci. Augue purus aliquam, placerat vestibulum dictum pellentesque molestie. Facilisis pretium porta congue proin.</p>
    </div>
    <div class="video-project-row">
        <div class="project-list">
            <a href="" class="project">
                    <img src="assets/videography/play-vector.svg" alt="">
                    <p>Project Name</p>
            </a>

            <a href="" class="project">
                <img src="assets/videography/play-vector.svg" alt="">
                <p>Project Name</p>
            </a>

            <a href="" class="project">
                <img src="assets/videography/play-vector.svg" alt="">
                <p>Project Name</p>
            </a>

            <a href="" class="project">
                <img src="assets/videography/play-vector.svg" alt="">
                <p>Project Name</p>
            </a>

            <a href="" class="project">
                <img src="assets/videography/play-vector.svg" alt="">
                <p>Project Name</p>
            </a>

            <a href="" class="project">
                <img src="assets/videography/play-vector.svg" alt="">
                <p>Project Name</p>
            </a>
        </div>

        <div class="project-videos">
            <div class="video project-video1">
                <img src="assets/videography/video-project1.png" alt="">
            </div>

            <div class="video project-video2">
                <img src="assets/videography/video-project2.png" alt="">
            </div>

            <div class="video project-video3">
                <img src="assets/videography/video-project3.png" alt="">
            </div>
        </div>
    </div>


    <div class="video-project-row2">
        <div class="video">
                <video id="player" poster="assets/videography/row-video1.png" class="vid" playsinline width="320" data-poster="assets/blog2.png" controls muted>
                <source src="assets/video/footer-vid.mp4" type="video/mp4">
                <source src="assets/video/footer-vid.mp4" type="video/ogg">
                Your browser does not support the video tag.
              </video>
        </div>

        <div class="video">
            <video id="player" poster="assets/videography/row-video2.png" class="vid" playsinline width="320" data-poster="assets/blog2.png" controls muted>
            <source src="assets/video/footer-vid.mp4" type="video/mp4">
            <source src="assets/video/footer-vid.mp4" type="video/ogg">
            Your browser does not support the video tag.
          </video>
        </div>

        <div class="video">
            <video id="player" poster="assets/videography/row-video3.png" class="vid" playsinline width="320" data-poster="assets/blog2.png" controls muted>
            <source src="assets/video/footer-vid.mp4" type="video/mp4">
            <source src="assets/video/footer-vid.mp4" type="video/ogg">
            Your browser does not support the video tag.
        </video>
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







<script  src="dist/script.js"></script>

</body>
</html>
