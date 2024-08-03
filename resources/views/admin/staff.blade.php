@extends('format.adminmaster')
@section('title')
    Packages
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
    <a href="{{route('plist')}}" class="list-group-item list-group-item-action cusactive">
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

@section('breadcamp')
    <ol class="breadcrumb w-100">
        @section('breadcamp')
            <ol class="breadcrumb w-100">

                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>

                <li class="breadcrumb-item active">Lists</li>
            </ol>
        @endsection
    </ol>
@endsection
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                 <table class="table table-hover bg-light">
                     <thead class="">
                     <th>Id</th>
                     <th>Img</th>
                     <th>Name</th>
                     <th>Hotel</th>
                     <th>RoomType</th>
                     <th>Nop</th>
                     <th>Price</th>
                     <th>Action</th>
                     </thead>
                     <tbody>
                     @foreach($packages as $p)
                     <tr>
                         <td>{{$p->id}}</td>
                         <td>
                             <img src="{{asset("images/$p->img")}}" alt="" class="" width="50px;">
                         </td>
                         <td>{{$p->name}}</td>
                         <td>{{$p->hotel}}</td>
                         <td>{{$p->room}}</td>
                         <td>{{$p->nop}}</td>
                         <td>{{$p->price}}</td>
                         <td class="d-flex">
                             <form action="{{route("pdel",$p->id)}}" method="post" class="form-inline mx-1">
                                 @method('delete')
                                 @csrf
                                 <button class="p-2 m-0  btn-sm btn btn-outline-danger" type="submit">Delete</button>
                             </form>
                             <a href="{{route("pacedit",$p->id)}}" class="btn btn-warning">Edit</a>

                         </td>

                     </tr>
                     @endforeach
                     </tbody>
                 </table>
                </div>
            </div>
        </div>
    </main>

    </div>

@endsection

