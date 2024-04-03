<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Online Advertising</title>

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
      <header id="header-sm-marketing">
        {{-- Navbar  --}}
        @include('components.navbar')

          <div class="header-2">
            <img src="assets/services/marketing-header-2.png" class="sm-header-2" alt="">
            <img src="assets/services/sm-marketing-mobile.png" class="sm-header-2-mobile" alt="">
          </div>
        <!-- ends here -->
      </header>


      {{-- <section class="ad-space">
        <div class="ad-space-banner">
            <h1>AD SPACE</h1>
            <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
        </div>
      </section> --}}
      <section class="sm-marketing-text-row">
        <div class="sm-marketing-desc">
            <h1>Social Media Marketing</h1>
            <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
        </div>
      </section>
      <img src="{{ asset("assets/services/sm-blob-1.svg") }}" alt="" class="sm-blob-1">


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
        <img src="{{ asset('assets/services/sm-bg-2-mobile.png') }}" alt="" class="bg-person">
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
    
  </body>
  </html>
