@extends('format.adminmaster')
@section('title')
    Package Edit
@endsection
@section("controls")
    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-home text-custom"></i>
        <span class="d-none d-lg-inline">Dashboard</span>
    </a>
    <a href="{{route('book-user')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-users text-custom"></i>
        <span class="d-none d-lg-inline">Booking Lists</span>
        @yield('bookU')
    </a>
    <a href="{{route('plist')}}" class="list-group-item list-group-item-action cusactive">
        <i class="fa fa-line-chart text-custom"></i>
        <span class="d-none d-lg-inline">Packages</span>
    </a>
    <a href="{{route('admin-user-report')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-flag text-custom"></i>
        <span class="d-none d-lg-inline">Reports</span>
    </a>

@endsection
@section("actions")
    <a href="{{route('abook')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-user text-custom"></i>
        <span class="d-none d-lg-inline">New Book User</span>
    </a>
    <a href="{{route('gust')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-hotel text-custom"></i>
        <span class="d-none d-lg-inline">New Hotel</span>
    </a>
    <a href="{{route('gust-room')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-tag text-custom"></i>
        <span class="d-none d-lg-inline">Room Types</span>
    </a>
    <a href="{{route('addtown')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-table text-custom"></i>
        <span class="d-none d-lg-inline">Hotel Info</span>
    </a>
    <a href="{{route('restau')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-hand-spock-o h1 text-col1 text-custom"></i>
        <span class="d-none d-lg-inline">Restaurants</span>
    </a>
    <a href="{{route('staff-reg')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-location-arrow text-custom"></i>
        <span class="d-none d-lg-inline">Create Trip</span>
    </a>
    <a href="{{route("adminprofile")}}" class="list-group-item list-group-item-action">
        <i class="fa fa-edit text-custom"></i>
        <span class="d-none d-lg-inline">Profile</span>
    </a>

@endsection

@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("plist")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Edit Package</h3>

                        <div class="card-body">

                            <form action="{{route("upackage")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$package->id}}">
                                <div class="form-group">
                                    <img src="{{asset("images/$package->img")}}" alt="" width="50px;" class="mb-2">
                                    <input type="file" class="form-control  @error("img") is-invalid @enderror" name="img">
                                    @error("img")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Title" class="form-control @error("name") is-invalid @enderror" name="name"
                                           autofocus value="{{$package->name}}">
                                    @error("name")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Price" class="form-control @error("price") is-invalid @enderror"
                                           name="price" value="{{$package->price}}">
                                    @error("price")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label  class="form-label text-custom">Hotel</label>
                                    <select class="custom-select @error("hotel") is-invalid @enderror" name="hotel" >
                                        @foreach($hotel as $h)
                                            <option class="cus-select" value="{{$h->name}}" {{$h->name===$package->hotel ? 'selected':""}}>{{$h->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("hotel")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class=" form-group">
                                    <label  class="form-label text-custom">Room Type</label>
                                    <select class="custom-select @error("rtype") is-invalid @enderror" name="rtype" >
                                        @foreach($room as $r)
                                            <option class="cus-select" value="{{$r->name}}" {{$r->name===$package->room ? 'selected':""}}>{{$r->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("rtype")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="No:People" class="form-control @error("nop") is-invalid @enderror"
                                           name="nop" value="{{$package->nop}}">
                                    @error("nop")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <textarea class="textarea form-control @error("dec")is-invalid @enderror" name="dec"  placeholder="Description" type="text">{{$package->dec}}</textarea>
                                    @error("dec")
                                    <p class="text-danger invalid-feedback">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mx-auto d-flex justify-content-end">
                                    <div class="">
                                        <button type="reset" class="read-more">Cancel</button>
                                        <button type="submit" class="read-more">Update</button>

                                    </div>
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

