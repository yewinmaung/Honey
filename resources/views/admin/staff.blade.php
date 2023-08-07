@extends('format.adminmaster')
@section('title')
    Staff Infromation
@endsection
@section('bookU')
    <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right">{{$bookU}}</span>
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("dashboard")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item active">Staff Imformation</li>
    </ol>
    @endsection
@section('content')

    <div class="row w-100">
        <div class="col-12">
            <table class="table w-100 bg-white">
                <tr>
                    <th>Photo</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>NIC</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Control</th>
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

                     <td>
                         <a href="{{route('staff-detail',$admin->id)}}" class="btn btn-primary">Detail</a>
                         <form action="{{route('staff-delete',$admin->id)}}" class="d-inline" method="post">
                             @csrf
                             @method('delete')
                             <input type="submit" class="btn btn-danger" value="Delete">
                         </form>
                     </td>
                 </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            <p>There is No Record</p>
                            <br>
                            <a href="{{route("admin-upload")}}" class="">Create Staff</a>
                        </td>
                    </tr>
                 @endforelse
             </table>
        </div>
    </div>
@endsection
