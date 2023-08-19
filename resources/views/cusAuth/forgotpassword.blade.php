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
    <title>Forgot Password</title>
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


            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="" style="width: 100px;height: 100px;"></div>

                        <div class="d-flex justify-content-center align-items-center">

                       <div class="card" style="width: 27rem;">

                            <img src="{{asset('data/images/1x/honey_logo-3.png')}}" class="card-img-top bg-custom" alt="...">

                            <div class="card-header">Re_Sent E-mail</div>
                            <div class="card-body">

                                <form action="{{ route('forget.password.post') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="email" autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="bg-custom50">
                                                Sent
                                            </button>
                                        </div>
                                </form>

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






