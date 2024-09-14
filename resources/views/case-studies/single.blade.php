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
    @include('components.header')
<!-- partial:index.partial.html -->


<section class="first-container">
    <div class="case1-img">
        <img src="{{ asset('assets/case_study/case-sec1-img.webp') }}" alt="child with easter bunny ears">
    </div>
    <div class="case1-text">
        <h2>The <br><span class="bold">Overview</span></h2>
        <p>Easter, the second biggest Christian holiday, is always celebrated with some level of solemnity and reflection. Interactive Digital decided to mark the holiday employing themes of reflection on our own journey as an agency.</p>
    </div>
</section>

<section class="second-container">
    <div class="case2-row">
        <div class="case2-text">
            <h2>THE ASK. <br><span class="bold">Objectives / OUTCOME</span></h2>
            <p>An engaging social media execution fusing agency life with elements of the Easter story to create relatable and engaging content</p>
        </div>
        <div class="case2-img">
            <img src="{{ asset('assets/case_study/case2-img.webp') }}" alt="">
        </div>
    </div>

    <div class="case3-row">
        <div class="case3-img">
            <img src="{{ asset('assets/case_study/case3-img.webp') }}" alt="">
        </div>
        <div class="case3-text">
            <h2>OUR <br><span class="bold">INSPIRATION</span></h2>
            <p>The Easter Story historically highlights notable moments occurring during the last moments of Christ. We found that in more ways than one, the agency life bears intriguing similarities to how we navigate work, our client relationships and make magic.</p>
        </div>
    </div>

    <div class="case4-row">
        <div class="case4-text">
            <h2 class="bold">The Approach</h2>
            <p>So that’s what we did! Picking historic moments such as, <span class="bold">The Betrayal</span>, The Trial paired perfectly with well-known GIFs  we told Easter-esque story.</p>
        </div>
        <div class="case4-card-row">
            <img src="{{ asset('assets/case_study/case4-img1.webp') }}" alt="">

            <img src="{{ asset('assets/case_study/case4-img2.webp') }}" alt="">

            <img src="{{ asset('assets/case_study/case4-img2.webp') }}" alt="">
        </div>
    </div>

    <div class="case5-container">
        <img src="{{ asset('assets/case_study/case-bar-img.webp') }}" alt="">
    </div>

    <div class="case6-container">
        <div class="case6-row1">
            <h2>THE RESULTS <br> <span class="bold">Inspiration</span></h2>
            <p>An engaging social media execution fusing agency life with elements of the Easter story to create relatable and engaging content.</p>
        </div>
        <div class="case6-row2">
            <h2>Feed <br> <span class="bold">Back</span></h2>
            <p>Here’s what the client had to say:</p>
        </div>
    </div>
</section>




<!-- Footer Starts  -->
@include('components.footer')
<!-- Footer Ends  -->
</body>
</html>
