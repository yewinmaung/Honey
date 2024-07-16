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
                              <h3 class="card-header text-center">Create Travel Package</h3>
                              <div class="card-body">
                                  @if (session('success'))

                                      <div class="alert alert-success" role="alert">
                                          {{session('success')}}
                                      </div>

                                  @endif
                                  <form action="{{ route('package') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group">
                                          <input type="file" class="form-control" name="img">
                                      </div>
                                      <div class="form-group mb-3">
                                          <input type="text" placeholder="Title" class="form-control @error("title") is-invalid @enderror" name="name"
                                                  autofocus>
                                          @error("title")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>


                                      <div class="form-group mb-3">
                                          <input type="text" placeholder="Price" class="form-control @error("price") is-invalid @enderror"
                                                 name="price">
                                          @error("price")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>

                                      <div class=" form-group">
                                          <label  class="form-label text-custom">Hotel</label>
                                          <select class="custom-select @error("hotel") is-invalid @enderror" name="hotel" >
                                              @foreach($hotels as $hotel)
                                              <option class="cus-select" value="{{$hotel->name}}">{{$hotel->name}}</option>
                                              @endforeach
                                          </select>
                                          @error("hotel")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>
                                      <div class=" form-group">
                                          <label  class="form-label text-custom">Room Type</label>
                                          <select class="custom-select @error("rtype") is-invalid @enderror" name="rtype" >
                                              @foreach($rooms as $room)
                                              <option class="cus-select" value="{{$room->name}}">{{$room->name}}</option>
                                              @endforeach
                                          </select>
                                          @error("rtype")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>
                                      <div class="form-group mb-3">
                                          <input type="text" placeholder="No:People" class="form-control @error("nop") is-invalid @enderror"
                                                 name="nop">
                                          @error("nop")
                                          <div class="text-danger invalid-feedback">{{$message}}</div>
                                          @enderror
                                      </div>

                                          <div class="form-group">
                                              <textarea class="textarea form-control @error("dec")is-invalid @enderror" name="dec"  placeholder="Description" type="text" ></textarea>
                                              @error("dec")
                                              <p class="text-danger invalid-feedback">{{$message}}</p>
                                              @enderror
                                          </div>

                                      <div class="mx-auto d-flex justify-content-end">
                                          <div class="">
                                              <button type="reset" class="read-more">Cancel</button>
                                              <button type="submit" class="read-more">Create</button>

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

