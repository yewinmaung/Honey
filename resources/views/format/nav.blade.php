
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header position-fixed">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="{{asset("data/images/1.png")}}" alt="#"/> Burma</li>
                                <li><img src="{{asset("data/images/2.png")}}" alt="#"/> +959 767381581</li>
                                <li><img src="{{asset("data/images/3.png")}}" alt="#"/> admin@honey.mailenable.com.mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="{{route("home")}}"><img src="{{asset("data/images/1x/honey_logo-3.png")}}" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class=""> <a href="{{route("home")}}">Home</a> </li>
                                    <li> <a href="#about">About</a> </li>
                                    <li><a href="#travel">Travel</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                {{--Login/Logout--}}
                                    @guest

                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <a class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    SignIn/SignUp
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item log" href="{{ route('login') }}">Login</a>
                                                    <a class="dropdown-item log" href="{{ route('registration') }}">Register</a>
                                                </div>
                                            </div>
                                          </li>
                                    @else
                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <a class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                  {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item log" href="{{ route('user.ticket') }}">Profile</a>
                                                    <a class="dropdown-item log" href="{{ route('signout') }}">Logout</a></div>
                                            </div>
                                        </li>
                                    @endguest
                                    {{--end Login/Logout--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
