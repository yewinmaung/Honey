@extends('format.adminmaster')
@section('title')
    Staff Infromation Detail
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("admin-staff")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection
@section('content')
    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card w-75  bg-custom">
            <div class="card-header bg-secondary">
                <img src="{{asset('data/images/1x/honey_logo-3.png')}}" alt="" class="mb-3">
                <h3 class="text-warning">Staff Information</h3>
            </div>
            <div class="card-body">

                    <form action="{{route('staff-update',$admin->id)}}" class="" method="post" enctype="multipart/form-data">
                        @method("put")
                        @csrf
                        <div class="d-flex justify-content-end align-items-center">
                            <div class="form-group">
                                <img src="{{asset('images/'.$admin->image)}}" alt="" class="" width="90px">
                            </div>
                            <div class="form-group text-custom1">
                                <label class="form-label text-custom1">Image</label>
                                <input type="file" class="form-control @error("image") is-invalid @enderror" name="image">
                                @error("image")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group text-custom1">
                                <label class="form-label text-custom1">Name</label>
                                <input type="text" class="form-control text-dark @error("sname") is-invalid @enderror" name="sname" value="{{$admin->name}}">
                                @error("sname")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label text-custom1">NIC</label>
                                <input type="text" class="form-control text-dark  @error("snic") is-invalid @enderror" name="snic" value="{{$admin->nic}}">
                                @error("snic")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label  class="form-label text-custom1" >Email</label>
                                <input type="email" class="form-control text-dark @error("semail") is-invalid @enderror" name="semail" value="{{$admin->email}}">
                                @error("semail")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label  class="form-label text-custom1" >Phone</label>
                                <input type="tel" class="form-control text-dark @error("sphone") is-invalid @enderror" name="sphone" value="{{$admin->phone}}">
                                @error("sphone")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label  class="form-label text-custom1">City</label>
                                <input type="text" class="form-control text-dark @error("scity") is-invalid @enderror" name="scity" value="{{$admin->city}}">
                                @error("scity")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 form-group">
                                <label  class="form-label text-custom1">Job</label>
                                <select class="custom-select @error("job") is-invalid @enderror" name="job">
                                    <option selected disabled >{{$admin->job}}</option>
                                    <option class="cus-select"  value="customer_Service">customer_Service</option>
                                    <option class="cus-select" value="Driver">Driver</option>
                                    <option class="cus-select" value="Manager">Manager</option>
                                </select>

                                @error("job")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label class="text-custom1">Quater</label>
                                <input type="text" class="form-control text-dark @error("squar") is-invalid @enderror" name="squar" value="{{$admin->quar}}">
                                @error("squar")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <div class="input-group">
                                <span class="input-group-text">Degree or Certified</span>
                                <textarea class="form-control text-dark @error("desc") is-invalid @enderror" aria-label="With textarea" name="desc">{{$admin->desc}}</textarea>
                                @error("desc")
                                <div class="text-danger invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end py-3 btn-group">
                            <button type="reset" class="read-more">Cancel</button>
                            <button type="submit" class="read-more">Update</button>
                        </div>
                    </form>


             @endsection
