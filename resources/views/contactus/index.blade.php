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
              
        @include('components.navbar')
              <!-- ends here -->
              
      <header id="header-contact">
        <img src="{{ asset('assets/contact-header-mobile.webp') }}" alt="">
      </header>


      <section class="contactus">
        <div class="contact-row">
            <div class="contact-texts">
                <h1>Link Up Quick!</h1>
                <img src="assets/underline.svg" class="underline" alt="">

                <div class="contact-texts-list">
                    <div class="list">
                        <img src="assets/check.svg" class="check" alt="">
                        <p>Do you have a business and wish to be known?</p>
                    </div>
                    <div class="list">
                        <img src="assets/check.svg" class="check" alt="">
                        <p>Any business ideas?</p>
                    </div>
                    <div class="list">
                        <img src="assets/check.svg" class="check" alt="">
                        <p>All the business strategy you need</p>
                    </div>
                </div>
                <a href="#" class="cta">
                    <p class="cta-btn">Make the Call</p>
                    <img src="assets/right-arrow.svg" alt="">
                </a>
            </div>
            <div class="contact-form">
                <h4>Make an inquiry</h4>

                <form action="">
                    <input type="text" name="fullname" placeholder="Full name">

                    <select name="services">
                        <option value="australia">What services are you interested in?</option>
                        <option value="canada">Web Development</option>
                        <option value="usa">Social Media Advertisement</option>
                      </select>

                    <input type="email" name="email" placeholder="Email address">

                    
                    <select name="services">
                        <option value="australia">How did you hear about us?</option>
                        <option value="canada">Social Media</option>
                        <option value="usa">Word of mouth</option>
                      </select>
                      
                    <input type="text" name="phone" placeholder="Phone number">

                    <textarea name="message" rows="4" cols="50">Leave a message</textarea>

                    <input type="submit" value="Submit">
                </form>
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