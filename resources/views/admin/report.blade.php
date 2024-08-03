@extends('format.adminmaster')
@section('title')
    Reports
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
        <li class="breadcrumb-item"><a href="{{route("dashboard")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item active">Report</li>
    </ol>
@endsection

@section('content')
      <div class="card">
          @if (Session::has('success'))
              <div class="alert alert-success p-2">{{Session::get('success')}}</div>
          @endif
          @if (Session::has('error'))
              <div class="alert alert-danger p-2">{{Session::get('error')}}</div>
          @endif
          <div class="card-header">
              Report
          </div>
          <div class="card-body">
              <table class="table">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>E-Mail</th>
                      <th>Subject</th>
                      <th>Date</th>
                      <th>Controls</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($messages as $message)
                      <tr>
                         <td>{{$message->id}}</td>
                          <td>{{$message->cname}}</td>
                          <td>{{$message->cemail}}</td>
                          <td>{{$message->title}}</td>
                          <td>{{$message->updated_at}}</td>
                          <td>
                              @if ($message->type==1)

                                      <i class="fa fa-check text-success"></i>

                              @else
                             <a href="{{route('admin-message',$message->id)}}" class="btn btn-outline-secondary d-inline">Detail</a>
                              @endif
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
           {{$messages->links()}}
          </div>
      </div>


@endsection


