<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield("title")</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset("data/images/1x/honet_logo-3.png")}}" type="image/x-icon"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("data/css/bootstrap.min.css")}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset("data/css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("data/css/responsive.css")}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset("data/images/fevicon.png")}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset("data/css/jquery.mCustomScrollbar.min.css")}}">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset("data/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("data/css/owl.theme.default.min.css")}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body class="main-layout">
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
                    <div class="">@yield("breadCamp")</div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">

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
@yield("content")
<!-- Javascript files-->
<script src="{{asset("data/js/jquery.min.js")}}"></script>
<script src="{{asset("data/js/popper.min.js")}}"></script>
<script src="{{asset("data/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("data/js/jquery-3.0.0.min.js")}}"></script>
<script src="{{asset("data/js/plugin.js")}}"></script>
<!-- sidebar -->
<script src="{{asset("data/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
<script src="{{asset("data/js/custom.js")}}"></script>
<!-- javascript -->
<script src="{{asset("data/js/owl.carousel.js")}}"></script>
</body>
</html>
