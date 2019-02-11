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

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a href="#" class="navbar-brand">iHOMES-<span style="color: orange;">SMC</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"></div>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mr-auto">
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
                <li>
                    <a href="/board-resolutions" class="nav-link">Board Resolutions</a>
                </li>
                <li class="{{Request::is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="my-2 my-lg-0">
                @guest
                    <div class="{{Request::is('login') ? 'active' : ''}}">
                        <a href="{{ route('login') }}" class="btn btn-primary menu-right-btn border">{{ __('Sign In') }}</a>
                    </div>
                    @if (Route::has('register'))
                        <div class="{{Request::is('register') ? 'active' : ''}}">
                            <button class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</button>
                        </div>
                    @endif
                @else
                    <div class="dropdown {{Request::is('dashboard', 'posts') ? 'active' : ''}}">
                        <button id="navbarDropdown" class="btn menu-right-btn border dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}  {{Auth::user()->isAdmin == 1 ? '(Admin)' : ''}} <span class="caret"></span>
                        </button>
        
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
                    </div>
                @endguest
            </div>
        </div>
    </nav>
</header>
