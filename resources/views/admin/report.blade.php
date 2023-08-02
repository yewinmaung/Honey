@extends('format.adminmaster')
@section('title')
    Reports
@endsection
@section('content')
      <div class="card">
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
                      <th>Message</th>
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
                          <td>{{$message->cmessage}}</td>
                          <td>{{$message->updated_at}}</td>
                          <td>
                              <a href="{{route('admin-message',$message->id)}}" class="btn btn-outline-secondary d-inline">Detail</a>
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>


@endsection


