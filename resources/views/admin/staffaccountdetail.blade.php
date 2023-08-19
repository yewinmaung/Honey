@extends('format.adminmaster')
@section('title')
    Staff Infromation Detail
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route('staff-account')}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
@endsection
@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Create Staff Account</h3>
                        <div class="card-body">
                            <form action="{{ route('staffacc-update') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="ID" id="name" class="form-control @error("id") is-invalid @enderror" name="id"
                                           value="{{$user->id}}"    autofocus>
                                    @error("id")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control @error("name") is-invalid @enderror" name="name"
                                       value="{{$user->name}}"    autofocus>
                                    @error("name")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control @error("email") is-invalid @enderror"
                                        value="{{$user->email}}"   name="email"  autofocus>
                                    @error("email")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group">
                                    <label  class="form-label text-custom">Role</label>
                                    <select class="custom-select @error("type") is-invalid @enderror" name="type" >
                                       @if($user->type=='1')
                                            <option>Manager</option>
                                        @elseif($user->type=='2')
                                            <option>Customer Service</option>
                                        @elseif($user->type=='3')
                                            <option>Driver</option>
                                        @endif

                                        <option class="cus-select" value="1">Manager</option>
                                        <option class="cus-select"  value="2">customer_Service</option>
                                        <option class="cus-select" value="3">Driver</option>

                                    </select>

                                    @error("type")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-warning btn-block">Update</button>
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
