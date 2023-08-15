@extends('format.adminmaster')
@section("title")
    Add Booking
@endsection
@section('bookU')
    <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right">{{$bookU}}</span>
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
                               <h3 class="text-warning">Staff Requirements</h3>
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
                                           <select class="custom-select @error("package") is-invalid @enderror" name="package" >
                                               <option selected disabled >Select Package</option>
                                               <option class="cus-select"  value="holiday">Holiday Trip </option>
                                               <option class="cus-select" value="honeymoon">HoneyMoon Trip </option>
                                               <option class="cus-select" value="family">Family Trip </option>
                                           </select>

                                           @error("package")
                                           <div class="text-danger invalid-feedback">{{$message}}</div>
                                           @enderror
                                       </div>
                                       <div class="col-6 pb-3">
                                           <select class="custom-select @error("package") is-invalid @enderror" name="trip" >
                                               <option selected disabled >Select Trip</option>
                                               <option class="cus-select"  value="bagan">Bagan </option>
                                               <option class="cus-select" value="dawei">Dawei</option>
                                               <option class="cus-select" value="ngapali">NgaPali</option>
                                               <option class="cus-select" value="myitkyina">MyitKyiNa</option>
                                           </select>

                                           @error("package")
                                           <div class="text-danger invalid-feedback">{{$message}}</div>
                                           @enderror
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
                                   </div>

                                   <div class="row">
                                       <div class="col-4">
                                           <select class="custom-select @error("hour") is-invalid @enderror" name="hour" >
                                               <option class="cus-select" selected disabled>Hour</option>
                                               <option class="cus-select"  value="1">1</option>
                                               <option class="cus-select"  value="2">2</option>
                                               <option class="cus-select"  value="3">3</option>
                                               <option class="cus-select"  value="4">4</option>
                                               <option class="cus-select"  value="5">5</option>
                                               <option class="cus-select"  value="6">6</option>
                                               <option class="cus-select"  value="7">7</option>
                                               <option class="cus-select"  value="8">8</option>
                                               <option class="cus-select"  value="9">9</option>
                                               <option class="cus-select"  value="10">10</option>
                                               <option class="cus-select"  value="11">11</option>
                                               <option class="cus-select"  value="12">12</option>
                                           </select>
                                       </div>
                                       <div class="col-4">
                                           <select class="custom-select @error("min") is-invalid @enderror" name="minute" >
                                               <option value="" selected disabled class="cus-select">Minute</option>
                                               <option class="cus-select"  value=":10:">10</option>
                                               <option class="cus-select"  value=":15:">15</option>
                                               <option class="cus-select"  value=":20:">20</option>
                                               <option class="cus-select"  value=":25:">25</option>
                                               <option class="cus-select"  value=":30:">30</option>
                                               <option class="cus-select"  value=":35:">35</option>
                                               <option class="cus-select"  value=":40:">40</option>
                                               <option class="cus-select"  value=":45:">45</option>
                                               <option class="cus-select"  value=":50:">50</option>
                                               <option class="cus-select"  value=":55:">55</option>
                                               <option class="cus-select"  value=":00:">00</option>

                                           </select>
                                       </div>
                                       <div class="col-4">
                                           <select class="custom-select @error("dp") is-invalid @enderror" name="dp" >
                                               <option selected disabled >Select AM or PM</option>
                                               <option class="cus-select"  value="AM">AM</option>
                                               <option class="cus-select" value="PM">PM</option>
                                           </select>

                                           @error("package")
                                           <div class="text-danger invalid-feedback">{{$message}}</div>
                                           @enderror
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



