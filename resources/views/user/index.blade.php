@extends("format.master")

@section("title")
    Your Booking Booking Ticket
@endsection

@section("breadCamp")
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{route("home")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item">Your Booking</li>

    </ol>
@endsection
@section("content")
    <div class="" style="width: 100px;height: 200px;"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 d-flex justify-content-center align-items-center">
                <div class="p-5 card">
                    <div class="card-header">Your Ticket</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                            <tr><th>#</th>
                                <th>Name</th>
                                <th>NIC</th>
                                <th>trip</th>
                                <th>Package</th>
                                <th>Start Date</th>
                                <th>Start Time</th>
                                <th>Payment</th>
                                <th>Service</th>
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
                                    <td>
                                        @if($book->isclear=='1')
                                            <label class="border bg-warning text-dark px-3 py-1">{{$book->admins_name}}</label>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">
                                        <p>There is No Record</p>
                                        <br>
                                        <a href="{{route("user.booknow")}}" class="">Booking</a>
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
