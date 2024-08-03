<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/font-awesome.min.css')}}">
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
    <link rel="icon" href="{{asset("data/images/1x/honey_logo-3.png")}}"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("data/css/bootstrap.min.css")}}">

    <!-- style css -->

    <link rel="stylesheet" href="{{asset("data/css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("data/css/responsive.css")}}">
    <link rel="stylesheet" href="{{asset("data/css/admin.css")}}">

</head>
<body>

<section class="">
    <div class="container-fluid">
        <div class="row g-0" style="height: 700px;">
            <nav class="col-2 bg-light p-0 m-0">
                <h1 class="h4 py-3 text-center bg-custom">
        <span class="d-none d-lg-inline">
   <img src="{{asset('data/images/1x/honey_logo-3.png')}}" alt="">
</span>
                </h1>
                <div class="list-group text-center text-lg-left px-3">
             <span class="list-group-item disabled d-none d-lg-block">
                  <small>CONTROLS</small>
                    </span>
                    @yield("controls")
                </div>
                <div class="list-group mt-4 text-center text-lg-left px-3">
                    <span class="list-group-item disabled d-none d-lg-block">
                     <small>ACTIONS</small>
                     </span>
                    @yield(("actions"))
                 </div>
            </nav>
            <main class="col-10 bg-custom50">
                <nav class="navbar navbar-expand-lg navbar-light bg-custom">
                    <div class="">@yield('breadcamp')</div>
                    <div class="flex-fill"></div>
                    <div class="navbar nav">
                        @guest

                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-custom1" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        SignIn/eSignUp
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item log" href="{{ route('admin-login') }}">Login</a>
                                        <a class="dropdown-item log" href="{{ route('cus-registration') }}">Register</a>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <div class="d-flex">
                                    <img src="{{asset("images/".Auth::user()->img)}}" class="" style="width: 50px;height: 50px;border-radius: 50%">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle text-custom1" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item log" href="{{route("adminprofile")}}">Profile</a>
                                                <a class="dropdown-item log" href="{{ route('admin-logout') }}">Logout</a></div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        @endguest
                    </div>
                </nav>
                <div class="container-fluid p-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

</section>

<script src="{{asset('data/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('data/js/jquery.min.js')}}"></script>
<script src="{{asset('data/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset("data/js/popper.min.js")}}"></script>
<script src="{{asset("data/js/bootstrap.bundle.min.js")}}"></script>

<!-- sidebar -->
<script src="{{asset("data/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
<script src="{{asset("data/js/custom.js")}}"></script>


</body>
</html>
