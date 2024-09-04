<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Contact Us</title>

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
            <!-- navbar begins here -->
    <header id="header-services">

        @include('components.navbar')


        <div class="header-2">
            <img src="assets/contact-header2.webp" class="aboutus-header-2" alt="">
            <h1 class="casestudy-title">Contact <span class="bold">Us</span></h1>
            {{-- <img src="assets/mobile-header-service.png" class="service-header-2-mobile" alt=""> --}}
        </div>
        <a class="aboutus-header-cta" href="#">
            <p>your digital powerhouse...</p>
        </a>
        <!-- ends here -->
        </header>

      <section class="contact2">
        <form class="contact2-form" action="#">
            <label for="javascript">Full Name</label> <br>
            <input type="text" name="Your Full Name" placeholder="Full name"><br>

            <label for="javascript">Email</label> <br>
            <input type="text" name="infor@interactivedigital.com" placeholder="Full name"> <br>


            <label for="javascript">Phone number</label> <br>
            <input type="text" name="+233.." placeholder="Full name"> <br>

            <label for="javascript">Your Message</label> <br>
            <textarea name="message" rows="4" cols="50">Your Message</textarea> <br>


            <input type="submit" value="SEND" >
        </form>
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
