<nav class="navbar navbar-expand-sm navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-name" href="{{ url('/') }}">
            <img src="/logo.png" alt="Logo">
            RedApple Commerce
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="nav-link pl-3 pr-3"><a href="/productCatalog">Products</a></div>
                <div class="nav-link pl-3 pr-3"><a href="/admin">Admin</a></div>
            </ul>

            <!-- Authentication Links -->
        @guest

                <!-- Right Side Of Navbar -->
                <div class="float-right">
                    <ul class="navbar-nav ml-auto" >

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>

                        <li class="nav-item">
                            <a href="/sc" class="nav-link fas fa-cart-arrow-down"></a>
                        </li>

                        @else
                            <li class="nav-item dropdown" style="list-style-type:none">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <li class="nav-item" style="list-style-type:none">
                                <a href="/sc" class="nav-link fas fa-cart-arrow-down"></a>
                            </li>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>


                            </li>
                        @endguest

                    </ul>
                </div>

        </div>
    </div>
</nav>
