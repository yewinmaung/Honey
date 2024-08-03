@extends("format.master")
@section("title")
Booking
@endsection
@section("breadCamp")
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{route("home")}}" class="owncol">Home</a></li>
{{--        <li class="breadcrumb-item"><a href="{{route("trip-package")}}" class="owncol">Trip</a></li>--}}
        <li class="breadcrumb-item">Package</li>

    </ol>
@endsection

@section("content")
    <div class="" style="width: 100px;height: 100px;"></div>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                       <div class="block"></div>
                    <div class="col-12 w-100 h-100 d-flex justify-content-center align-items-center">

                        <div class="w-50">
                            <form method="post" action="{{route("user.store")}}" class="form-group border p-3 form-bg d-md-block d-none">
                                <h3 style="color:gold;background-color: #6b4701;" class="text-center d-flex justify-content-center mb-3 p-2 custom-adv">Start Your Trip With Us</h3>

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
                                        <label for="" class="text-white">Address</label>

                                        <input type="text" value="{{$package->name}}" name="package" class="form-control @error("splace") is-invalid @enderror" placeholder="">
                                        @error("package")
                                        <div class="text-danger invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="" class="text-white">Address</label>
                                        <div class="form-group">
                                            <input type="text" value="{{old("splace")}}" name="splace" class="form-control @error("splace") is-invalid @enderror" placeholder="Location">
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
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error("rb") is-invalid @enderror" type="radio" name="rb" id="inlineRadio2" value="Female">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        @error("rb")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 traveling-box">
                                        <div class="read-more">
                                            <button type="reset" class="read-more">Cancel</button>
                                            <button type="submit" class="read-more mx-1">Booking</button>
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
