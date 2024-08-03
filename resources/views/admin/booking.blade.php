@extends('format.adminmaster')
@section('title')
    Booking
@endsection
@section("controls")
    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action">
        <i class="fa fa-home text-custom"></i>
        <span class="d-none d-lg-inline">Dashboard</span>
    </a>
    <a href="{{route('book-user')}}" class="list-group-item list-group-item-action cusactive">
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
@section('breadcamp')
    <ol class="breadcrumb w-100">

            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>

        <li class="breadcrumb-item active">Booking</li>
    </ol>
@endsection

@section('content')
    <div class="">
        <div class="col-12">
            <div class="d-flex justify-content-end align-items-center">

                <form method="post" action="{{route("admin-actionsearch")}}" class="form-inline">
                    @csrf
                    <div class="input-group pb-1">
                        <input type="search" name="search" class="mx-1" placeholder="NIC">
                        <button class="btn btn-cus-col m-0 p-2" type="submit">
                            <i class="fa fa-search"></i>
                            Search</button>
                    </div>
                </form>
            </div>
            <table class="table bg-white">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>NIC</th>
                    <th>Phone</th>
                    <th>Start Place</th>
                    <th>Package</th>
                    <th>Date</th>

                    @if($use=='1'||$use=='2')
                    <th>Payment</th>
                        <th>Service By</th>
                    @endif
                </tr>

                @forelse($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->nic}}</td>
                        <td>{{$book->phone}}</td>
                        <td class="text-capitalize">{{$book->location}}</td>
                        <td class="text-capitalize">{{$book->package}}</td>
                        <td>{{$book->date}}</td>


                         <td class="d-flex">
                             @if($book->isclear=='0')
                                 <a href="{{route('done',$book->id)}}" class="btn btn-warning d-inline-block mx-1">UnPaid</a>
                                <div class="">
                                    <form action="{{route("book.cancel",$book->id)}}" method="post" class="form-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="p-2 m-0  btn-sm btn btn-outline-danger">Cancel</button>
                                    </form>
                                </div>
                                 @elseif($book->isclear=='1')
                                 <label href="#" class="bg-warning text-dark p-2">Paid</label>
                                 @endif
                         </td>
                            @if($book->isclear=='1')
                                <td><p class="border bg-warning text-dark px-3 py-1">{{$book->admins_name}}</p>
                                    <small class="border bg-warning text-dark px-3 py-1">{{$book->updated_at}}</small>
                                </td>
                        @endif

                    </tr>

                @empty
                    <tr>
                        <div class="card border-danger">
                            <div class="card-body bg-warning">
                                <h4 class="text-danger text-center">No Booking</h4>
                            </div>
                        </div>
                    </tr>
                @endforelse

            </table>
           {{$books->links()}}
        </div>

    </div>
@endsection
