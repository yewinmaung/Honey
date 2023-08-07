<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
  <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('data/css/admin.css')}}">
  <link rel="stylesheet" href="{{asset('data/css/font-awesome.min.css')}}">
</head>
<body>

    <section class="">
        <div class="container-fluid">
            <div class="row g-0 ">
                <nav class="col-2 bg-light p-0 m-0">
                    <h1 class="h4 py-3 text-center bg-custom">
        <span class="d-none d-lg-inline">
   <img src="{{asset('data/images/1x/honey_logo-3.png')}}" alt="">
</span>
                    </h1>
                    <div class="list-group text-center text-lg-left px-3">
             <span class="list-group-item disabled d-none d-lg-block">
                  <small>CONTROLS</small>
                    </span>
                        <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-home text-custom"></i>
                            <span class="d-none d-lg-inline">Dashboard</span>
                        </a>
                        <a href="{{route('book-user')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-users text-custom"></i>
                            <span class="d-none d-lg-inline">Booking Users</span>
                            <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right">{{$bookU}}</span>
                        </a>
                        <a href="{{route('admin-staff')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-line-chart text-custom"></i>
                            <span class="d-none d-lg-inline">Staff Information</span>
                        </a>
                        <a href="{{route('admin-user-report')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-flag text-custom"></i>
                            <span class="d-none d-lg-inline">Reports</span>
                        </a>
                    </div>
                    <div class="list-group mt-4 text-center text-lg-left px-3">
         <span class="list-group-item disabled d-none d-lg-block">
           <small>ACTIONS</small>
         </span>
                        <a href="{{route('admin-user-upload')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-user text-custom"></i>
                            <span class="d-none d-lg-inline">New Book User</span>
                        </a>
                        <a href="{{route('admin-upload')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-edit text-custom"></i>
                            <span class="d-none d-lg-inline">Add New Staff</span>
                        </a>

                    </div>
                </nav>
                <main class="col-10 bg-custom50">
                    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
                        <div class="flex-fill"></div>
                        @guest

                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        SignIn/SignUp
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item log" href="{{ route('login') }}">Login</a>
                                        <a class="dropdown-item log" href="{{ route('cus-registration') }}">Register</a>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Login
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item log" href="#">Profile</a>
                                        <a class="dropdown-item log" href="{{ route('signout') }}">Logout</a></div>
                                </div>
                            </li>
                        @endguest
                        {{--end Login/Logout--}}
                    </nav>
                    <div class="container-fluid mt-3 p-4">
                        <h2 class="h6 text-white-50">QUICK STATS</h2>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card mb-4 status-card" >
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa fa-users h1 text-col1 text-custom"></i>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-1 h4 font-weight-bolder">
                                                    <span class="counter-up text-col1">{{$IU}}</span>
                                                </p>
                                                <p class="mb-0 text-col1-50">Interest Users</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card mb-4 status-card" >
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa fa-user h1 text-col1 text-custom"></i>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-1 h4 font-weight-bolder">
                                                    <span class="counter-up text-col1">{{$bookU}}</span>
                                                </p>
                                                <p class="mb-0 text-col1-50">Booking users</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card mb-4 status-card" >
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa fa-tripadvisor h1 text-col1 text-custom"></i>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-1 h4 font-weight-bolder">
                                                    <span class="counter-up text-col1">{{$admin_count}}</span>
                                                </p>
                                                <p class="mb-0 text-col1-50">Staff</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card mb-4 status-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa fa-map-marker h1 text-col1 text-custom"></i>
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-1 h4 font-weight-bolder">
                                                    <span class="counter-up text-col1">4</span>

                                                </p>
                                                <p class="mb-0 text-col1-50">Location
                                                    <a href="#" class="">Detail</a>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Interested And Book
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" width="300" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h1 class="text-custom1">Staff Infromation</h1>
                                        <table class="table bg-white">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>E-mail</th>
                                                <th>Phone</th>


                                            </tr>
                                            @foreach($admins as $admin)
                                            <tr>
                                                <td>{{$admin->id}}</td>
                                                <td style="text-transform: capitalize;">{{$admin->name}}</td>
                                                <td>{{$admin->job}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>{{$admin->phone}}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

<script src="{{asset('data/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('data/js/jquery.min.js')}}"></script>
<script src="{{asset('data/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('data/js/Chart.min.js')}}"></script>
<script>
    //Chart Js
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July','Aug','Sep','Oct','Nov','Dec'],
            datasets: [
                {
                    label: 'Interested',
                    data: [1, 19, 3, 5, 2, 3,1, 19, 3, 5, 2, 3],
                    backgroundColor: [

                        'rgba(107,71,1,0.55)',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                },
                {
                    label: 'Booking',
                    data: [4, 8, 7, 9, 3, 3,4, 8, 7, 9, 3, 3],
                    backgroundColor: [

                        'rgba(249,201,1,0.69)',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>
