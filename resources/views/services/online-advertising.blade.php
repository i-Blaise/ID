<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Online Advertising</title>
    {{-- Favicon  --}}
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
      <header id="header-online-ad">
        @include('components.navbar')
        <div class="header-2">
            <img src="assets/services/online-ad-header2.webp" class="online-ad-header-2" alt="">
            {{-- <img src="assets/mobile-header-service.png" class="service-header-2-mobile" alt=""> --}}
          </div>
          <a class="online-ad-header-cta" href="#">
              <p>your digital powerhouse...</p>
          </a>
        <!-- ends here -->
      </header>


      <section class="ad-space">
        <div class="ad-space-banner">
            <h2>Seeing is <span class="bold">believing</span>, and the numbers don’t lie!</h2>
            <p>We are creatives, which means stellar work is our ultimate goal. But we do understand that it doesn’t amount to much if it is placed in front of the right audiences. So it’s a great thing we have a clear understanding of audiences. Through effective research, we establish note-worthy human behaviour online, analyse new markets developing, examine demographic interests in order to advertise the right digital material for the purposes of conversion and brand growth.</p>
        </div>
      </section>


      <img src="assets/blog-blob2.svg" class="marketing-blob1" alt="">

      <section id="online-ad">
        <div class="online-ad-row1">
            <div class="row1-image">
                <img src="{{ asset('assets/services/alvaro-ad.webp') }}" alt="Alvaro Ad">
            </div>
            <div class="row1-content malt-sec">
                <h3 class="malt">Team Work</h3>
                <h2>Malta <br> <span class="ad-white-text">Guinness</span></h2>
                <p>Cut through the noise and find your people! You need people to see you and what you can do. No problem! Sit back, relax, and let us create content that speaks to your tribe!</p>
            </div>
        </div>
        <div class="online-ad-row2">
            <img src="{{ asset('assets/services/malt-ad.webp') }}" alt="Malt Ad">
            <img src="{{ asset('assets/services/malt-ad1.webp') }}" alt="Malt Ad">
            <img src="{{ asset('assets/services/malt-ad2.webp') }}" alt="Malt Ad">
            <img src="{{ asset('assets/services/malt-ad3.webp') }}" alt="Malt Ad">
        </div>
      </section>


      <section id="online-ad">
        <div class="online-ad-row1">
            <div class="row1-image">
                <img src="{{ asset('assets/services/dosh-ad.webp') }}" alt="Dosh Ad">
            </div>
            <div class="row1-content dosh-sec">
                <h3 class="dosh ad-white-text">Team Work</h3>
                <h2>Dosh <br> <span class="ad-white-text">Insurance</span></h2>
                <p class="ad-white-text">Empowering Financial Wellness. In today’s ultra-competitive business world, true leadership demands ambition, focus, and an unerring drive. At DOSH, we recognize and seek out like-minded businesses and individuals. With over 20 years of financial and insurance expertise, we provide essential support and guidance, via an accessible, affordable, and convenient service-specific ecosystem. The DOSH mandate is simple; To provide industry-leading solutions and services to our clients, while bridging the financial divide that hinders true inclusion.</p>
            </div>
        </div>
        <div class="online-ad-row2">
            <img src="{{ asset('assets/services/dosh-ad1.webp') }}" alt="Malt Ad">
            <img src="{{ asset('assets/services/dosh-ad2.webp') }}" alt="Malt Ad">
            <img src="{{ asset('assets/services/dosh-ad3.webp') }}" alt="Malt Ad">
            <img src="{{ asset('assets/services/dosh-ad4.webp') }}" alt="Malt Ad">
        </div>
      </section>


      <img src="assets/blog-blob3.svg" class="marketing-blob2" alt="">




      <section id="online-ad" class="stanbic-ad">
        <div class="online-ad-row1">
            <div class="row1-image">
                <img src="{{ asset('assets/services/stanbic-ad.webp') }}" alt="Stanbic Ad">
            </div>
            <div class="row1-content stanbic-sec">
                <h3 class="stanbic ad-white-text">Team Work</h3>
                <h2 class="ad-white-text">Stanbic <br> <span>Bank</span></h2>
                <p class="ad-white-text">Cut through the noise and find your people! You need people to see you and what you can do. No problem! Sit back, relax, and let us create content that speaks to your tribe!</p>
            </div>
        </div>
        <div class="online-ad-row2">
            <img src="{{ asset('assets/services/stanbic-ad1.webp') }}" alt="Stanbic Ad">
            <img src="{{ asset('assets/services/stanbic-ad2.webp') }}" alt="Stanbic Ad">
            <img src="{{ asset('assets/services/stanbic-ad3.webp') }}" alt="Stanbic Ad">
            <img src="{{ asset('assets/services/stanbic-ad4.webp') }}" alt="Stanbic Ad">
        </div>
      </section>



      <section id="online-ad" class="last-ad">
        <div class="online-ad-row1">
            <div class="row1-image">
                <img src="{{ asset('assets/services/mtn-ad.webp') }}" alt="MTN Ad">
            </div>
            <div class="row1-content mtn-sec">
                <h3 class="mtn">Team Work</h3>
                <h2><span>MTN</span></h2>
                <p>Empowering Financial Wellness.
                    In today’s ultra-competitive business world, true leadership demands ambition, focus, and an unerring drive. At DOSH, we recognize and seek out like-minded businesses and individuals. With over 20 years of financial and insurance expertise, we provide essential support and guidance, via an accessible, affordable, and convenient service-specific ecosystem. The DOSH mandate is simple; To provide industry-leading solutions and services to our clients, while bridging the financial divide that hinders true inclusion.</p>
            </div>
        </div>
        <div class="online-ad-row2">
            <img src="{{ asset('assets/services/mtn-ad1.webp') }}" alt="MTN Ad">
            <img src="{{ asset('assets/services/mtn-ad2.webp') }}" alt="MTN Ad">
            <img src="{{ asset('assets/services/mtn-ad3.webp') }}" alt="MTN Ad">
            <img src="{{ asset('assets/services/mtn-ad4.webp') }}" alt="MTN Ad">
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
    </body>
    </html>
