 <!-- Header Start -->
 <div class="header-area header-sticky">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-1 col-md-1">
                <div class="logo">
                <a href="{{url('/redirects')}}"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-6">
                <!-- Main-menu -->
                <div class="main-menu f-right d-none d-lg-block">
                    <nav style="margin-right: -400px; font-size:30px;" >
                        <ul id="navigation">  
                            
                            
                            <li ><a style="font-size:20px;" id="1" href="#office">من نحن</a></li>
                            <li><a style="font-size:20px;" href="{{url('/')}}">HomePage</a></li>
                            <li>                                 
                                
                                @if (Auth::id())
                                <li><a style="font-size:20px;" href="#">{{Auth::user()->name}}</a></li>
                                    
                                @else
                                    <li>
                                        <a style="font-size:20px;" href="{{ route('login') }}"  >Login</a>
                                    </li>
                                    <li>
                                        <a style="font-size:20px;" href="{{ route('register') }}"  >Register</a>
                                    </li>
                                        
                                    
                                @endif 
                            
                        </li> 
                        
                        <li>
                            @if(Auth::id())
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf 
                            
                                    <a style="font-size:20px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        {{ __('Log Out') }}
                                </a>
                            
                                </form>
                                {{-- <li><a style="font-size:20px;" href="{{url('show_bars')}}">Show Bars</a></li> --}}
                            @endif
                        </li>
                        
                        </ul>
                    </nav>
                </div>
            </div>             
            {{-- <div class="col-xl-3 col-lg-3 col-md-3">
                <!-- Header-btn -->
                <div class="header-btn d-none d-lg-block f-right">
                    <a href="#" class="btn header-btn">Free Consultation</a>
                </div>
            </div> --}}
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->