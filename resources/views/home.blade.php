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
    <header id="header-homepage">

    @include('components.navbar')

    <div class="header-info-row">
        <div class="left-header-info">
            <h1>WELCOME <br> TO THE <br><span>DIGITAL <br>HOUSE</span>.
            </h1>
        </div>
        <div class="right-header-info">
            <img src="{{ asset('assets/homepage/id.svg') }}" class="ID-text-logo" alt="Interactive DIgital">
            <div class="client-row">
                <h3>Touched By Us</h3>
                <div class="client-logo-row">
                    <img src="{{ asset('assets/gino.png') }}" alt="">
                    <img src="{{ asset('assets/yango.png') }}" alt="">
                    <img src="{{ asset('assets/lucozade.png') }}" alt="">
                    <img src="{{ asset('assets/hdplus.png') }}" alt="">
                    <img src="{{ asset('assets/coke.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="home-intro-text">
        <img src="{{ asset('assets/homepage/arrow-header.svg') }}" alt="">
        <p>We discus on business performance and metrics that matter- 
            sales, new customers, revenue, and such.</p>
    </div>

    <div class="home-body-row1">
        <div class="row1-text">
            <h2>We are Interactive Digital</h2>
            <p>We are an award-winning, full service digital marketing agency that creates compelling online experiences in digital media for great brands. Our solutions leverage strategy, creative thinking and coordinated execution to deliver on business goals through digital..</p>
        </div>
        <div class="row1-image">
            <img src="{{ asset('assets/homepage/image-1-home.webp') }}" alt="Background says Movin'">
        </div>
    </div>

    <div class="home-body-row2">
        <div class="row2-image">
            <img src="{{ asset('assets/homepage/image-2-home.webp') }}" alt="">
        </div>
        <div class="row2-text">
            <h1>Our Services</h1>
            <p>Some layout verbiage goes here. It’ll be something witty. Probably a music metaphor. Maybe even insightful. But most DEFINITELY about how we use the grid to build responsive works-of-art in our beloved digital-stratosphere.</p>
            <div class="services-container">
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Social Media</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Social Media</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Social Media</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Social Media</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Social Media</p>
                </div>
            </div>
            <a href="#"><h3 class="view-all">View All</h3></a>
        </div>
    </div>

    <div class="home-body-row3">
        <div class="row3-text">
            <h1 class="title">Our Process</h1>
            <div class="row3-process-container">
                <div class="process">
                    <div class="process-image">
                        <img src="{{ asset('assets/homepage/process-icon-1.svg') }}" alt="">
                    </div>
                    <div class="process-text">
                        <h1>...always listening</h1>
                        <p>We’re constantly plugged into 
                            the social media and digital 
                            landscape, looking for triggers that
                            inspire our creativity for your brand.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="process-image">
                        <img src="{{ asset('assets/homepage/process-icon-1.svg') }}" alt="">
                    </div>
                    <div class="process-text">
                        <h1>...always learning</h1>
                        <p>A brand new digital identity and website 
                            for the subscription App service that 
                            focuses on happy subscribers.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="process-image">
                        <img src="{{ asset('assets/homepage/process-icon-2.svg') }}" alt="">
                    </div>
                    <div class="process-text">
                        <h1>...always creating</h1>
                        <p>How we turned a local studio into 
                            one of the biggest video agencies 
                            in the south of the UK.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row3-image">
            <img src="{{ asset('assets/homepage/image-3-home.webp') }}" alt="Hippie Coorperate Black Guy">
        </div>
    </div>




    <div class="home-body-row4">
        <h1>Our Portfolio</h1>
        <div class="portfolio-row4">
            <div class="portfolio-row4-card">
                <div class="card-image">
                    <img src="{{ asset('assets/homepage/mtn.webp') }}" alt="">
                </div>
                <div class="card-text">
                    <h4>MTN-Ghana</h4>
                    <p>Digital Marketing</p>
                </div>
            </div>

            <div class="portfolio-row4-card">
                <div class="card-image">
                    <img src="{{ asset('assets/homepage/coronation.webp') }}" alt="">
                </div>
                <div class="card-text">
                    <h4>MTN-Ghana</h4>
                    <p>Digital Marketing</p>
                </div>
            </div>

            <div class="portfolio-row4-card">
                <div class="card-image">
                    <img src="{{ asset('assets/homepage/malt.webp') }}" alt="">
                </div>
                <div class="card-text">
                    <h4>MTN-Ghana</h4>
                    <p>Digital Marketing</p>
                </div>
            </div>

            <div class="portfolio-row4-card">
                <div class="card-image">
                    <img src="{{ asset('assets/homepage/stanbic.webp') }}" alt="">
                </div>
                <div class="card-text">
                    <h4>MTN-Ghana</h4>
                    <p>Digital Marketing</p>
                </div>
            </div>
        </div>
        <div class="portfolio-row4-dots">
            <span class="dot on"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <div class="home-body-row5">
        <h1>What our customers <br> are saying</h1>
        <div class="testimonial-row">
            <div class="row5-testimonial-card">
                <div class="testimonial-info-row">
                    <div class="info">
                        <img src="{{ asset('assets/homepage/person-1.webp') }}" alt="">
                        <div class="text">
                            <h3>Jenny Wilson</h3>
                            <p>UI-UX Designer</p>
                        </div>
                    </div>
                    <img class="quote" src="{{ asset('assets/homepage/quotes.svg') }}" alt="">
                </div>
                <p>Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra. Nam sed imperdiet turpis. In hac habitasse platea dictumst. Praesent nulla massa, hendrerit vestibulum gravida in, feugiat auctor felis.</p>
                <p>Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra. Nam sed imperdiet turpis. In hac habitasse platea dictumst.</p>
            </div>

            <div class="row5-testimonial-card">
                <div class="testimonial-info-row">
                    <div class="info">
                        <img src="{{ asset('assets/homepage/person-2.webp') }}" alt="">
                        <div class="text">
                            <h3>Jenny Wilson</h3>
                            <p>UI-UX Designer</p>
                        </div>
                    </div>
                    <img class="quote" src="{{ asset('assets/homepage/quotes.svg') }}" alt="">
                </div>
                <p>Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra. Nam sed imperdiet turpis. In hac habitasse platea dictumst. Praesent nulla massa, hendrerit vestibulum gravida in, feugiat auctor felis.</p>
                <p>Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra. Nam sed imperdiet turpis. In hac habitasse platea dictumst.</p>
            </div>
        </div>

        <div class="testimonial-row5-dots">
            <span class="dot on"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>



    <section id="home-blog">
        {{-- <h1 class="home-blog-title">Our Blog</h1> --}}
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