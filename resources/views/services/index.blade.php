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
      <header id="header-services">

        @include('components.navbar')


        <div class="header-2">
          <img src="assets/services/header2.png" class="service-header-2" alt="">
          <img src="assets/mobile-header-service.png" class="service-header-2-mobile" alt="">
        </div>
        <!-- ends here -->
      </header>


      <section id="service-body">

        <div class="service-row social-market-row">
            <div class="service-image">
                <img src="assets/services/social-media-marketing.png" alt="">
            </div>
            <div class="service-text">
                <h1>Social Media <span>Marketing</span></h1>
                <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
                <div class="service-btn">
                    <a href="{{ route('sm-marketing') }}">
                        <p>Learn More</p>
                        <img src="assets/services/red-right-arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>


        <div class="service-row online-ad-row">
          <div class="service-text">
              <h1>Online <span> Advertising</span></h1>
              <p>Find your spot in a noisy world. We know the exact place
                We harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions..</p>
              <div class="service-btn">
                  <a href="{{ route('online-advertising') }}">
                      <p>View More</p>
                      <img src="assets/services/red-right-arrow.svg" alt="">
                  </a>
              </div>
          </div>
          <div class="service-image">
              <img src="assets/services/service2.png" class="online-ad-img" alt="">
          </div>
      </div>


      <div class="service-row media-prod-row">
        <div class="service-image">
            <img src="assets/services/service3.png" alt="">
        </div>
        <div class="service-text">
            <h1>Media <span> Production</span></h1>
            <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
            <div class="service-btn">
                <a href="{{ route('videography') }}">
                    <p>Learn More</p>
                    <img src="assets/services/red-right-arrow.svg" alt="">
                </a>
            </div>
        </div>
    </div>

    
    <div class="service-row web-design-row">
      <div class="service-text">
          <h1>Website <span> Design</span></h1>
          <p>Find your spot in a noisy world. We know the exact place
            We harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions..</p>
          <div class="service-btn">
              <a href="#">
                  <p>View More</p>
                  <img src="assets/services/red-right-arrow.svg" alt="">
              </a>
          </div>
      </div>
      <div class="service-image">
          <img src="assets/services/service4.png" alt="">
      </div>
  </div>


  <div class="service-row strat-consult-row">
    <div class="service-image">
        <img src="assets/services/service-strat.png" class="service-5" alt="">
    </div>
    <div class="service-text">
        <h1>Strategy <span> Consulting</span></h1>
        <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
        <div class="service-btn">
            <a href="{{ route('strategy') }}">
                <p>Learn More</p>
                <img src="assets/services/red-right-arrow.svg" alt="">
            </a>
        </div>
    </div>
</div>
  </section>


  <div class="ad-section">
    <!-- <img src="assets/ad-bg.png" alt=""> -->
  </div>
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