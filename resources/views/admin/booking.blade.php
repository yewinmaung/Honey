@extends('format.adminmaster')
@section('title')
    Booking
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        @if($use=='1')
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>
        @endif
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
                        <input type="search" name="search" class="mx-1" placeholder="Searching With NIC">
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
                    @if($use=='1'||$use=='2')
                    <th>Service</th>
                    @endif
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
                        @if($use=='1'||$use=='2')
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
                                 <a href="{{route('done',$book->id)}}" class="btn btn-warning">Paid</a>
                                 <p class="mx-2">Service By </p><i class="border bg-warning text-dark px-3 py-1">{{$book->admins_name}}</i>
                             @endif
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
        </div>

    </div>
@endsection
