@extends("format.master")
@section("title")
    Login
@endsection
@section("content")
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="h-50 w-100"></div>
      <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('data/images/1x/honey_logo-3.png')}}" class="card-img-top bg-custom" alt="...">
          <div class="card-body">
            <h5 class="text-warning">Admin Login</h5>
            <form action="{{"cus-login"}}" method="post" class="">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                           autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-warning btn-block">Sign in</button>
                </div>
            </form>
            <a href="{{route('registration')}}" class="mt-2 d-flex justify-content-center">Sign-Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
