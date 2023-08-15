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
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("data/css/bootstrap.min.css")}}">

    <!-- style css -->

    <link rel="stylesheet" href="{{asset("data/css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("data/css/responsive.css")}}">

</head>
<body>
    <div class="" style="margin-top: 145px!important;">

          <main class="signup-form">
              <div class="cotainer">
                  <div class="row justify-content-center">
                      <div class="col-md-4">
                          <div class="card">
                              <h3 class="card-header text-center">Register User</h3>
                              <div class="card-body">
                                  <form action="{{ route('cus-registration') }}" method="POST">
                                      @csrf
                                      <div class="form-group mb-3">
                                          <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                                 required autofocus>
                                          @if ($errors->has('name'))
                                              <span class="text-danger">{{ $errors->first('name') }}</span>
                                          @endif
                                      </div>
                                      <div class="form-group mb-3">
                                          <input type="text" placeholder="Email" id="email_address" class="form-control"
                                                 name="email" required autofocus>
                                          @if ($errors->has('email'))
                                              <span class="text-danger">{{ $errors->first('email') }}</span>
                                          @endif
                                      </div>
                                      <div class="form-group mb-3">
                                          <input type="password" placeholder="Password" id="password" class="form-control"
                                                 name="password" required>
                                          @if ($errors->has('password'))
                                              <span class="text-danger">{{ $errors->first('password') }}</span>
                                          @endif
                                      </div>
                                      <div class="form-group mb-3">
                                          <div class="checkbox">
                                              <label><input type="checkbox" name="remember"> Remember Me</label>
                                          </div>
                                      </div>
                                      <div class="d-grid mx-auto">
                                          <button type="submit" class="btn btn-warning btn-block">Sign up</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>

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
