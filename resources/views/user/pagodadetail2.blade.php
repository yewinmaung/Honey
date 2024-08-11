@extends("format.master")
@section("title")
   Detail
@endsection
@section('breadCamp')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route("trip-package")}}" class="owncol">Back</a></li>
        <li class="breadcrumb-item">Detail</li>
    </ol>
@endsection
@section("content")
    <div class="w-100" style="height: 200px;"></div>
    <div id="about" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card w-50">
                        <div class="owl-carousel owl-theme">
                            <div class="item pb-2">
                                <img class="img-responsive" src="{{asset("data/images/pagodas/kp1.jpg")}}" alt="#" />

                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset("data/images/pagodas/kp2.jpg")}}" alt="#" />

                            </div>

                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{$pagoda->name}}</h3>
                            <p class="card-text">{{$pagoda->history}}</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>


@endsection
@section("customscript")
    $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    margin: 10,
    nav: true,
    loop: true,
    responsive: {
    0: {
    items: 1
    },
    600: {
    items: 1
    },
    1000: {
    items: 1
    }
    }
    })
    })
@endsection
