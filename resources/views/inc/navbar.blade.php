<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="{{ url('/') }}">
                {{config('app.name', 'iHOMS')}}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                      <li class="{{Request::is('/') ? 'active' : ''}}">
                          <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
                        </li>
                        <li class="{{Request::is('about') ? 'active' : ''}}">
                          <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="{{Request::is('services') ? 'active' : ''}}">
                          <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="{{Request::is('posts') ? 'active' : ''}}">
                            <a class="nav-link" href="/posts">Blog</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li> --}}
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      
                    
                    {{-- <li class="nav-item">
                          <a class="nav-link" href="/posts/create">Create Post</a>
                        </li> --}}

                      <!-- Authentication Links -->
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
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}  {{Auth::user()->isAdmin == 1 ? '(Admin)' : ''}} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 @can('isAdmin')
                                    <a href="/dashboard" class="dropdown-item">Dashboard</a>
                                    <a href="/tenants" class="dropdown-item">HO Masterfile</a>     
                                 @endcan  
                                
                                @can('isUser')
                                    <a href="/dashboard" class="dropdown-item">Dashboard</a>    
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
      </nav>
      