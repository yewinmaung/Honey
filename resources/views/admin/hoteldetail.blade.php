@extends('format.adminmaster')
@section('title')
    Edit Hotel
@endsection
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row d-flex justify-content-center">

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Hotel</h3>
                        <div class="card-body">

                            <form action="{{route("hupdate")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <img src="/images/{{$town->img}}" width="50px" class="pb-2">
                                    <input type="file" class="form-control" name="img">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="hidden" name="id" value="{{$town->id}}">
                                    <input type="text" value="{{$town->name}}" placeholder="Hotel" class="form-control @error("hotel") is-invalid @enderror" name="hotel"
                                           autofocus>
                                    @error("hotel")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class=" form-group">
                                    <label  class="form-label text-custom">Room Type</label>
                                    <select class="custom-select @error("rtype") is-invalid @enderror" name="rtype" >
                                        @foreach($rooms as $room)
                                        <option class="cus-select" value="{{$room->name}}" {{$town->rtype===$room->name?'selected':""}}>
                                            {{$room->name}}
                                        </option>
                                        @endforeach
                                       </select>
                                    @error("rtype")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" value="{{$town->price}}" placeholder="Price" class="form-control @error("price") is-invalid @enderror" name="price"
                                           autofocus>
                                    @error("price")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="mx-auto d-flex justify-content-end">

                                    <div class="">
                                        <a href="{{route("hotelshow")}}" class="btn btn-warning">
                                            <i class="fa fa-backward text-dark"></i>
                                            back</a>
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

