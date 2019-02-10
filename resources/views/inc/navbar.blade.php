{{-- <div class="topbar clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-right">
                <div class="social_buttons">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><b>i</b><span>HOMS - SAN MARINO CLASSIC</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon primary-color"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="{{Request::is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
                </li>
                <li class="{{Request::is('about') ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                
                <li class="{{Request::is('company') ? 'active' : ''}}">
                    <a class="nav-link" href="/company">Company</a>
                </li>
                <li class="{{Request::is('posts') ? 'active' : ''}}">
                    <a href="/posts" class="nav-link">Events</a>
                </li>
                <li class="{{Request::is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                @guest
                    <li class="{{Request::is('login') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="{{Request::is('register') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown {{Request::is('dashboard', 'posts') ? 'active' : ''}}">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}  {{Auth::user()->isAdmin == 1 ? '(Admin)' : ''}} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('isAdmin')
                                <a href="/dashboard" class="dropdown-item">Dashboard</a>
                            @endcan  
                        
                        @can('isUser')
                            <a href="/dashboard " class="dropdown-item">Dashboard</a>   
                        @endcan
                        
                            
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
                </li>
            </ul>
        </div>
    </div>
</nav>
