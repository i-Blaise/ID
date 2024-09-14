<header id="header-main">

    @include('components.navbar')


    <div class="header-w-cta">

            @if (Route::currentRouteNamed('aboutus'))

                <div class="header-2">
                        <img src="{{ asset('assets/about-banner2.webp') }}" class="header2-image" alt="">
                        <h1 class="header-title-1">We <span class="bold">empower</span> you <br> to grow your bussiness.</h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('services'))

                <div class="header-2">
                    <img src="{{ asset('assets/services/header2.webp') }}" class="header2-image" alt="">
                    <h1 class="header-title-2">Our <span class="bold">Services</span></h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('sm-marketing'))

                <div class="header-2">
                    <img src="{{ asset('assets/services/marketing-header2.webp') }}" class="header2-image" alt="">
                    <h1 class="header-title-1">Digital <br> <span class="bold">MARKETING</span></h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('videography'))

                <div class="header-2">
                    <img src="{{ asset('assets/services/marketing-header2.webp') }}" class="header2-image" alt="">
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('online-advertising'))

                <div class="header-2">
                    <img src="{{ asset('assets/services/online-ad-header2.webp') }}" class="header2-image" alt="">
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('strategy'))

                <div class="header-2">
                    <img src="{{ asset('assets/services/ds-header.webp') }}" class="header2-image" alt="">
                    <h1 class="header-title-1">Strategy & <br> <span class="bold">CONSULTING</span></h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('blogs'))

                <div class="header-2">
                    <img src="{{ asset('assets/blogs/blog-header2.webp') }}" class="header2-image" alt="">
                    <h1 class="header-title-2">Latest <span class="bold">news</span></h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('case-study'))

                <div class="header-2">
                    <img src="{{ asset('assets/services/casestudy-header.webp') }}" class="header2-image" alt="">
                    <h1 class="header-title-2">Case <span class="bold">Study</span></h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('case-open'))

                <div class="header-2">
                    <img src="{{ asset('assets/case_study/case-open-header.webp') }}" class="header2-image" alt="">
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>

            @elseif (Route::currentRouteNamed('contactus'))

                <div class="header-2">
                    <img src="{{ asset('assets/contact-header2.webp') }}" class="header2-image" alt="">
                    <h1 class="header-title-2">Contact <span class="bold">Us</span></h1>
                </div>

                <a class="header-cta" href="#">
                    <p>your digital powerhouse...</p>
                </a>
            @endif

        </div>

    <!-- ends here -->
  </header>


  {{-- <header id="header-aboutus">

    @include('components.navbar')
  <div class="header-w-cta">
    <div class="header-2">
            <img src="{{ asset('assets/about-banner2.webp') }}" class="aboutus-header-2" alt="">
            <h1 class="about-title">We <span class="bold">empower</span> you <br> to grow your bussiness.</h1>
    </div>
    <a class="aboutus-header-cta" href="#">
        <p>your digital powerhouse...</p>
    </a>
  </div>
</header> --}}
