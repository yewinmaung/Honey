@extends('format.adminmaster')
@section('title')
    Hotel Info
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
    <a href="{{route('addtown')}}" class="list-group-item list-group-item-action cusactive">
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

            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>

        <li class="breadcrumb-item active">Hotel Info</li>
    </ol>
@endsection
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Hotels List</h3>
                        <div class="card-body">
                         <table class="table table-hover">
                             <thead>
                                 <th>#</th>
                                 <th>Img</th>
                                 <th>Name</th>
                                 <th>R-T</th>
                                 <th>Price</th>

                             <th>Action</th>
                             </thead>
                             <tbody>
                             @foreach($towns as $town)
                             <tr>
                                 <td>{{$town->id}}</td>
                                 <td>
                                     <img src="/images/{{$town->img}}" width="50px" class="pb-2">

                                 </td>
                                 <td>{{$town->name}}</td>
                                 <td>{{$town->rtype}}</td>
                                 <td>{{$town->price}}</td>
                                 <td class="d-flex">
                                     <form action="{{route("hdelete",$town->id)}}" method="post" class="form-inline mx-1">
                                         @method('delete')
                                         @csrf
                                         <button class="p-2 m-0  btn-sm btn btn-outline-danger">Delete</button>
                                     </form>
                                     <a href="{{route("hoteledit",$town->id)}}" class="btn btn-warning">Edit</a>

                                 </td>

                             </tr>
                             @endforeach
                             </tbody>
                         </table>
                            {{$towns->links()}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Hotel</h3>
                        <div class="card-body">
                            <form action="{{route("hotel")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control @error("img") is-invalid @enderror" name="img">
                                    @error("img")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class=" form-group">
                                    <label  class="form-label text-custom">Hotel</label>
                                    <select class="custom-select @error("hotel") is-invalid @enderror" name="hotel" >
                                        @foreach($hotels as $room)
                                            <option class="cus-select" value="{{$room->name}}">{{$room->name}}</option>
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
                                    <input type="text" placeholder="Price" class="form-control @error("price") is-invalid @enderror" name="price"
                                           autofocus>
                                    @error("price")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
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

