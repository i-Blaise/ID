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
    @include('components.header')


        <section class="ds-text-row">
            <div class="ds-desc">
                <h1 class="bold">CONSULTING</h1>
                <p>The Ninani Group and Interactive Digital for that matter, prides itself in a strong strategic orientation in profering communication solutions to its clients.This diversified product portfolio allows the strategic unit of the Interactive Digital to offer a comprehensive range of services to clients, catering to their various needs and objectives in the competitive advertising landscape. .These encompass .</p>
            </div>
        </section>



    <section class="ds-body-container">

        <section class="ds-row">
            <div class="ds-text scrollFade">
                <h2 class="bold">Brand Strategy:</h2>
                <p>Development of comprehensive brand strategies for clients, including market segmentation, brand positioning, targeting, messaging, and differentiation strategies.</p>
            </div>
            <div class="ds-image">
                <img class="zoomNoShadow" src="{{ asset('assets/services/strat.webp') }}" alt="Laptop design">
            </div>
        </section>


        <section class="ds-row">
            <div class="ds-image">
                <img class="zoomNoShadow" src="{{ asset('assets/services/strat1.webp') }}" alt="Laptop design">
            </div>
            <div class="ds-text">
                <h2 class="bold">Digital Marketing Service:</h2>
                <p>Creation and management of digital marketing campaigns, including always-on content for a strong digital presence, search engine marketing (SEM), search engine optimization (SEO), social media advertising, email marketing, and content marketing.</p>
            </div>
        </section>



        <section class="ds-row">
            <div class="ds-text">
                <h2 class="bold">Social Media Management:</h2>
                <p>Development of comprehensive brand strategies for clients, including market segmentation, brand positioning, targeting, messaging, and differentiation strategies.</p>
            </div>
            <div class="ds-image">
                <img class="zoomNoShadow" src="{{ asset('assets/services/strat2.webp') }}" alt="Laptop design">
            </div>
        </section>


        <section class="ds-row">
            <div class="ds-image">
                <img class="zoomNoShadow" src="{{ asset('assets/services/strat3.webp') }}" alt="Laptop design">
            </div>
            <div class="ds-text">
                <h2 class="bold">Marketing Research and Analytics:</h2>
                <p>Development of comprehensive brand strategies for clients, including market segmentation, brand positioning, targeting, messaging, and differentiation strategies.</p>
            </div>
        </section>


        <section class="ds-row">
            <div class="ds-text">
                <h2 class="bold">Consulting & Training:</h2>
                <p>Development of comprehensive brand strategies for clients, including market segmentation, brand positioning, targeting, messaging, and differentiation strategies.</p>
            </div>
            <div class="ds-image">
                <img class="zoomNoShadow" src="{{ asset('assets/services/strat4.webp') }}" alt="Laptop design">
            </div>
        </section>

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


  <!-- Calling jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>
  </body>
  </html>
