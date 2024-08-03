@extends('format.adminmaster')
@section('title')
    Report-Detail
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
    <a href="{{route('admin-user-report')}}" class="list-group-item list-group-item-action cusactive">
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
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("admin-user-report")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection
@section('content')


    <div class="row">

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Name: {{$message->cname}}</h2>
                    <p class="card-text text-dark">Description: {{$message->cmessage}}</p>
                    <div class="d-flex justify-content-end">
                        <p class="px-3">To Reply: </p>
                        <a href="mailto:{{$message->cemail}}">{{$message->cemail}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            @if (Session::has('success'))
                <div class="alert alert-success p-2">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger p-2">{{Session::get('error')}}</div>
            @endif
            <form action="{{route("reply")}}" method="post">
                @csrf
                <div class="card p-2">
                    <h2 class="card-title">{{$message->title}}</h2>
                    <div class="form-group">
                        <input type="hidden" value="{{$message->id}}" name="id">
                        <input type="hidden" name="title" value="{{$message->title}}">
                        <input type="hidden" name="email" value="{{$message->cemail}}">
                        <label for="" class="text-dark">Name</label>
                        <input type="text" name="name" value="{{$message->cname}}"
                               class="Newsletter form-control @error("cname") is-invalid @enderror">
                        @error("cname")
                        <p class="text-danger invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="textarea Newsletter form-control @error("cmessage")is-invalid @enderror"
                                  name="message" placeholder="Decription" type="text"></textarea>
                        @error("cmesage")
                        <p class="text-danger invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-warning w-25 " type="submit">
                            <i class="fa fa-send">Send</i>
                        </button>
                    </div>


                </div>
            </form>


        </div>

    </div>


@endsection
