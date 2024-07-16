@extends('format.adminmaster')
@section('title')
    Hotels and Rooms
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">

            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="owncol">Home</a></li>

        <li class="breadcrumb-item active">Hotel and Room</li>
    </ol>
@endsection
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2">
                        <h3 class="card-header text-center">Hotels List</h3>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <th>#</th>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                               @foreach($hotels as $hotel)
                                   <tr>
                                       <td>{{$hotel->id}}</td>
                                       <td>
                                           <img src="/images/{{$hotel->img}}" width="50px" class="pb-2">
                                       </td>
                                       <td>{{$hotel->name}}</td>
                                       <td class="d-flex">
                                           <form action="" method="post" class="form-inline mx-1">
                                               @method('delete')
                                               @csrf
                                               <button class="p-2 m-0 read-more">Delete</button>
                                           </form>
                                         </td>

                                   </tr>
                               @endforeach
                                </tbody>
                            </table>
                            {{$hotels->links()}}
                              </div>
                    </div>
                    <div class="card">
                        <h3 class="card-header text-center">RoomType</h3>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <th>#</th>
                                <th>Img</th>
                                <th>Room Type</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($rooms as $hotel)
                                    <tr>
                                        <td>{{$hotel->id}}</td>
                                        <td>
                                            <img src="/images/{{$hotel->img}}" width="50px" class="pb-2">
                                        </td>
                                        <td>{{$hotel->name}}</td>
                                        <td class="d-flex">
                                            <form action="{{route("rdel",$hotel->id)}}" method="post" class="form-inline mx-1">
                                                @method('delete')
                                                @csrf
                                                <button class="p-2 m-0  read-more">Delete</button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$rooms->links()}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-2">
                        <h3 class="card-header text-center">Hotel</h3>
                        <div class="card-body">
                            <form action="{{route("gustInfo")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control" name="img">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Hotel" class="form-control @error("hotel") is-invalid @enderror" name="hotel"
                                           autofocus>
                                    @error("hotel")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Location" class="form-control @error("loc") is-invalid @enderror" name="loc"
                                           autofocus>
                                    @error("loc")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mx-auto d-flex justify-content-end">
                                    <div class="">
                                        <button type="reset" class="read-more">Cancel</button>
                                        <button type="submit" class="read-more">Create</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-header text-center">Room Types</h3>
                        <div class="card-body">
                            <form action="{{route("room")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control" name="img">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="RoomType" class="form-control @error("room") is-invalid @enderror" name="room"
                                           autofocus>
                                    @error("room")
                                    <div class="text-danger invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="mx-auto d-flex justify-content-end">
                                    <div class="">
                                        <button type="reset" class="read-more">Cancel</button>
                                        <button type="submit" class="read-more">Create</button>

                                    </div>
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

