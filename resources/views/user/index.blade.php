@extends("format.master")
@section("title")
    Your Booking Booking Ticket
@endsection
@include("format.nav")
@section("content")

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 d-flex justify-content-center align-items-center">
                <div class="p-5 card">
                    <div class="card-header">Your Ticket</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                            <tr><td>#</td>
                                <td>Name</td>
                                <td>NIC</td>
                                <td>trip</td>
                                <td>Package</td>
                                <td>Start Date</td>
                                <td>Start Time</td>
                                <td>Payment</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->nic}}</td>
                                    <td class="text-capitalize">{{$book->trip}}</td>
                                    <td class="text-capitalize">{{$book->package}}</td>
                                    <td>{{$book->date}}</td>
                                    <td>{{$book->hour}}
                                         {{$book->minute}}
                                         {{$book->am_or_pm}}
                                    </td>

                                    <td class="d-flex">
                                        @if($book->isclear=='0')
                                            <label class="border bg-warning text-dark px-3 py-2 mx-1">UnPaid</label>
                                            <div class="">
                                                <form action="{{route("book.cancel",$book->id)}}" method="post" class="form-inline my-0">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="p-2 m-0  btn-sm btn btn-outline-danger">Cancel</button>
                                                </form>
                                            </div>
                                        @elseif($book->isclear=='1')
                                            <label class="border bg-warning text-dark px-3 py-1">Paid</label>

                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">
                                        <p>There is No Record</p>
                                        <br>
                                        <a href="{{route("home")}}" class="">Booking</a>
                                    </td>

                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
