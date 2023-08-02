@extends('format.adminmaster')
@section('title')
    Report-Detail
@endsection
@section('content')
    @foreach($messages as $message)
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Name: {{$message->cname}}</h2>
            <p class="card-text text-dark">Description: {{$message->cmessage}}</p>
           <div class="d-flex justify-content-end">
              <p class="px-3">To Reply: </p>
               <a href="mailto:yewinmaung@ucsloikaw.edu.mm">{{$message->cemail}}</a>
           </div>
        </div>
    </div>
    @endforeach
@endsection
