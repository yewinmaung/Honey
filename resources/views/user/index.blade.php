@extends("format.master")

@section("title")
    Your Booking Booking Ticket
@endsection

@section("breadCamp")
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{route("home")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item">Profile</li>

    </ol>
@endsection
@section("content")
    <div class="" style="width: 100px;height: 200px;"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-md-8">
                <div class="card">
                    <div class="card-header">Your Ticket</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                            <tr><th>#</th>
                                <th>Name</th>
                                <th>NIC</th>
                                <th>Address</th>
                                <th>Package</th>
                                <th>Start Date</th>
                                <th>Payment</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->nic}}</td>
                                    <td class="text-capitalize">{{$book->location}}</td>
                                    <td class="text-capitalize">{{$book->package}}</td>
                                    <td>{{$book->date}}</td>


                                    <td class="">
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
                                           <div class="d-flex align-items-end">
                                               <label class="border bg-warning text-dark px-3 py-1">Paid</label>
                                               <small class=" text-dark px-2 py-1">Service by {{$book->admins_name}}</small>

                                           </div>
                                        @endif
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">
                                        <p>There is No Record</p>


                                    </td>

                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <img src="{{asset('data/images/1x/honey_logo-3.png')}}" alt="" class="mb-3">
                        <h3 class="text-warning">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))

                            <div class="alert alert-success" role="alert">
                                {{session('success')}}
                            </div>

                        @endif
                        <form method="post" action="{{route("aprofile")}}" class="form-group border p-3 form-bg " enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <img src="/images/{{\Illuminate\Support\Facades\Auth::user()->img}}" width="50px" class="pb-2">
                                        <input type="file" class="form-control  @error("img") is-invalid @enderror" name="img">
                                        @error("img")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control @error("name") is-invalid @enderror" placeholder="Full Name">
                                        @error("name")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control @error("email") is-invalid @enderror" placeholder="E-mail">
                                        @error("email")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">

                                        <input type="password" name="pwd" value="" class="form-control @error("pwd") is-invalid @enderror" placeholder="New Password">
                                        @error("pwd")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">

                                        <input type="password" name="cpwd" value="" class="form-control @error("cpwd") is-invalid @enderror" placeholder="Confirm Password">
                                        @error("cpwd")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 traveling-box">
                                    <div class="read-more">
                                        <button type="reset" class="read-more">Cancel</button>
                                        <button type="submit" class="read-more">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
