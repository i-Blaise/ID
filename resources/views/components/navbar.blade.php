<section class="top-nav">
          <div class="logo">
            <a href="{{ route('home') }}"><img src="assets/logo-digital.png" alt="logo" /></a>
          </div>
          <input id="menu-toggle" type="checkbox" />
          <label class='menu-button-container' for="menu-toggle">
          <div class='menu-button'></div>
        </label>
          <ul class="menu">
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">About Us</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('services') || Route::currentRouteNamed('sm-marketing') || Route::currentRouteNamed('online-advertising')|| Route::currentRouteNamed('videography') || Route::currentRouteNamed('strategy') ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">Blogs</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('case-study') ||
            Route::currentRouteNamed('case-open')? 'active' : '' }}" href="{{ route('case-study') }}">Case Studies</a></li>
            <li class="menu-link call-us"><a href="{{ route('contactus') }}">
                <button>Call us</button>
            </a></li>
          </ul>
</section>
