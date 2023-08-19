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
    <title>Admin Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("data/css/bootstrap.min.css")}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset("data/css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("data/css/responsive.css")}}">

</head>
<body>
<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h-50 w-100"></div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('data/images/1x/honey_logo-3.png')}}" class="card-img-top bg-custom" alt="...">
                                <div class="card-body">
                                    <h5 class="text-warning">Admin Login</h5>
                                    @if (session('success'))

                                        <div class="alert alert-danger" role="alert">
                                          {{session('success')}}
                                        </div>

                                    @endif
                                    <form action="{{route("admin-cuslogin")}}" method="post" class="">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input type="email" placeholder="Email" id="email" class="form-control @error("email") is-invalid @enderror" name="email"
                                                   autofocus>
                                            @error("email")
                                            <div class="text-danger invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" placeholder="Password" id="password" class="form-control @error("password") is-invalid @enderror" name="password" >
                                            @error("password")
                                            <div class="text-danger invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <button type="submit" class="btn btn-warning btn-block">Sign in</button>
                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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






