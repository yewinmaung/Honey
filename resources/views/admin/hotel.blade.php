@extends('format.adminmaster')
@section('title')
    New Hotel
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
    <a href="{{route('gust')}}" class="list-group-item list-group-item-action cusactive">
        <i class="fa fa-hotel text-custom"></i>
        <span class="d-none d-lg-inline">New Hotel</span>
    </a>
    <a href="{{route('gust-room')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-tag text-custom"></i>
        <span class="d-none d-lg-inline">Room Types</span>
    </a>
    <a href="{{route('addtown')}}" class="list-group-item list-group-item-action ">
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

        <li class="breadcrumb-item active">New Hotel</li>
    </ol>
@endsection
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2">
                        <h3 class="card-header text-center">Hotels List</h3>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <th>#</th>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                               @foreach($hotels as $hotel)
                                   <tr>
                                       <td>{{$hotel->id}}</td>
                                       <td>
                                           <img src="/images/{{$hotel->img}}" width="50px" class="pb-2">
                                       </td>
                                       <td>{{$hotel->name}}</td>
                                       <td>{{\Illuminate\Support\Str::limit($hotel->location,30)}}</td>
                                       <td class="d-flex">
                                           <form action="{{route("hot",$hotel->id)}}" method="post" class="form-inline mx-1">
                                               @method('delete')
                                               @csrf
                                               <button class="p-2 m-0 read-more">Delete</button>
                                           </form>
                                         </td>

                                   </tr>
                               @endforeach
                                </tbody>
                            </table>
                            {{$hotels->links()}}
                              </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card mb-2">
                        <h3 class="card-header text-center">Hotel</h3>
                        <div class="card-body">
                            <form action="{{route("gustInfo")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control @error("img") is-invalid @enderror" name="img">
                                    @error("img")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Hotel" class="form-control @error("hotel") is-invalid @enderror" name="hotel"
                                           autofocus>
                                    @error("hotel")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Location" class="form-control @error("loc") is-invalid @enderror" name="loc"
                                           autofocus>
                                    @error("loc")
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

