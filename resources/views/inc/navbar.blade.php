





      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container" >
              <a class="navbar-brand"  href="{{ url('/') }}"><b><font size = "6px">

                  {{ config('app.name', 'KAFKA') }}

                </font>
                  </b>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="/"><font color="black" size = 4px >Home</font> <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about"><font color = "black" size = "4px">About</font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/posts" ><font color = "black" size = "4 px">Posts</font></a>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font size = "4px" color = "black">Categories</font></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            
                        <a value ="1" class="dropdown-item" href="/posts/category/1">Blog</a>
                        
                          <a value="2"class="dropdown-item" href="/posts/category/2">Opinion</a>
                          <a  value="3" class="dropdown-item" href="/posts/category/3">Drama</a> 


                        </div>
                      </li>
                      
                      
                      <form action="/search" method="get" class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                     

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}"><font color = "black" size = "4 px">{{ __('Login') }} </font></a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}"><font color = "black" size = "4px">{{ __('Register') }} </font></a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                            
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><font color = "black" size = "4 px">{{ Auth::user()->name }} </font>
                                  <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/dashboard">Dashboard</a>
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
      <style type="text/css">
        #id{
          color:red;
        }
      </style>