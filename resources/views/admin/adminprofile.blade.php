@extends('format.adminmaster')
@section("title")
  Profile
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">

                    <div class="col-12 w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="card">
                            <div class="card-header bg-secondary">
                                <img src="{{asset('data/images/1x/honey_logo-3.png')}}" alt="" class="mb-3">
                                <h3 class="text-warning">Information</h3>
                            </div>
                            <div class="card-body">
                                @if (session('success'))

                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>

                                @endif
                                <form method="post" action="{{route("aprofile")}}" class="form-group border p-3 form-bg " enctype="multipart/form-data">

                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <img src="/images/{{\Illuminate\Support\Facades\Auth::user()->img}}" width="50px" class="pb-2">
                                                <input type="file" class="form-control" name="img">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control @error("name") is-invalid @enderror" placeholder="Full Name">
                                                @error("name")
                                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control @error("email") is-invalid @enderror" placeholder="E-mail">
                                                @error("email")
                                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="pwd" value="" class="form-control @error("pwd") is-invalid @enderror" placeholder="New Password">
                                                @error("pwd")
                                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="cpwd" value="" class="form-control @error("cpwd") is-invalid @enderror" placeholder="Confirm Password">
                                                @error("cpwd")
                                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 traveling-box">
                                            <div class="read-more">
                                                <button type="reset" class="read-more">Cancel</button>
                                                <button type="submit" class="read-more">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



