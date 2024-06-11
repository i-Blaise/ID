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
        <div class="header-title-mobile">
          <h1>Social Media <br></h1>
          <h1 class="two-x">Marketing</h1>
        </div>
          <div class="header-2">
            <img src="assets/services/online-marketing-header2.png" class="online-ad-header-2">
          </div>
        <!-- ends here -->
      </header>


      <section class="ad-space">
        <div class="ad-space-banner">
            <h2>Seeing is believing, and the numbers don’t lie!</h2>
            <p>We are creatives, which means stellar work is our ultimate goal. But we do understand that it doesn’t amount to much if it is placed in front of the right audiences. So it’s a great thing we have a clear understanding of audiences. Through effective research, we establish note-worthy human behaviour online, analyse new markets developing, examine demographic interests in order to advertise the right digital material for the purposes of conversion and brand growth.</p>
        </div>
      </section>


      <img src="assets/blog-blob2.svg" class="marketing-blob1" alt="">

      <section>
        <div class="account1-row">
            <div class="account1-image">
                <img class="malta-img" src="assets/services/malta-sm.png" alt="">
            </div>
            <div class="account1-texts">
                <div class="desc">
                    <h5>Malta Guinness</h5>
                    <p>Venenatis blandit habitasse nunc, sapien enim elit in. Arcu, pharetra, et cursus sit senectus in blandit. Aliquet enim fermentum non semper nibh ut neque. Pellentesque ut tincidunt vitae arcu bibendum malesuada lorem sapien volutpat.</p>
                </div>
                <div class="team-title">
                    <h6>Team Members</h6>
                </div>
                <img src="assets/services/mtn-team.png" alt="">
            </div>
        </div>
      </section>



      <section>
        <div class="account2-row">
            <div class="account2-image">
                <img class="stanbic-img" src="assets/services/stanbic-sm.png" alt="">
            </div>
            <div class="account2-texts stanbic-text">
                <div class="desc">
                    <h5>Stanbic Bank Limited</h5>
                    <p>Venenatis blandit habitasse nunc, sapien enim elit in. Arcu, pharetra, et cursus sit senectus in blandit. Aliquet enim fermentum non semper nibh ut neque.</p>
                </div>
                <div class="team-title">
                    <h6>Team Members</h6>
                </div>
                <img src="assets/services/stanbic-team.png" alt="">
            </div>
        </div>
      </section>

      <img src="assets/blog-blob3.svg" class="marketing-blob2" alt="">



      <section>
        <div class="account1-row">
            <div class="account1-image">
                <img class="mtn-img" src="assets/services/online-ad-mtn.png" alt="">
            </div>
            <div class="account1-texts">
                <div class="desc">
                    <h5>Malta Guinness</h5>
                    <p>Venenatis blandit habitasse nunc, sapien enim elit in. Arcu, pharetra, et cursus sit senectus in blandit. Aliquet enim fermentum non semper nibh ut neque. Pellentesque ut tincidunt vitae arcu bibendum malesuada lorem sapien volutpat.</p>
                </div>
                <div class="team-title">
                    <h6>Team Members</h6>
                </div>
                <img src="assets/services/mtn-team.png" alt="">
            </div>
        </div>
      </section>

      <section class="last-row-mobile">
        <div class="account2-row">
            <div class="account2-image">
                <img class="stanbic-img" src="assets/services/stanbic-sm.png" alt="">
            </div>
            <div class="account2-texts">
                <div class="desc">
                    <h5>Stanbic Bank Limited</h5>
                    <p>Venenatis blandit habitasse nunc, sapien enim elit in. Arcu, pharetra, et cursus sit senectus in blandit. Aliquet enim fermentum non semper nibh ut neque.</p>
                </div>
                <div class="team-title">
                    <h6>Team Members</h6>
                </div>
                <img src="assets/services/stanbic-team.png" alt="">
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
    </body>
    </html>
