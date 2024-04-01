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
    <header id="header-case-study">
      @include('components.navbar')
        <!-- ends here -->
      </header>
<!-- partial:index.partial.html -->

<section class="case-study">
  <div class="case-study-container">
    <div class="case-study-card">
      <a href="{{ route('case-open') }}">
        <img src="{{ asset('assets/case_study/case1.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="{{ route('case-open') }}">
        <h1>Easter <br> Holidays</h1>
      </a>
      <a href="{{ route('case-open') }}">
        <p class="view">View</p>
      </a>
    </div>

    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case2.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>8 guidelines for <br> art lovers</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>


    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case3.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>The Importance <br>of Statistics</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>


    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case4.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>The Fundamentals of Color Theory</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>


    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case5.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>Excellent short tale writing tips</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>


    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case6.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>Make your Classroom a Community</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>


    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case7.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>Five Turner chosen art collectives</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>


    <div class="case-study-card">
      <a href="#">
        <img src="{{ asset('assets/case_study/case8.png') }}" alt="">
      </a>
      <p>23 Nov 2021</p>
      <hr>
      <a href="#">
        <h1>The artistic highlights of the week</h1>
      </a>
      <a href="#">
        <p class="view">View</p>
      </a>
    </div>
  </div>
</section>

<div class="pagination-section">
  <div class="page-numbers">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">...</a>
    <a href="#">8</a>
    <a href="#">9</a>
    <a href="#">10</a>
  </div>
</div>


<div class="mobile-ad-section">
</div>

<!-- Footer Starts  -->
@include('components.footer')
<!-- Footer Ends  -->
</body>
</html>