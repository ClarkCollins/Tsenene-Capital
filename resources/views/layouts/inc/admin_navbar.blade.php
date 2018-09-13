
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        
            
                <a class="py-2" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                </a>
<!--                <a class="py-2 d-none d-md-inline-block" href="{{ url('/') }}">Home</a>
                <a class="py-2 d-none d-md-inline-block" href="{{url('/about')}}">About</a>
                <a class="py-2 d-none d-md-inline-block" href="{{url('/services')}}">Services</a>
                <a class="py-2 d-none d-md-inline-block" href="{{url('/contact')}}">Contact</a>
                
             -->

             <!-- Right Side Of Navbar -->
                    
                        
                            <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a class="py-2 d-none d-md-inline-block"  href="{{ route('login') }}">Login</a>
                        <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">Register</a>
                    @else
                        
                            <a class="py-2 d-none d-md-inline-block"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            
                        
                    @endif
                      
                    
         
                    @if (!Auth::guest())

                    <div class="dropdown float-right">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administration
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin_home')}}">Dashboard</a> 
<!--                            <a class="dropdown-item" href="{{route('banks.index')}}">Banks</a>-->
                            <a class="dropdown-item" href="all_company">Companies</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    @endif

      </div>
    </nav>






