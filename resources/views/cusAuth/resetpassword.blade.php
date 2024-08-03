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
    <link rel="icon" href="{{asset("data/images/1x/honey_logo-3.png")}}"/><!-- Scrollbar Custom CSS -->

    <title>Reset Password</title>
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
            <div class="cotainer">
                <div class="row d-flex justify-content-center">

                        <div class="card w-50">
                            <img src="{{asset('data/images/1x/honey_logo-3.png')}}" class="card-img-top bg-custom" alt="...">


                            <div class="card-header">Reset Password</div>
                            <div class="card-body">

                                <form action="{{ route('reset.password.post') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group row ">
                                        <label for="email_address" class="text-dark col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control @error("email") is-invalid @enderror" name="email" autofocus>
                                            @error("email")
                                            <div class="text-danger invalid-feedback">{{$message}}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="text-dark col-md-4 col-form-label text-md-right">New Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password" autofocus>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="text-dark col-md-4 col-form-label text-md-right">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation"autofocus>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-warning">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>

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






