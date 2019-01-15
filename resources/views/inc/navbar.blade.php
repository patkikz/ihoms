<div class="topbar clearfix">
    <div class="container">
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

<header class="header">
    <div class="container">
        <div class="site-header clearfix">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 title-area">
            <div class="site-title" id="title">
            <a href="/" title="">
                <h4>i<span>HOMS</span></h4>
            </a>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div id="nav" class="right">
            <div class="container clearfix">
                <ul id="jetmenu" class="jetmenu blue">
                    <li class="{{Request::is('/') ? 'active' : ''}}">
                        <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
                    </li>
                    <li class="{{Request::is('about') ? 'active' : ''}}">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="{{Request::is('company') ? 'active' : ''}}">
                        <a class="nav-link" href="/company">Company</a>
                    </li>
                    <li class="{{Request::is('contact') ? 'active' : ''}}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}  {{Auth::user()->isAdmin == 1 ? '(Admin)' : ''}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @can('isAdmin')
                                    <a href="/dashboard" class="dropdown-item">Dashboard</a>
                                    <a href="/posts" class="dropdown-item">Announcement</a>
                                @endcan  
                            
                            @can('isUser')
                                <a href="/dashboard" class="dropdown-item">Dashboard</a>
                                <a href="/posts" class="dropdown-item">Announcement</a>    
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
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
</header>
