@extends('format.adminmaster')
@section('title')
    Report-Detail
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("admin-user-report")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection
@section('content')
    @foreach($messages as $message)

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
                <form action="{{route("reply")}}" method="post">
                    @csrf
                    <div class="card p-2">
                        <h2 class="card-title">{{$message->title}}</h2>
                        <div class="form-group">
                            <input type="hidden" name="cemail" value="{{$message->cemail}}">
                            <label for="" class="text-dark">Name</label>
                            <input type="text" name="cname" value="{{$message->cname}}" class="Newsletter form-control @error("cname") is-invalid @enderror">
                            @error("cname")
                            <p class="text-danger invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="textarea Newsletter form-control @error("cmessage")is-invalid @enderror" name="cmessage"  placeholder="Decription" type="text" ></textarea>
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

    @endforeach
@endsection
