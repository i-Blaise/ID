<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Home Page</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <!-- Include the stylesheet -->
    <link rel="stylesheet" href="css/styles.css?v=1" />
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
    <header id="black-bg">

    @include('components.navbar')


        <div class="slideshow-container">
            <div class="slideshow-hero" id="fade">
              <div class="slide-image">
                <img src="assets/slideshow/slider1.png" alt="">
              </div>
                <h1 class="r1">Grow your</h1><br>
                <h1><span>business</span> not your <br></h1>
                <h1 class="r2">followers</h1><br>
                <p>We discus on business performance and metrics that matter- sales, new customers, revenue, and such.</p>
                <div class="slideshow-dot">
                  <span class="dot on" onclick="currentSlide(0)"></span>
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                </div>
              <a class="slideshow-cta" href="">
                  <p>Come have a chat (CTA)...</p>
              </a>
            </div>

            <div class="slideshow-hero" id="fade">
              <div class="slide-image">
                <img src="assets/slideshow/slider4.jpg" alt="">
              </div>
              <div class="slide-details">
                <h1>2Grow your <br><span>business</span> not your <br>followers</h1>
                <p>We discus on business performance and metrics that matter- sales, new customers, revenue, and such.</p>
                <div class="slideshow-dot">
                  <span class="dot" onclick="currentSlide(0)"></span>
                  <span class="dot on" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                </div>
              </div>
              <a class="slideshow-cta" href="">
                  <p>Come have a chat (CTA)...</p>
              </a>
            </div>

            <div class="slideshow-hero" id="fade">
              <div class="slide-image">
                <img src="assets/slideshow/slider5.jpg" alt="">
              </div>
              <div class="slide-details">
                <h1>3Grow your <br><span>business</span> not your <br>followers</h1>
                <p>We discus on business performance and metrics that matter- sales, new customers, revenue, and such.</p>
                <div class="slideshow-dot">
                  <span class="dot" onclick="currentSlide(0)"></span>
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot on" onclick="currentSlide(2)"></span>
                </div>
              </div>
              <a class="slideshow-cta" href="">
                  <p>Come have a chat (CTA)...</p>
              </a>
            </div>
        </div>
        <div class="hero-style"></div>
        
      </header>

      <section id="clients">
        <h1>Touched by Us</h1>
        <div class="clients-row">
          <img src="assets/gino.png" alt="client-logo" class="client-logo">
          <img src="assets/yango.png" alt="client-logo" class="client-logo">
          <img src="assets/lucozade.png" alt="client-logo" class="client-logo">
          <img src="assets/hdplus.png" alt="client-logo" class="client-logo">
          <img src="assets/coke.png" alt="client-logo" class="client-logo">
        </div>
      </section>



      <section id="home-section-1">
        <div class="section-1-row">
          <div class="section-1-left">
            <h2>We are Interactive Digital</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Viverra lacinia sed praesent pharetra quisque consectetur tellus elit. Suspendisse ultrices vitae at platea. Euismod pretium sit est etiam.</p>
          </div>
          <div class="section-1-right">
            <img src="assets/home-img-1.png" alt="">
          </div>
        </div>
      </section>


      <section id="home-service-section">
        <img src="assets/home-box-style.svg" alt="" class="box-style">
        <div class="home-service-row">
          <div class="home-service-left">
            <img class="service-image" src="assets/service-home.png" alt="">
            <img class="service-tag" src="assets/Services-Feature-Tag.png" alt="">
          </div>
          <div class="home-service-right">
            <div class="service-content">
              <h2>Our Services</h2>
              <p>We are an award-winning, full service digital marketing agency that creates compelling online experiences in digital media for great brands. Our solutions leverage strategy, creative thinking and coordinated execution to deliver on business goals through digital. </p>
              <div class="service-lists">

                <div class="service">
                  <img src="assets/globe-icon.png" class="service-icon" alt="">
                  <p>Social Media</p>
                </div>

                <div class="service">
                  <img src="{{ asset('assets/web-design-icon.svg') }}" class="service-icon" alt="">
                  <p>Website Design</p>
                </div>

                <div class="service">
                  <img src="{{ asset('assets/online-ad-icon.svg') }}" class="service-icon" alt="">
                  <p>Online Advertising</p>
                </div>

                <div class="service">
                  <img src="{{ asset('assets/strat-icon.svg') }}" class="service-icon" alt="">
                  <p>Strategy Consulting</p>
                </div>

                <div class="service">
                  <img src="{{ asset('assets/media-prod-icon.svg') }}" class="service-icon" alt="">
                  <p>Media Production</p>
                </div>

              </div>
              <a href="{{ route('services') }}">
                <p>Come have a look</p>
              </a>
            </div>
          </div>
        </div>
        <div class="service-bottom"></div>
      </section>

      <section id="process-section">
        <div class="process-container">
          <h1>Our Process</h1>
          <div class="process-row">
            <div class="process-text">
              <h2>...Always Listening</h2>
              <p>We’re constantly plugged into the social media and digital landscape, looking for triggers that
                inspire our creativity for your brand.</p>
            </div>
            <div class="process-img">
              <img src="assets/process-1.png" alt="">
            </div>
          </div>

          <div class="process-row process-margin-top">
            <div class="process-img">
              <img src="assets/process-2.png" alt="">
            </div>
            <div class="process-text process-text-right">
              <h2>...Always Learning</h2>
              <p class="learning-text">A brand new digital identity and website for the subscription App service that focuses on happy subscribers.</p>
            </div>
          </div>

          <div class="process-row process-margin-top">
            <div class="process-text">
              <h2>...Always Creating</h2>
              <p class="creating-text">How we turned a local studio into one of the biggest video agencies in the south of the UK.</p>
            </div>
            <div class="process-img">
              <img src="assets/process-3.png" alt="">
            </div>
          </div>
        </div>
      </section>

      <section id="portfolio-section">
        <h1>Our Portfolio</h1>
        <div class="portfolio-row">
          <div class="portfolio-card port-card-1">
            <h4>Romantic getaway...</h4>
            <p>MTN - Ghana</p>
          </div>

          <div class="portfolio-card port-card-2">
            <h4>More Win Dial *789*115#</h4>
            <p>Coronation</p>
          </div>

          <div class="portfolio-card port-card-3">
            <h4>Promo</h4>
            <p>GB Foods</p>
          </div>

          <div class="portfolio-card port-card-4">
            <h4>Digital Marketing</h4>
            <p>Stanbic</p>
          </div>

          <div class="portfolio-card port-card-5">
            <h4>Digital Marketing</h4>
            <p>Malta Guinness</p>
          </div>
        </div>
        <div class="portfolio-button-row">
          <!-- <a href="#">
            <button class="view-more">View More</button>
          </a> -->
        </div>
      </section>

      <section id="testimonial-section">
        <h1>What Our Customers Say</h1>
        <div class="testimonial-row">
          <div class="testimonial-left">
            <!-- <img src="assets/testimonial1.png" alt="">
            <img src="assets/testimonial2.png" alt=""> -->
            <div class="testimonial-image-1">
              <img src="assets/testimonial1.png" alt="">
            </div>
            <div class="testimonial-image-2">
              <img src="assets/testimonial2.png" alt="">
            </div>
          </div>
          <div class="testimonial-right">
            <div class="testimonial-name">
              <h2>Kristie Stokes</h2>
              <p>Product Quality Architect</p>
            </div>
            <div class="testimonial-message">
              <p>Est totam minus fuga quidem. Ipsum nisi dolorem ea nihil voluptatum numquam. Dolor consequatur cum quisquam sit dolore ad minima.</p>
            </div>
            <div class="testimonial-slider-counter">
              <a href="#">
                <div class="number-box active one">01</div>
                <div class="number-box two">02</div>
                <div class="number-box three">03</div>
                <div class="number-box four">04</div>
              </a>
            </div>
            
          </div>
        </div>
      </section>


      <section id="home-blog">
        <h1 class="home-blog-title">Our Blog</h1>
        <div class="main-blog-row">
        <div class="blog-cards-row blog-cards-row-home">
          <div class="blog-card">
            <img src="assets/home-blog1.png" class="home"  alt="">
            <div class="blog-card-text">
              <h2>Route calls with phone menu</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/home-blog-author1.png" class="home-blog-author"  alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>Feb 28, 2024 &nbsp; <img src="assets/red-dot.svg" alt=""> 5 min read</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="assets/home-blog2.png" class="home" alt="">
            <div class="blog-card-text">
              <h2>Answer questions with data</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/home-blog-author2.png" class="home-blog-author" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>Feb 28, 2024 &nbsp; <img src="assets/red-dot.svg" alt=""> 5 min read</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="assets/home-blog3.png" class="home" alt="">
            <div class="blog-card-text">
              <h2>Coach your team for better Design</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .</p>
              <div class="card-info">
                <img src="assets/home-blog-author3.png" class="home-blog-author"  alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>John Doe</h3>
                  <p>Feb 28, 2024  &nbsp; <img src="assets/red-dot.svg" alt=""> 5 min read</p>
                </div>
              </div>
            </div>
          </div>
          
        <a href="blogs.html">
          <div class="home-blog-btn">
            <p>Visit Our Blog</p>
          </div>
        </a>
        </div>
        </div>
      </section>


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

<!-- <script>
let slideIndex = 0;
showSlides();

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slideshow-hero");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 8000); // Change image every 8 seconds
}
  </script> -->


<script>
  function openNav() {
  document.getElementById("navigation-bar").style.width = "100%";
}

function closeNav() {
  document.getElementById("navigation-bar").style.width = "0%";
}
  </script>
  
</body>
</html>