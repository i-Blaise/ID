<section class="top-nav" id="{{ Route::currentRouteNamed('contactus') || Route::currentRouteNamed('home') ? 'white-nav' : '' }}">
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
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('services') ? 'active' : '' }}" href="{{ route('coming-soon') }}">Services</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('blogs') ? 'active' : '' }}" href="{{ route('coming-soon') }}">Blog</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('case-studies') ? 'active' : '' }}" href="{{ route('coming-soon') }}">Case Studies</a></li>
            <li class="menu-link"><a class="{{ Route::currentRouteNamed('contactus') ? 'active' : '' }}" href="{{ route('coming-soon') }}">Contact us</a></li>
          </ul>
</section>