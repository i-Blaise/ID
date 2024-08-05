<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> --}}
    <meta name="viewport" content="width=device-width" />
    <title>!D - Home Page</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <!-- Include the stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/normalize.css">
    <link rel="stylesheet" href="css/styles.css?v=1.3" />
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


<!-- Add Slick CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  </head>
  <body>
    <header id="header-homepage">

    @include('components.navbar')

    <div class="header-info-row">
        <div class="left-header-info">
            <h1 class="bold">YOUR <br> <span>DIGITAL</span> <br>POWER HOUSE.
            </h1>
            <p>Creating experiences, driving solutions, growing your business...
                <br>   is our business.</p>
        </div>
        <div class="right-header-info">
            <img src="{{ asset('assets/homepage/id.svg') }}" class="ID-text-logo" alt="Interactive DIgital">
            {{-- <div class="client-row">
                <h3>Touched By Us</h3>
                <div class="client-logo-row">
                    <img src="{{ asset('assets/gino.png') }}" alt="">
                    <img src="{{ asset('assets/yango.png') }}" alt="">
                    <img src="{{ asset('assets/lucozade.png') }}" alt="">
                    <img src="{{ asset('assets/hdplus.png') }}" alt="">
                    <img src="{{ asset('assets/coke.png') }}" alt="">
                </div>
            </div> --}}
        </div>
    </div>


    <div class="slideshow-container">
        <div class="slideshow-hero" id="fade">
          <div class="slide-image">
            <img src="assets/slideshow/slider1.png" alt="">
          </div>
            <h1 class="r1">Grow your</h1><br>
            <h1><span>business</span> not your <br></h1>
            <h1 class="r2">followers</h1><br>
            <p>We discus on business performance and metrics that matter- sales, new customers, revenue, and such.</p>
            <div class="slideshow-dot">
              <span class="dot on" onclick="currentSlide(0)"></span>
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
            </div>
          <a class="slideshow-cta" href="#">
              <p>Come have a chat (CTA)...</p>
          </a>
        </div>
    </header>


    {{-- <section id="clients">
        <h1>Touched by Us</h1>
        <div class="clients-row">
          <img src="assets/gino.png" alt="client-logo" class="client-logo">
          <img src="assets/yango.png" alt="client-logo" class="client-logo">
          <img src="assets/lucozade.png" alt="client-logo" class="client-logo">
          <img src="assets/hdplus.png" alt="client-logo" class="client-logo">
          <img src="assets/coke.png" alt="client-logo" class="client-logo">
        </div>
      </section> --}}



    {{-- <div class="home-intro-text">
        <img src="{{ asset('assets/homepage/arrow-header.svg') }}" alt="">
        <p>Creating experiences, driving solutions, growing your business...
         <br>   is our business.</p>
    </div> --}}

    <div class="home-body-row1">
        <div class="row1-text">
            <h1 class="bold">You dream it, <br> we create it</h1>
            <p>An award-winning 360° marketing communications agency that creates compelling experiences for great brands. Our solutions leverage strategy, creative thinking and coordinated executions to deliver on business goals with focus on digital. Our approach is agile, collaborative and human-led...</p>
        </div>
        <div class="row1-image">
            <img src="{{ asset('assets/homepage/image-1-home.webp') }}" alt="Background says Movin'">
        </div>
    </div>

    <div class="home-body-row2">
        <div class="row2-image">
            <img src="{{ asset('assets/homepage/image-2-home.webp') }}" alt="">
        </div>
        <div class="row2-text">
            <h1 class="bold">Our Services</h1>
            <p>When we say 360, we mean it. From content creation to media production, we do it all.</p>
            <div class="services-container">
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Brand Management</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Research & Strategy Dev’t</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Digital Advertising</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Software Development</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Social Media Management</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Audio/Visual Production</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Creative Design</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Technology Management</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Influencer Marketing</p>
                </div>
                <div class="service">
                    <img src="{{ asset('assets/homepage/red-dot.svg') }}" alt="">
                    <p>Below-the-Line Marketing</p>
                </div>
            </div>
            {{-- <a href="{{ route('services') }}"><h3 class="view-all bold">View All</h3></a> --}}
        </div>
        <div class="row2-image-mobile">
            <img src="{{ asset('assets/homepage/mobile-service-img.webp') }}" alt="">
        </div>
    </div>

    {{-- <div class="home-body-row3">
        <div class="row3-text">
            <h1 class="title bold">Our Process</h1>
            <div class="row3-process-container">
                <div class="process">
                    <div class="process-image">
                        <img src="{{ asset('assets/homepage/process-icon-2.svg') }}" alt="">
                    </div>
                    <div class="process-text">
                        <h2>...always listening</h2>
                        <p>We’re always tuned in to what’s what,
                            using insights to help your brand cut
                            through the noise and reach your
                            consumers.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="process-image">
                        <img src="{{ asset('assets/homepage/process-icon-2.svg') }}" alt="">
                    </div>
                    <div class="process-text">
                        <h2>...always learning</h2>
                        <p>We don’t just plan - we explore your market
                            and discover the truth about how it works,
                            and what makes a difference in your industry.
                            Keeping pace with the speed of digital.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="process-image">
                        <img src="{{ asset('assets/homepage/process-icon-2.svg') }}" alt="">
                    </div>
                    <div class="process-text">
                        <h2>...always creating</h2>
                        <p>With a team of creatives bursting at the
                            seams with ideas and executions, we’re
                            ready to bring your dreams to life!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row3-image">
            <img src="{{ asset('assets/homepage/image-3-home.webp') }}" alt="Hippie Coorperate Black Guy">
        </div>
    </div> --}}


    <div class="home-body-row3">

        <div class="process-container">
        <h1 class="process-title">Our Process</h1>
        <div class="process-card-row">
            <div class="process-card">
                <h2 class="process-card-title">id</h2>
                <h2 class="process-card-subtitle">...always listening</h2>
                <hr class="process-card-hr">
                <p>We’re always tuned in to <br> what’s what,<br>
                    using insights to help your <br> brand cut <br>
                    through the noise and <br> reach your <br>
                    consumers.</p>
            </div>

            <div class="process-card process-card-bg">
                <h2 class="process-card-title">id</h2>
                <h2 class="process-card-subtitle">...always listening</h2>
                <hr class="process-card-hr">
                <p>We don’t just plan - we <br> explore your market <br> and discover the truth <br> about how it works, <br> and what makes a <br>difference in your <br> industry. <br>Keeping pace with the <br> speed of digital Truck</p>
            </div>

            <div class="process-card">
                <h2 class="process-card-title">id</h2>
                <h2 class="process-card-subtitle">...always listening</h2>
                <hr class="process-card-hr">
                <p>With a team of <br> creatives bursting at <br> the <br> seams with ideas and <br> executions, we’re <br>ready to bring your <br> dreams to life!.</p>
            </div>
        </div>
        </div>
    </div>








    <div class="home-body-row4">
        <h1 class="portfolio-title bold">Our Portfolio</h1>
        <section class="regular slider">
            <div class="portfolio-card">
              <img src="{{ asset('assets/homepage/malt.webp') }}">
              <h2 class="portfolio-card-title">Malta Guinness</h2>
            </div>
            <div class="portfolio-card">
              <img src="{{ asset('assets/homepage/stanbic.webp') }}">
              <h2 class="portfolio-card-title">Stanbic Bank</h2>
            </div>
            <div class="portfolio-card">
              <img src="{{ asset('assets/homepage/mtn.webp') }}">
              <h2 class="portfolio-card-title">MTN</h2>
            </div>
            <div class="portfolio-card">
              <img src="{{ asset('assets/homepage/dosh.webp') }}">
              <h2 class="portfolio-card-title">DOSH</h2>
            </div>
            <div class="portfolio-card">
                <img src="{{ asset('assets/homepage/malt.webp') }}">
                <h2 class="portfolio-card-title">Malta Guinness</h2>
              </div>
        </section>
    </div>




    {{-- <div class="home-body-row5">
        <h1 class="big-screen bold">Don't take our word for it, <br> ask them</h1>
        <h1 class="mobile bold">What everyone says</h1>
        <div class="testimonial-row">
            <div class="row5-testimonial-card">
                <div class="testimonial-info-row">
                    <div class="info">
                        <img src="{{ asset('assets/homepage/1.webp') }}" alt="">
                        <div class="text">
                            <h3>Felix Sowah</h3>
                            <p>Product Manager</p>
                        </div>
                    </div>
                </div>
                <p>An innovative digital company, committed to delivering exceptional personalized services, seamlessly integrates technology and expertise to fulfill tasks with style and finesse..</p>
            </div>

            <div class="row5-testimonial-card">
                <div class="testimonial-info-row">
                    <div class="info">
                        <img src="{{ asset('assets/homepage/2.webp') }}" alt="">
                        <div class="text">
                            <h3>Mathias Akoto-Philips</h3>
                            <p>UI-UX Designer</p>
                        </div>
                    </div>
                </div>
                <p>Combining advanced automation with a dedicated team of professionals, the company consistently delivers high-quality results, making it the go-to choice for discerning individuals seeking a seamless blend of style, functionality, and class..</p>
            </div>
        </div>

        <div class="testimonial-row5-dots">
            <span class="dot on"></span>
            <span class="dot"></span>
        </div>
    </div> --}}


      <section class="lazy slider" data-sizes="50vw">
    <div class="testimonial-container">
      <div class="testimonial-img">
        <img src="{{ asset('assets/homepage/testimonial-img.webp') }}" alt="">
      </div>
      <div class="testimonial-text">
        <h1>Emillie <br> Jonas</h1>
        <h3>CEO</h3>
        <p>Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.  Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge. It comes highly recommended from my side.</p>
      </div>
    </div>
    <div class="testimonial-container">
        <div class="testimonial-img">
          <img src="{{ asset('assets/homepage/testimonial-img.webp') }}" alt="">
        </div>
        <div class="testimonial-text">
          <h1>Emillie <br> Jonas</h1>
          <h3>CEO</h3>
          <p>Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.  Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge. It comes highly recommended from my side.</p>
        </div>
      </div>
      <div class="testimonial-container">
        <div class="testimonial-img">
          <img src="{{ asset('assets/homepage/testimonial-img.webp') }}" alt="">
        </div>
        <div class="testimonial-text">
          <h1>Emillie <br> Jonas</h1>
          <h3>CEO</h3>
          <p>Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.  Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge. It comes highly recommended from my side.</p>
        </div>
      </div>
  </section>


    <section id="home-blog">
        {{-- <h1 class="home-blog-title">Our Blog</h1> --}}
        <div class="main-blog-row">
        <div class="blog-cards-row blog-cards-row-home">
          <div class="blog-card">
            <img src="{{ asset('assets/homepage/blog1.webp') }}" class="home"  alt="">
            <div class="blog-card-text">
              <h2>A dive into the digital phase of advertising</h2>
              <p class="body-text">Advertising has transcended traditional boundaries into the digital phase over the last 30 years, and it’s a change anyone in the advertising field should be constantly adapting to..</p>
              <div class="card-info">
                <img src="{{ asset('assets/homepage/3.webp') }}" class="home-blog-author"  alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>Janet A. Saah</h3>
                  <p>April 02, 2024 &nbsp; <img src="assets/red-dot.svg" alt=""> 3 min read</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="{{ asset('assets/homepage/blog2.webp') }}" class="home" alt="">
            <div class="blog-card-text">
              <h2>Influencers vs social media personalities</h2>
              <p class="body-text">While influencers can certainly impact consumer decisions, their effectiveness can vary depending on factors such as industry niche, audience engagement, and the specific goals of a brand's marketing...</p>
              <div class="card-info">
                <img src="{{ asset('assets/homepage/4.webp') }}" class="home-blog-author" alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>Kwadwo A. Sirebour</h3>
                  <p>April 02, 2024 &nbsp; <img src="assets/red-dot.svg" alt=""> 5 min read</p>
                </div>
              </div>
            </div>
          </div>

          <div class="blog-card">
            <img src="{{ asset('assets/homepage/blog3.webp') }}" class="home" alt="">
            <div class="blog-card-text">
              <h2>How Artificial Intelligence is Shaping Our Future</h2>
              <p class="body-text">There’s no denying that technology is transforming our world. From the way we work to the way we communicate, innovation seems to be the name...</p>
              <div class="card-info">
                <img src="{{ asset('assets/homepage/5.webp') }}" class="home-blog-author"  alt="Blog Author">
                <div class="card-info-name-date">
                  <h3>Judith Abani</h3>
                  <p>April 02, 2024  &nbsp; <img src="assets/red-dot.svg" alt=""> 7 min read</p>
                </div>
              </div>
            </div>
          </div>

        <a href="#">
          <div class="home-blog-btn">
            <p>Visit Our Blog</p>
          </div>
        </a>
        </div>
        </div>
      </section>



      <section class="logos-home">
        <h2>Touched by !D</h2>
        <div class="logos-row1">
            <img src="{{ asset('assets/homepage/mtn-logo.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/stanbic-logo.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/malt-logo.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/yango.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/lucozade.webp') }}" alt="">
        </div>
        <div class="logos-row2">
            <img src="{{ asset('assets/homepage/hdplus.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/gino.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/gcb.webp') }}" alt="">

            <img src="{{ asset('assets/homepage/starbow.webp') }}" class="starbow" alt="">

            <img src="{{ asset('assets/homepage/fiesta.webp') }}" alt="">
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
    <script>
        function openNav() {
        document.getElementById("navigation-bar").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("navigation-bar").style.width = "0%";
      }
        </script>





<!-- Calling jQuery -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<!-- Calling Slick Library -->
<script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/slick_ini.js') }}"></script>



<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>

  </body>
</html>
