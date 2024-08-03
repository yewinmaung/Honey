@extends('format.adminmaster')
@section("title")
    Update Booking
@endsection
@section("controls")
    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-home text-custom"></i>
        <span class="d-none d-lg-inline">Dashboard</span>
    </a>
    <a href="{{route('book-user')}}" class="list-group-item list-group-item-action cusactive">
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
        <li class="breadcrumb-item"><a href="{{route("book-user")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection

@section('content')
   @if($use =='1'||$use=="2")
       <div class="row">
           <div class="col-12">
               <div class="container">
                   <div class="row">
                       <div class="block"></div>
                       <div class="col-12 w-100 h-100 d-flex justify-content-center align-items-center">

                           <div class="card">
                               <div class="card-body">
                                   <form method="post" action="{{route("book-done",$book->id)}}" class="form-group border p-3 form-bg d-md-block d-none">
                                       @method('put')
                                       @csrf
                                       <div class="row">
                                           <div class="col-6">
                                               <div class="form-group">

                                                   <input type="text" name="name" value="{{$book->name}}" class="form-control text-dark @error("name") is-invalid @enderror" placeholder="Full Name">
                                                   @error("name")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>

                                           <div class="col-6">
                                               <div class="form-group">
                                                   <input type="text" value="{{$book->nic}}" name="nic" class="text-dark form-control @error("nic") is-invalid @enderror" placeholder="NIC">
                                                   @error("nic")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>

                                           <div class="col-6">
                                               <div class="form-group">
                                                   <input type="text" value="{{$book->nop}}" name="nop" class="text-dark form-control @error("nop") is-invalid @enderror" placeholder="Number of People">
                                                   @error("nop")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>
                                           <div class="col-6">
                                               <div class="form-group">
                                                   <input type="text" value="{{$book->phone}}" name="phone" class="custom-select @error("phone") is-invalid @enderror" placeholder="Phone">
                                                   @error("phone")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>
                                           <div class="col-6">
                                               <div class="form-group">
                                                   <input type="text" value="{{$book->email}}" name="email" class="custom-select @error("email") is-invalid @enderror" placeholder="Phone">
                                                   @error("email")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>
                                           <div class="col-6">
                                               <div class="form-group">
                                                   <input type="text" value="{{$book->location}}" name="splace" class="custom-select @error("splace") is-invalid @enderror" placeholder="Location">
                                                   @error("location")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-3">
                                               <select class="custom-select @error("package") is-invalid @enderror" name="package" >
                                                  @foreach($packages as $p)
                                                   <option value="{{$p->name}}" {{$book->package===$p->name ?'selected':""}}>{{$p->name}}</option>
                                                   @endforeach
                                                   </select>

                                               @error("package")
                                               <div class="text-danger invalid-feedback">{{$message}}</div>
                                               @enderror
                                           </div>

                                           <div class="col-3">
                                               <div class="form-group">
                                                   <input type="date" value="{{$book->date}}" id="v_name" name="date" class="custom-select  @error("date") is-invalid @enderror">
                                                   @error("date")
                                                   <p class="text-danger invalid-feedback">{{$message}}</p>
                                                   @enderror
                                               </div>
                                           </div>
                                           <div class="col-3">
                                               <select class="custom-select @error("paym") is-invalid @enderror" name="paym" >
                                                   <option class="cus-select"  value="0">UnPaid</option>
                                                   <option class="cus-select" value="1">Paid</option>
                                               </select>
                                           </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-12 traveling-box">
                                               <div class="read-more">
                                                   <button type="reset" class="read-more">Cancel</button>
                                                   <button type="submit" class="read-more">Update</button>
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

   @endif

@endsection
