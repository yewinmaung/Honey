@extends('format.adminmaster')
@section('title')
    Staff Infromation
@endsection

@section('breadcamp')
    <ol class="breadcrumb w-100">
       @if($use=='1')
            <li class="breadcrumb-item"><a href="{{route("dashboard")}}" class="owncol">Home</a></li>
        @endif
        <li class="breadcrumb-item active">Staff Imformation</li>
    </ol>
    @endsection
@section('content')

    <div class="row w-100">
        <div class="col-12">
            <div class="d-flex justify-content-end align-items-center">

                <form method="post" action="{{route("staff-search")}}" class="form-inline">
                    @csrf
                    <div class="input-group pb-1">
                        <input type="search" name="search" class="mx-1" placeholder="Searching With NIC">
                        <button class="btn btn-cus-col m-0 p-2" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <table class="table w-100 bg-white">
                <tr>
                    <th>Photo</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>NIC</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                  @if($use=='1')
                        <th>Control</th>
                    @endif
                </tr>
                 @forelse($admins as $admin)
                 <tr>
                     <td><img src="/images/{{ $admin->image }}" width="50px"></td>
                     <td>{{$admin->id}}</td>
                     <td class="text-capitalize">{{$admin->name}}</td>
                     <td>{{$admin->job}}</td>
                     <td>{{$admin->nic}}</td>
                     <td>{{$admin->email}}</td>
                     <td>{{$admin->phone}}</td>
                     <td>{{$admin->city}}</td>
                     @if($use=='1')
                         <td>
                             <a href="{{route('staff-detail',$admin->id)}}" class="btn btn-primary">Detail</a>
                             <form action="{{route('staff-delete',$admin->id)}}" class="d-inline" method="post">
                                 @csrf
                                 @method('delete')
                                 <input type="submit" class="btn btn-danger" value="Delete">
                             </form>
                         </td>
                     @endif
                 </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">

                        @if($use=='1')
                                <p>This User does not exit</p>
                                <br>
                                <a href="{{route("admin-upload")}}" class="">Create Staff</a>
                            @else
                                <p>This User does not exit</p>
                            @endif
                        </td>
                    </tr>
                 @endforelse
             </table>

               {{$admins->links()}}

        </div>
    </div>
@endsection
