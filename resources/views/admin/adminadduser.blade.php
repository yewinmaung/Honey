@extends('format.adminmaster')
@section("title")
    Add Booking
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



