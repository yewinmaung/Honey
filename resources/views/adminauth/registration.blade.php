@extends('format.adminmaster')
@section('title')
    Staff Account
@endsection
@section('content')

          <main class="signup-form">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-6">
                          <div class="card">
                              <h3 class="card-header text-center">Create Staff Account</h3>
                              <div class="card-body">
                                  <form action="{{ route('staff-cus-reg') }}" method="POST">
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
                                      <div class="col-md-4 form-group">
                                          <label  class="form-label text-custom">Role</label>
                                          <select class="custom-select @error("type") is-invalid @enderror" name="type" >
                                              <option selected disabled >Position</option>
                                              <option class="cus-select" value="1">Manager</option>
                                              <option class="cus-select"  value="2">customer_Service</option>
                                              <option class="cus-select" value="3">Driver</option>

                                          </select>

                                          @error("job")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
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

@endsection

