<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - About Us</title>

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
      {{-- <header>

        @include('components.navbar') --}}

        <!-- ends here -->

        {{-- <div class="about-header">
            <div class="header-text"> --}}
                {{-- <h3>About Us</h3> --}}
                {{-- <h1 class="bold">Welcome</h1> --}}
                {{-- <p>We discus on business performance and metrics that matter- sales, new customers, revenue, and such.</p> --}}
            {{-- </div>
            <div class="header-image">
                <img src="assets/about-header-1.png" alt="" class="header1">
                <img src="assets/about-header-2.png" alt="" class="header2">
            </div>
        </div>
      </header> --}}

      <header id="header-services">

        @include('components.navbar')


        <div class="header-2">
          <img src="assets/services/header2.png" class="service-header-2" alt="">
          <img src="assets/mobile-header-service.png" class="service-header-2-mobile" alt="">
        </div>
        <!-- ends here -->
      </header>


      <section class="about-column">
        {{-- <div class="about-row-1">
          <div class="about-card"><img src="assets/about1.png" alt="" class="about1"></div>
          <div class="about-card"><img src="assets/about2.png" alt="" class="about2"></div>
          <div class="about-card"><img src="assets/about3.png" alt="" class="about3"></div>
        </div> --}}


        <div class="about-row-2">
            <div class="about-intro-img">
                <img src="assets/about-intro.png" alt="">
            </div>
            <div class="about-intro-text">
                <h2 class="bold-red">LET US INTRODUCE OURSELVES!</h2>
                <p>Welcome to Interactive Digital! We are a full-service digital marketing agency, crafting captivating online experiences around great brands! We leverage innovative strategies, creative thinking and coordinated executions to deliver on your business goals in the digital space!</p>
            </div>
        </div>
      </section>

      <img src="assets/about-page-blob.svg" alt="" class="about-blob-1">

      <secion class="about-section-2">
        <div class="banner-1">
            <img src="assets/about-banner.png" alt="">
        </div>
        <div class="section-2">
            <div class="section-2-container">
                <div class="section-2-text">
                    <h2 class="bold-red">Why choose ID?</h2>
                    <p>Need an agency well-versed in shaping engaging digital experiences, from start to finish, or strat to execution, perfectly suited for your business needs? What a specific brief. But as luck would have it, you’ve come to the right place!</p>
                </div>
                <div class="section-2-img">
                    <img src="assets/about-img.png" alt="">
                </div>
            </div>
        </div>
      </secion>


      <section class="about-section-3">
        <h1 class="section-title bold-red">MEET THE TEAM!</h1>
        <div class="team-card-row">
            <div class="team-card">
                <img src="assets/team/team1.png" alt="" class="team-pic">
                <div class="team-title">
                    <h5>Chief Operating Officer</h5>
                </div>
                <div class="team-name">
                    <h4>Mr. Ekow Thompson</h4>
                </div>
            </div>

            <div class="team-card">
                <img src="assets/team/team2.png" alt="" class="team-pic">
                <div class="team-title">
                    <h5>UI/UX Designer</h5>
                </div>
                <div class="team-name">
                    <h4>Mr. Alex Jerry Sam</h4>
                </div>
            </div>

            <div class="team-card">
                <img src="assets/team/team3.png" alt="" class="team-pic">
                <div class="team-title">
                    <h5>Strategist</h5>
                </div>
                <div class="team-name">
                    <h4>Mr. Akrofi Sam</h4>
                </div>
            </div>
        </div>
      </section>



      {{-- <section class="adbox-2">
        <div class="adbox-2-row">
          <div class="ad-img">
            <img src="assets/ad-card-round.png" alt="">
          </div>
          <div class="ad-text">
            <h1>Let's <span>Collaborate</span> to <br>create a better experience</h1>
          </div>
          <div class="ad-gif">

          </div>
        </div>
      </section> --}}
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
