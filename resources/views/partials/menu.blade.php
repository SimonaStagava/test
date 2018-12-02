<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.8);">
        <div class="container header">
          <a class="navbar-brand" href="/" style="margin-right: 100px;">
          <img src="{{asset('img/Winter-designstyle-winter-m (1).png')}}" width=100px alt="Winter sports logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(60, 129, 189);">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="/note" style="color: rgb(60, 129, 189);">NOTE</a>
              <a class="nav-item nav-link" href="/blog" style="color: rgb(60, 129, 189);">BLOG</a>
              <a class="nav-item nav-link" href="#" style="color: rgb(60, 129, 189);">SNOCROSS</a>
              <a class="nav-item nav-link" href="#" style="color: rgb(60, 129, 189);">SKIING</a>
              <a class="nav-item nav-link" href="#" style="color: rgb(60, 129, 189);">X-GAMES</a>
              <a class="nav-item nav-link" href="#" style="color: rgb(60, 129, 189);">ABOUT US</a>
            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}" style="color: #4d0066;">LOGIN</a>
                  </li>
                  <li class="nav-item">
                      @if (Route::has('register'))
                          <a class="nav-link" href="{{ route('register') }}" style="color: #4d0066;">REGISTER</a>
                      @endif
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
          </div>
        </div>
      </nav>