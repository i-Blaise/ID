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
  <link rel="stylesheet" href="css/styles.css?v=1">
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





<section class="case-study-row">
    <a href="{{ route('case-open') }}">
        <div class="case-study-card">
            <div class="case-study-image">
                <img src="{{ asset('assets/services/case1.webp') }}" alt="Easter Bunnies">
            </div>
            <div class="case-study-desc">
                <h2><span class="bold">Easter</span> <br> Holidays</h2>
            </div>
    </a>
    </div>

    <div class="case-study-card">
        <a href="{{ route('case-open') }}">
            <div class="case-study-image">
                <img src="{{ asset('assets/services/case2.webp') }}" alt="Easter Bunnies">
            </div>
            <div class="case-study-desc">
                <h2><span class="bold">Malta</span> <br> Guinness</h2>
            </div>
        </a>
    </div>

    <div class="case-study-card">
        <a href="{{ route('case-open') }}">
            <div class="case-study-image">
                <img src="{{ asset('assets/services/case3.webp') }}" alt="Easter Bunnies">
            </div>
            <div class="case-study-desc">
                <h2><span class="bold">MTN</span> <br> Ghana</h2>
            </div>
        </a>
    </div>
</section>

















{{-- <div class="pagination-section">
  <div class="page-numbers">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">...</a>
    <a href="#">8</a>
    <a href="#">9</a>
    <a href="#">10</a>
  </div>
</div> --}}


<div class="mobile-ad-section">
</div>

<!-- Footer Starts  -->
@include('components.footer')
<!-- Footer Ends  -->
</body>
</html>
