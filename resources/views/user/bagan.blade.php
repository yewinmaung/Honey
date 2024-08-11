@extends("format.master")
@section("title")
Interesting Places
@endsection
@section('breadCamp')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route("home")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item">Places</li>
    </ol>
@endsection
@section("content")
         <div class="w-100" style="height: 200px;"></div>
         <div id="about" class="">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Famous Pagodas</h2>
                             <span>
                                 Bago City, Myanmar, is known for its rich religious heritage, with many pagodas and temples that are significant both spiritually and historically.
                        </span>
                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/shwe1.jpg")}}" alt="#" />
                                 <h3>Shwemawdaw Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",1)}}" class="">More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/shwe2.jpg")}}" alt="#" />
                                 <h3>Kyaik Pun Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",2)}}" class="">More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/shwe3.jpg")}}" alt="#" />
                                 <h3>Shwethalyaung Buddha</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",3)}}" class="">More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/shwe4.jpg")}}" alt="#" />
                                 <h3>Mahazedi Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",4)}}" class="">More</a>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Kanbawzathadi Palace</h2>

                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/palace/p1.jpg")}}" alt="#" />
                              </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/palace/p2.jpg")}}" alt="#" />
                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/palace/p3.jpg")}}" alt="#" />
                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/palace/p4.jpg")}}" alt="#" />
                             </div>
                         </div>
                         <span class="pt-2">
                               Kanbawzathadi Palace is a historic site in Bago, Myanmar. It was originally built in the 16th century by King Bayinnaung, a prominent monarch of the Hanthawaddy Kingdom. The palace was known for its grandeur and intricate architectural style, showcasing the art and culture of that era. The palace complex includes several important buildings and features, such as the throne hall and living quarters, all designed with detailed wooden carvings and traditional Burmese craftsmanship. The site offers a glimpse into the opulent lifestyle of the royal court and the historical significance of the Hanthawaddy Kingdom.
                Today, the Kanbawzathadi Palace is a popular tourist attraction and a significant cultural heritage site, with efforts ongoing to preserve and restore its historical elements.
For visiting Kanbawzathadi Palace , fees : 1 person – 2000 ks
</span>
                     </div>
                 </div>
                 <div class="row mt-3">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2 style="color:#6b4701;">Restaurants</h2>
                             <div class="row">
                                 @foreach($restaurants as $r)
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("images/".$r->img)}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">{{$r->name}}</h5>
                                             <p class="card-text">{{$r->dec}}</p>
                                             <a href="{{$r->loc}}" class="d-flex justify-content-end">Location</a>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                             </div>


                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Arts and Crafts</h2>

                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/art/a1.jpg")}}" alt="#" />

                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/art/a2.jpg")}}" alt="#" />

                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/art/a3.jpg")}}" alt="#" />

                             </div>
                             <div class="item">
                                 <img class="img-responsive" src="{{asset("data/images/art/a4.jpg")}}" alt="#" />

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
    items: 2
    },
    1000: {
    items: 3
    }
    }
    })
    })
@endsection
