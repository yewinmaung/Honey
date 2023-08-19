@extends('format.adminmaster')
@section('title')
    StaffAccounts
@endsection
@section("breadcamp")
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("admin-staff")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item active">StaffAccount</li>
    </ol>
@endsection
@section("content")
    <div class="row w-100">
        <div class="col-12">
            <div class="d-flex justify-content-end align-items-center">

                <form method="post" action="{{route("staffacc-search")}}" class="form-inline">
                    @csrf
                    <div class="input-group pb-1">
                        <input type="search" name="search" class="mx-1" placeholder="Searching With ID">
                        <button class="btn btn-cus-col m-0 p-2" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <table class="table w-100 bg-white">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Control</th>
                </tr>
                @forelse($admins as $admin)
                    <tr>
                      <td>{{$admin->id}}</td>
                        <td class="text-capitalize">{{$admin->name}}</td>

                            @if($admin->type=="1")
                                <td>Manager</td>
                            @elseif($admin->type=="2")
                                <td>CustomerService</td>
                            @elseif($admin->type=="3")
                                <td>Driver</td>
                        @elseif($admin->type=="0")
                            <td>Customer</td>
                            @endif

                        <td>{{$admin->email}}</td>

                            <td>
                                <a href="{{route("staffaccedit",$admin->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route("staffaccdelete",$admin->id)}}" class="d-inline" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>

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

@endsection
