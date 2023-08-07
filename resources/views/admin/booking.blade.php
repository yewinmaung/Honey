@extends('format.adminmaster')
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item active">Booking-Information</li>
    </ol>
@endsection
@section('bookU')
    <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right">{{$bookU}}</span>
@endsection
@section('content')
    <div class="">
        <div class="col-12">
            <div class="d-flex justify-content-end align-items-center">

                <form method="post" action="{{route("admin-actionsearch")}}" class="form-inline">
                    @csrf
                    <div class="input-group pb-1">
                        <input type="search" name="search" class="mx-1">
                        <button class="btn btn-cus-col m-0 p-2" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <table class="table bg-white">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>NIC</th>
                    <th>Phone</th>
                    <th>Trip</th>
                    <th>Package</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>

                @forelse($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->nic}}</td>
                        <td>{{$book->phone}}</td>
                        <td class="text-capitalize">{{$book->trip}}</td>
                        <td class="text-capitalize">{{$book->package}}</td>
                        <td>{{$book->date}}</td>
                        <td>{{$book->hour}}
                            {{$book->minute}}
                            {{$book->am_or_pm}}
                        </td>

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
        </div>

    </div>
@endsection
