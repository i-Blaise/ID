<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Blogs</title>
    <!-- Include the stylesheet -->

        <!-- Favicon  -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon_io/site.webmanifest">
        
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
            <!-- navbar begins here -->

            @include('components.navbar')
        <!-- ends here -->
    
    <header id="header-blogspage">
        <div class="blogheader-row">
            <div class="blogheader-text">
                <h1>Latest news</h1>
                <h2>Updates</h2>
                <p>Lorem Ipsum is simply a dummt text of the <br> printing.</p>
                <form action="">
                  <input type="text" name="searchblog" placeholder="Search">
                </form>
            </div>
        </div>
    </header>

    <img src="assets/blog-blob1.svg" class="blob1" alt="">
    <img src="assets/blog-blob2.svg" class="blob2" alt="">
    <img src="assets/blog-blob3.svg" class="blob3" alt="">
    <div class="blog-body">
      <section>
        <div class="main-blog-row">
          <a href="blog-open.html">
            <div class="main-blog-img">
              <img src="assets/main-blog-img.png" alt="">
            </div>
          </a>
          <div class="main-blog-text">
            <a href="blog-open.html">
              <h1>Lorem Ipsum is simply dummy text of the printing.</h1>
            </a>
            <p class="main-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
            <div class="blog-info">
              <img src="assets/blog-author.png" alt="Blog Aurthor Image">
              <div class="blog-name-date">
                <h3>John Doe</h3>
                <p>12.02.2020</p>
              </div>
              <a href="blog-open.html"><p>Read More</p></a>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="blog-cards-row">

          <div class="blog-card">
            <img src="assets/blog2.png" alt="">
            <div class="blog-card-text">
              <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/blog-author2.png" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>20.12.2024</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="assets/blog3.png" alt="">
            <div class="blog-card-text">
              <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/blog-author3.png" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>20.12.2024</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="assets/blog4.png" alt="">
            <div class="blog-card-text">
              <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/blog-author4.png" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>20.12.2024</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="assets/blog2.png" alt="">
            <div class="blog-card-text">
              <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/blog-author2.png" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>20.12.2024</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="assets/blog3.png" alt="">
            <div class="blog-card-text">
              <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/blog-author3.png" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>20.12.2024</p>
                </div>
              </div>
            </div>
          </div>



        </div>
      </section>

    </div>
    <div class="pagination-section">
      <div class="page-numbers">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a href="#">8</a>
        <a href="#">9</a>
        <a href="#">10</a>
      </div>
    </div>

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
              <video id="player" poster="assets/footer-video.png" class="vid" playsinline data-poster="assets/blog2.png" controls muted>
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
        