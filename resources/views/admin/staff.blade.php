@extends('format.adminmaster')
@section('title')
    Staff Infromation
@endsection

@section('breadcamp')
    <ol class="breadcrumb w-100">

            <li class="breadcrumb-item"><a href="{{route("dashboard")}}" class="owncol">Home</a></li>

        <li class="breadcrumb-item active">Packages</li>
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
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>NIC</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>

                </tr>

             </table>



        </div>
    </div>
@endsection
