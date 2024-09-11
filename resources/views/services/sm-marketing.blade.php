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
            <img src="assets/services/marketing-header2.webp" class="marketing-header-2" alt="">
            <h1 class="marketing-title">Digital <br> <span class="bold">MARKETING</span></h1>
            {{-- <img src="assets/mobile-header-service.png" class="service-header-2-mobile" alt=""> --}}
          </div>
          <a class="marketing-header-cta" href="#">
              <p>your digital powerhouse...</p>
          </a>
        <!-- ends here -->
      </header>


      {{-- <section class="ad-space">
        <div class="ad-space-banner">
            <h1>AD SPACE</h1>
            <p>Find your spot in a noisy world. We know the exact place we harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions.</p>
        </div>
      </section> --}}
      <section class="sm-marketing-text-row scrollFade">
        <div class="sm-marketing-desc">
            <h1>“Bring your “<span class="bold">business to social media</span>”, they said. “It will be easy”, they said.</h1>
            <p>Yes, it’s clear to see why it’s not so easy. Over 4 billion people currently use social media to share, inform and build profitable relationships. However, there are unique ways of using your voice in the best-suited forms for your existing and potential customers. Sometimes that can be overwhelming and that’s where WE come in. We take on the reins to help you define your brand, identify your people and seamlessly integrate your goals, and objectives into sellable, valuable content that your tribe will care about.</p>
        </div>
      </section>
      {{-- <img src="{{ asset("assets/services/sm-blob-1.svg") }}" alt="" class="sm-blob-1"> --}}



      <section class="marketing-row">
        <div class="marketing-card card-1 zoomNoShadow">
            <h3>Search Engine Optimization</h3>
        </div>
        <div class="marketing-card card-2 zoomNoShadow">
            <h3>Digital <br> Advertising</h3>
        </div>
        <div class="marketing-card card-3 zoomNoShadow">
            <h3>Email / drip Marketing</h3>
        </div>
      </section>


      <img src="{{ asset('assets/services/line-art-illustration-of-a-man-peep-vector.png') }}" alt="" class="sm-line-illustration">


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

  <!-- Calling jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>
  </body>
  </html>
