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
    @include('components.header')


      <div class="service1-container">
        <div class="service1-row1">
            <img class="zoom" src="{{ asset('assets/services/smm1.webp') }}" alt="">
            <div class="service1-content">
                <h2>Social media <br> <span class="bold">Marketing</span></h2>
                <p>Cut through the noise and find your people! <br> You need people to see you and what you can do. No <br> problem! Sit back, relax, and let us create content that <br>speaks to your tribe!</p>
                <a href="{{ route('sm-marketing') }}"><p>Get interactive on social media</p></a>
            </div>
        </div>
        <div class="service1-row2">
            <img class="zoom" src="{{ asset('assets/services/smm2.webp') }}" alt="">
            <img class="zoom" src="{{ asset('assets/services/smm3.webp') }}" alt="">
        </div>
      </div>

      <div class="service2-container">
        <div class="service2-row">
            <img class="zoom" src="{{ asset('assets/services/prod-img.webp') }}" alt="">
            <div class="service2-content">
                <h2>Media <br> <span class="bold">PRODUCTION</span></h2>
                <p>the hustle and bustle of infinite scrolling, you need a story that stops people in their tracks, with captivating visuals to match. And that’s where we come in…</p>
                <a href="#"><p>Shoot my big story!</p></a>
            </div>
        </div>
      </div>

      <div class="service1-container">
        <div class="service1-row1">
            <img class="zoom" src="{{ asset('assets/services/online-ad1.webp') }}" alt="">
            <div class="service1-content">
                <h2>Online <br> <span class="bold">ADVERTISEMENT</span></h2>
                <p>Getting found online is hard. Getting found by the right audience? - even harder. Navigating the Wild West of the Internet is no easy feat… unless you’re a pro, like us!</p>
                <a href="{{ route('online-advertising') }}"><p>Advertise with us!</p></a>
            </div>
        </div>
        <div class="service1-row2">
            <img class="zoom" src="{{ asset('assets/services/online-ad2.webp') }}" alt="">
            <img class="zoom" src="{{ asset('assets/services/online-ad3.webp') }}" alt="">
        </div>
      </div>

      <div class="service2-container service2-consult">
        <div class="service2-row">
            <img class="zoom" src="{{ asset('assets/services/consulting.webp') }}" alt="">
            <div class="service2-content consulting-text">
                <h2>Strategy<br> <span class="bold">CONSULTING</span></h2>
                <p>If at first you don’t succeed, just call us! Millions of accounts and thousands of brands, all fighting for top billing. Standing out is all about cracking the code. And would you look at that, we have that here, ready and waiting - just for you!</p>
                <a href="{{ route('strategy') }}"><p>Talk to us</p></a>
            </div>
        </div>
      </div>

      <div class="service1-container">
        <div class="service1-row1">
            <img class="zoom" src="{{ asset('assets/services/software-dev.webp') }}" alt="">
            <div class="service1-content">
                <h2>Software<br> <span class="bold">DEVELOPMENT</span></h2>
                <p>Find your spot in a noisy world. We know the exact place We harness the power of digital channels to expand your brand’s reach. Our digital marketing experts develop data-driven strategies to connect with your target audience, increase engagement, and drive conversions..</p>
                <a href="#"><p>Get interactive on social media</p></a>
            </div>
        </div>
        <div class="service1-row2">
            <img class="zoom" src="{{ asset('assets/services/smm2.webp') }}" alt="">
            <img class="zoom" src="{{ asset('assets/services/smm3.webp') }}" alt="">
        </div>
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

  <!-- Calling jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>
  </body>
</html>
