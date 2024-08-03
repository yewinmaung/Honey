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
                     <div class="col-md-12 ">
                         <div class="titlepage">
                             <h2 style="color:#6b4701;">Pagoda</h2>
                             <div class="row">
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("data/images/honey/smd.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">Shwe Maw Daw Pagoda</h5>
                                             <p class="card-text"></p>
                                             <a href="http://bagoshwemawdaw.com.mm/" class="d-flex justify-content-end">More</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("data/images/honey/download.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">Shwe Thar Lyaung Pagoda</h5>
                                             <p class="card-text"></p>
                                             <a href="https://www.google.com/maps/place/Shwe/@20.7644475,97.0933666,17z/data=!3m1!4b1!4m6!3m5!1s0x30ce7d00141659ad:0xbe294d31956605d4!8m2!3d20.7644475!4d97.0959415!16s%2Fg%2F11w25h086r?entry=ttu" class="d-flex justify-content-end">More</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("data/images/honey/images.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">Kyaikpun Paya Pagoda</h5>
                                             <p class="card-text">
                                                 Founder - King Migadippa <br>
                                                 Location - Bago City
                                             </p>
                                             <a href="http://bagoshwemawdaw.com.mm/" class="d-flex justify-content-end">More</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             </div>
                         <div class="titlepage">
                             <h2 style="color:#6b4701;">Culture & Art</h2>
                             <div class="row slider">
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("data/images/honey/palace1.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">Palace</h5>
                                             <p class="card-text"></p>
                                            </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("data/images/honey/p4.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">Museum</h5>
                                             <p class="card-text"></p>
                                          </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 100%;">
                                         <img src="{{asset("data/images/honey/p3.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">Palace</h5>

                                          </div>
                                     </div>
                                 </div>
                             </div>
                            </div>

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
                                             <a href="{{$r->loc}}" class="d-flex justify-content-end">More</a>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                             </div>


                         </div>
                         <div class="titlepage">
                             <h2 style="color:#6b4701;">Local Products</h2>
                             <div class="row">
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 80%; height: 50%;">
                                         <img src="{{asset("data/images/honey/l1.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                           </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 80%; height: 50%;">
                                         <img src="{{asset("data/images/honey/l2.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                             </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 80%; height: 50%;">
                                         <img src="{{asset("data/images/honey/l3.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                            </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 80%; height: 50%;">
                                         <img src="{{asset("data/images/honey/l4.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                            </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 80%; height: 50%;">
                                         <img src="{{asset("data/images/honey/l6.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                              </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 80%; height: 50%;">
                                         <img src="{{asset("data/images/honey/l5.jpg")}}" class="card-img-top" alt="...">
                                         <div class="card-body">
                                            </div>
                                     </div>
                                 </div>

                             </div>

                         </div>
                     </div>
                 </div>
             </div>

         </div>


@endsection
