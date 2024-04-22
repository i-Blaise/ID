<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Case Studies</title>
        <!-- Favicon  -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <!-- Include the stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/dist/style.css') }}">
  <link rel="stylesheet" href="css/styles.css">
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
    <header id="header-case-open">
      @include('components.navbar')
        <!-- ends here -->
      </header>
<!-- partial:index.partial.html -->


<section id="case-study-container">
  <div class="case-row-1">
    <div class="case-row-1-image">
      <img src="{{ asset('assets/case_study/overview1.png') }}" alt="">
    </div>
    <div class="case-row-1-text">
      {{-- <h1>The Ask (objectives/outcomes)</h1>
      <p>An engaging social media execution fusing agency life with elements of the Easter story to create relatable and engaging content</p> --}}
      <h1>The Overview</h1>
      <p>Easter, the second biggest Christian holiday, is always celebrated with some level of solemnity and reflection. Interactive Digital decided to mark the holiday employing themes of reflection on our own journey as an agency.</p>
    </div>
  </div>

  <div class="case-row-2">
    <div class="case-row-2-image">
      <img src="{{ asset('assets/case_study/overview2.png') }}" alt="">
    </div>
    <div class="case-row-2-text">
      <h1>The Ask (objectives/outcomes)</h1>
      <p>An engaging social media execution fusing agency life with elements of the Easter story to create relatable and engaging content</p>
    </div>
  </div>

  <div class="case-row-3">
    <div class="case-row-3-text">
      <h1>Our Inspiration</h1>
      <p>The Easter Story historically highlights notable moments occurring during the last moments of Christ. We found that in more ways than one, the agency life bears intriguing similarities to how we navigate work, our client relationships and make magic.</p>
    </div>
    <div class="case-row-3-image">
      <img src="{{ asset('assets/case_study/overview2.png') }}" alt="">
    </div>
  </div>


  <div class="case-study-banner">
    <style>
      .case-study-banner {
        background-image: url({{ asset('assets/case_study/bar-bg.png') }});
      }
    </style>
    <div class="case-study-banner-text">
      <h1>THE PASSION OF <br>THE AGENCY</h1>
      <p style="text-transform: uppercase;">An Easter Story</p>
      <p style="font-weight: 800;">We remember...</p>
    </div>
  </div>


  <div class="case-row-4">
    <h1>The Approach</h1>
    <p>So that’s what we did! Picking historic moments such as, <b>The Betrayal</b>, The Trial paired perfectly with well-known GIFs  we told  Easter-esque story.</p>
  </div>



</section>
<div class="case-row-5">
  <div class="case-row-5-image">
    <img src="{{ asset('assets/case_study/case-img-1.webp') }}" alt="">
  </div>
  <div class="case-row-5-text">
    <h5>“We celebrate the process that saves us and makes us who we are. ”</h5>
    <p>Happy Easter</p>
    <img src="{{ asset('assets/case_study/logo1.webp') }}" alt="">
  </div>
</div>

<div class="case-row-6">
  <div class="case-row-6-text">
    <div class="text-row">
      <h1>The Results</h1>
      <p>An engaging social media execution fusing agency life with elements of the Easter story to create relatable and engaging content.</p>
    </div>
    <div class="text-row">
      <h1>Feed Back</h1>
      <p>Here’s what the client had to say:</p>
    </div>
  </div>
  <div class="case-row-6-img">
    <img src="{{ asset('assets/case_study/case-img-2.webp') }}" alt="">
  </div>
</div>




<!-- Footer Starts  -->
@include('components.footer')
<!-- Footer Ends  -->
</body>
</html>