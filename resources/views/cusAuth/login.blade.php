<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->

    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("data/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/font-awesome.min.css')}}">
    <!-- style css -->

    <link rel="stylesheet" href="{{asset("data/css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("data/css/responsive.css")}}">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="h-50 w-100"></div>
      <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('data/images/1x/honey_logo-3.png')}}" class="card-img-top bg-custom" alt="...">
          <div class="card-body">
            <h5 class="text-warning">Login</h5>
              @if (session('success'))

                  <div class="alert alert-danger" role="alert">
                      {{session('success')}}
                  </div>

              @endif
            <form action="{{"cus-login"}}" method="post" class="">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email" class="form-control @error("email") is-invalid @enderror" name="email"
                           autofocus>
                    @error("email")
                    <div class="text-danger invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" >
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-warning btn-block">Sign in</button>
                </div>
            </form>
          <div class="d-flex justify-content-between">
              <a href="{{route('forget.password.get')}}" class="mt-2 d-flex justify-content-center">forget-password</a>
              <a href="{{route('registration')}}" class="mt-2 d-flex justify-content-center">Sign-Up</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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

