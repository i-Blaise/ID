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
</section>
</body>
</html>