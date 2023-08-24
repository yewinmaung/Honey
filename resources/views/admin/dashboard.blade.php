@extends('format.adminmaster')
@section('title')
    Dashboard
@endsection
@section('content')
    @if($use=='1')
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
                <div class="col-12 col-md-5">
                    <h1 class="text-custom1">Indicator</h1>
                    <div class="card">

                            <div>
                                <canvas id="myChart" width="100px" height="80px"></canvas>
                            </div>

                    </div>
                </div>
                <div class="col-12 col-md-7">
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
                    {{$admins->links()}}
                </div>

            </div>
        </div>

        <script src="{{asset('data/js/Chart.min.js')}}"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July','Aug','Sep','Oct','Nov','Dec'],
                    datasets: [
                        {
                            label: 'Users',
                            data: [1, 19, 3, 5, 2, 3,1, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgb(168,159,103)',
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
                                'rgba(255,222,0,0.8)',
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
    @else
        <div class="">
            <h1 class="text-custom1 text-center">You Can't See</h1>
        </div>
    @endif
@endsection



