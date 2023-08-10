@extends('format.adminmaster')
@section("title")
    Update Booking
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("book-user")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection
@section('bookU')
    <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right">{{$bookU}}</span>
@endsection
@section('content')
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
                                  </div>
                                    <div class="row">
                                        <div class="col-3">
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
                                        <div class="col-3">
                                            <select class="custom-select @error("trip") is-invalid @enderror" name="trip" >
                                                <option selected disabled>{{$book->trip}}</option>
                                                <option class="cus-select"  value="Bagan">Bagan </option>
                                                <option class="cus-select" value="Dawei">Dawei</option>
                                                <option class="cus-select" value="NgaPali">NgaPali</option>
                                                <option class="cus-select" value="MyitKyiNa">MyitKyiNa</option>
                                            </select>

                                            @error("trip")
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
                                      <div class="col-4">
                                          <select class="custom-select @error("hour") is-invalid @enderror" name="hour" >
                                              <option class="cus-select" selected disabled>{{$book->hour}}</option>
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
                                          <select class="custom-select @error("minute") is-invalid @enderror" name="minute" >
                                              <option value="" selected disabled class="cus-select">{{$book->minute}}</option>
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
                                          @error("minute")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>
                                      <div class="col-4">
                                          <select class="custom-select @error("dp") is-invalid @enderror" name="dp" >
                                              <option selected disabled >{{$book->am_or_pm}}</option>
                                              <option class="cus-select"  value="AM">AM</option>
                                              <option class="cus-select" value="PM">PM</option>
                                          </select>

                                          @error("dp")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12 traveling-box">
                                          <div class="read-more">
                                              <button type="submit" class="read-more">Update</button>
                                              <button type="reset" class="read-more">Cancel</button>
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
