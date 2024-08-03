@extends('format.adminmaster')
@section("title")
    Add Booking
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
    <a href="{{route('plist')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-line-chart text-custom"></i>
        <span class="d-none d-lg-inline">Packages</span>
    </a>
    <a href="{{route('admin-user-report')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-flag text-custom"></i>
        <span class="d-none d-lg-inline">Reports</span>
    </a>

@endsection
@section("actions")
    <a href="{{route('abook')}}" class="list-group-item list-group-item-action cusactive">
        <i class="fa fa-user text-custom"></i>
        <span class="d-none d-lg-inline">New Booking</span>
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
        @if($use=='1')
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>
        @endif
        <li class="breadcrumb-item active">Add Booking</li>
    </ol>
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
                               <h3 class="text-warning">Booking</h3>
                           </div>
                           <div class="card-body">
                               <form method="post" action="{{route("admin-book")}}" class="form-group border p-3 form-bg ">

                                   @csrf
                                   <div class="row">
                                       <div class="col-6">
                                           <div class="form-group">

                                               <input type="text" name="name" value="{{old('name')}}" class="form-control @error("name") is-invalid @enderror" placeholder="Full Name">
                                               @error("name")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <input type="text" value="{{old('nic')}}" value="{{old('name')}}" name="nic" class="form-control @error("nic") is-invalid @enderror" placeholder="NIC">
                                               @error("nic")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <input type="email" value="{{old('email')}}" id="v_name" name="email" class="form-control @error("email") is-invalid @enderror" placeholder="user@gmail.com">
                                               @error("email")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <input type="text" value="{{old('nop')}}" name="nop" class="form-control @error("nop") is-invalid @enderror" placeholder="Number of People">
                                               @error("nop")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6 pb-2">
                                           <label for="" class="text-dark">Packages</label>
                                           <select class="custom-select @error("package") is-invalid @enderror" name="package" >
                                             @foreach($package as $p)
                                               <option class="cus-select" value="{{$p->name}}">{{$p->name}}</option>
                                               @endforeach
                                           </select>

                                           @error("package")
                                           <div class="text-danger invalid-feedback">{{$message}}</div>
                                           @enderror
                                       </div>
                                       <div class="col-6">
                                           <label for="" class="text-dark">Location</label>
                                           <div class="form-group">
                                               <input type="text" value="" name="splace" class="form-control @error("splace") is-invalid @enderror" placeholder="Start Place">
                                               @error("splace")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <input type="date" id="v_name" name="date" class="custom-select  @error("date") is-invalid @enderror">
                                               @error("date")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <input type="text" value="{{old('phone')}}" name="phone" class="custom-select @error("phone") is-invalid @enderror" placeholder="Phone">
                                               @error("phone")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-check form-check-inline">
                                               <input class="form-check-input @error("rb") is-invalid @enderror" type="radio" name="rb" id="inlineRadio1" value="Male">
                                               <label class="form-check-label text-dark" for="inlineRadio1">Male</label>
                                               @error("rb")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>
                                           <div class="form-check form-check-inline">
                                               <input class="form-check-input @error("rb") is-invalid @enderror" type="radio" name="rb" id="inlineRadio2" value="Female">
                                               <label class="form-check-label text-dark" for="inlineRadio2">Female</label>
                                               @error("rb")
                                               <p class="text-danger invalid-feedback">{{$message}}</p>
                                               @enderror
                                           </div>

                                       </div>
                                   </div>


                                   <div class="row">
                                       <div class="col-12 traveling-box">
                                           <div class="read-more">
                                               <button type="reset" class="read-more">Cancel</button>
                                               <button type="submit" class="read-more">Booking</button>
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



