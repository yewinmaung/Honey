@extends('format.adminmaster')
@section('title')
    Dashboard
@endsection
@section("controls")
    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action cusactive">
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
@section('content')

        <div class="container-fluid mt-3 p-4">
            <h2 class="h6 text-white-50">QUICK STATS</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" >
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="fa fa-users h1 text-col1 text-custom"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up text-col1">{{$IU}}</span>
                                    </p>
                                    <p class="mb-0 text-col1-50">Interest Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" >
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="fa fa-user h1 text-col1 text-custom"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up text-col1">{{$bookU}}</span>
                                    </p>
                                    <p class="mb-0 text-col1-50">Booking users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" >
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="fa fa-hotel h1 text-col1 text-custom"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up text-col1">{{$hotel}}</span>
                                    </p>
                                    <p class="mb-0 text-col1-50">Hotel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="fa fa-hand-spock-o h1 text-col1 text-custom"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up text-col1">{{$res}}</span>

                                    </p>
                                    <p class="mb-0 text-col1-50">Restaurant

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-hover">
                        <tr class="text-white text-center">
                        <th class="#">NO</th>
                        <th class="#">Img</th>
                        <th class="">Title</th>
                        <th class="">Updated at</th>
                            <th class="">
                                Action
                            </th>
                        </tr>
                        @foreach($blog as $b)
                        <tr class="text-white text-center">
                            <td>{{$b->id}}</td>
                            <td>
                                <img src="{{asset("images/$b->img")}}" alt="" class="" style="width: 50px;height: 50px;border-radius: 50%;">
                            </td>
                            <td>{{$b->title}}</td>
                            <td>{{$b->updated_at}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route("pedit",$b->id)}}" class="btn btn-primary read-more">Edit</a>
                                    <form action="{{route("postdel",$b->id)}}" method="post" class="form-inline mx-1">
                                        @method('delete')
                                        @csrf
                                        <button class="p-2 m-0 btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    {{$blog->links()}}
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Create Post</h3>

                        <div class="card-body">

                            <form action="{{route("blog")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                     <input type="file" class="form-control  @error("img") is-invalid @enderror" name="img">
                                    @error("img")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                   <input type="text" placeholder="Title" class="form-control @error("title") is-invalid @enderror" name="title"
                                           autofocus value="">
                                    @error("title")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <textarea class="textarea form-control @error("dec")is-invalid @enderror" name="dec"  placeholder="Comment" type="text" ></textarea>
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


@endsection



