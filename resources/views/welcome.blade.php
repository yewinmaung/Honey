<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Honey Travelling Agency</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("data/css/bootstrap.min.css")}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset("data/css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("data/css/responsive.css")}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset("data/images/1x/honey_logo-3.png")}}"/><!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset("data/css/jquery.mCustomScrollbar.min.css")}}">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset("data/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("data/css/owl.theme.default.min.css")}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset("data/images/loading.gif")}}" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->

<!-- header -->
<header>
    <!-- header inner -->
    <div class="header position-fixed">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="{{asset("data/images/1.png")}}" alt="#"/> Burma</li>
                                <li><img src="{{asset("data/images/2.png")}}" alt="#"/> +959 686 959 500</li>
                                <li><img src="{{asset("data/images/3.png")}}" alt="#"/> honeytravellingagency6@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="{{route("home")}}"><img src="{{asset("data/images/1x/honey_logo-3.png")}}" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class=""> <a href="{{route("home")}}">Home</a> </li>
                                    <li> <a href="#about">About</a> </li>
                                    <li><a href="#travel">Travel</a></li>
                                    <li><a href="{{route("trip-package")}}">Interest Places</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                    {{--Login/Logout--}}
                                    @guest

                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <a class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    SignIn/SignUp
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item log" href="{{ route('login') }}">Login</a>
                                                    <a class="dropdown-item log" href="{{ route('registration') }}">Register</a>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                          <div class="d-flex justify-content-center align-items-center">
                                             <div class="dropdown">
                                                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                  </a>

                                                  <div class="dropdown-menu">
                                                      <a class="dropdown-item log" href="{{ route('user.ticket') }}">Profile</a>
                                                      <a class="dropdown-item log" href="{{ route('signout') }}">Logout</a></div>
                                              </div>
                                              <img src="{{asset("images/".Auth::user()->img)}}" class="p-2" style="width: 50px;height: 50px;border-radius: 50%">

                                          </div>
                                        </li>
                                    @endguest
                                    {{--end Login/Logout--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->


<!-- end header -->
<section class="container-fluid position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset("data/images/bago.jpg")}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset("data/images/pagodas/m2.jpg")}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset("data/images/palace/p1.jpg")}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="row">


        {{--        <video src="{{asset("data/vedio/bg2.mp4")}}" autoplay muted loop class="w-100 h-100"></video>--}}

        @guest

        @else
            <div class="or-form">
                <form method="post" action="{{route("user.store")}}" class="form-group border p-3 form-bg d-md-block d-none">
                    <h3 style="color:gold;background-color: #6b4701;" class="text-center d-flex justify-content-center mb-3 p-2 custom-adv">Start Your Trip With Us</h3>

                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">

                                <input type="text" name="name" value="{{old('name')}}" class="form-control @error("name") is-invalid @enderror" placeholder="Full Name">
                                @error("name")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" value="{{old('nic')}}" value="{{old('name')}}" name="nic" class="form-control @error("nic") is-invalid @enderror" placeholder="NIC">
                                @error("nic")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="email" value="{{old('email')}}" id="v_name" name="email" class="form-control @error("email") is-invalid @enderror" placeholder="user@gmail.com">
                                @error("email")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" value="{{old('nop')}}" name="nop" class="form-control @error("nop") is-invalid @enderror" placeholder="Number of People">
                                @error("nop")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 pb-2">
                            <label for="" class="text-white">Packages</label>
                            <select class="custom-select @error("package") is-invalid @enderror" name="package" >
                                @foreach($package as $p)
                                    <option class="cus-select" value="{{$p->name}}">{{$p->name}}</option>
                                @endforeach
                            </select>

                            @error("package")
                            <div class="text-danger invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="text-white">Address</label>
                            <div class="form-group">
                                <input type="text" value="" name="splace" class="form-control @error("splace") is-invalid @enderror" placeholder="Location">
                                @error("splace")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="date" id="v_name" name="date" class="custom-select  @error("date") is-invalid @enderror">
                                @error("date")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" value="{{old('phone')}}" name="phone" class="custom-select @error("phone") is-invalid @enderror" placeholder="Phone">
                                @error("phone")
                                <p class="text-danger invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rb" id="inlineRadio1" value="Male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rb" id="inlineRadio2" value="Female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 traveling-box">
                            <div class="read-more">
                                <button type="reset" class="read-more">Cancel</button>
                                <button type="submit" class="read-more">Booking</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @endguest

    </div>

</section>
<!-- about -->
<div id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2 style="color:#6b4701;">Bago History Abstract</h2>
                    <span> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="about-box">
                        <p> <span>
                                       Bago is a region in Myanmar located close to Yangon region. Bago City, formerly known as Hanthawaddy is the capital of Bago region. it is located 80 kilometres north-east of Yangon. It is a popular trip destination for tourists visiting Yangon due to proximity. Bago offers a perfect milieu of nature and culture to tourists. It is renowned for handicrafts as well as a vast wildlife sanctuary. It has a population of 220,000.  Being an ancient capital of Mon Kingdom in 15th century, you can enjoy the Bago sightseeing including ancient Buddha Images. Most sightseeing is Shwethalyaung Reclining Buddha (55 metres long), Shwemawdaw Pagoda, and 28 meter high huge Buddha Image of Kyaikpun Pagoda with its four huge Buddha Images facing the cardinal points and the one interest place is Kanbawzathardi Palace.
                            </span></p>
                        <div class="palne-img-area">
                            <img src="{{asset("data/images/bago.jpg")}}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="travel" class="traveling">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Select Offers For Traveling</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($package as $p)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="traveling-box card p-2">
                    <i><img src="{{asset("images/$p->img")}}" alt="icon" width="100px;"/></i>
                    <h3>{{$p->name}}</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="text-custom">
                       <p class="text-custom font-weight-bold"> {{$p->price}} ks</p>
                        <p class="font-italic">{{$p->hotel}} Hotel</p>
                        <p class="font-italic">Room {{$p->room}} Type</p>
                        <p class="font-italic">For {{$p->nop}} People</p>
                        <i class="">{{$p->dec}}</i>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{route("user.booknow",$p->id)}}" class="btn btn-warning">Select</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



<div class="Tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Short Trip In  Moe Yun Gyi Wetland</h2>
                    <span>
                        Moe Yun Gyi Wetland Resort is a unique and serene destination located about 113 kilometers from Bago City, Myanmar. It’s a popular spot for nature lovers and bird watchers, offering a peaceful retreat in a natural wetland environment.
                    </span>
                </div>
            </div>
        </div>
        <section id="demos">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/moeyanresort.jpg")}}" alt="#" />
                            <h3>Moe Yun Gyi Wetland Resort</h3>
                            <p>

                            </p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/myr2.jpg")}}" alt="#" />
                            <h3>Moe Yun Gyi Wetland Resort</h3>
                            <p>

                            </p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/myr3.jpg")}}" alt="#" />
                            <h3>Moe Yun Gyi Wetland Resort</h3>
                            <p>

                            </p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/myr4.jpg")}}" alt="#" />
                            <h3>Moe Yun Gyi Wetland Resort</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Reviews</h2>
                    <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blog as $b)
            <div class="col-md-4 col-sm-12">
                <div class="card" style="width: 100%;">
                    <img src="{{asset("images/".$b->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$b->title}}</h3>
                        <p class="card-text">{{$b->dec}}</p>
                        <small class="d-flex justify-content-end">{{$b->updated_at}}</small>
                    </div>
                </div>
            </div>
            @endforeach
            {{$blog->links()}}
{{--            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">--}}
{{--                <div class="blog-box">--}}
{{--                    <figure><img src="{{asset("data/images/blog-image.jpg")}}" alt="#"/>--}}
{{--                        <span>10 Feb 2019</span>--}}
{{--                    </figure>--}}
{{--                    <div class="travel">--}}
{{--                        <span>Post  By :  Travel  Agency</span>--}}
{{--                        <p><strong class="Comment"> 06 </strong>  Comment</p>--}}
{{--                        <p><strong class="like">05 </strong>Like</p>--}}
{{--                    </div>--}}
{{--                    <h3>London Amazing Tour</h3>--}}
{{--                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<!-- end our blog -->

<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="location_icon">
                        <li> <a href="#"><img src="{{asset("data/icon/facebook.png")}}"></a></li>
                        <li> <a href="#"><img src="{{asset("data/icon/Twitter.png")}}"></a></li>
                        <li> <a href="#"><img src="{{asset("data/icon/linkedin.png")}}"></a></li>
                        <li> <a href="#"><img src="{{asset("data/icon/instagram.png")}}"></a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>CONTACT US</h3>
                        <span>UCSP <br>Pyay<br>
                        BURMA<br>
                        +959 686959500</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="link">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Terms and conditions</a></li>
                            <li> <a href="#"> Privacy policy</a></li>
                            <li> <a href="#">News</a></li>
                            <li> <a href="#"> Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route("message.review")}}" class="" method="post">
                        @csrf
                        <div class="Follow">
                            <h3> Contact</h3>
                            <form action="{{route("message.review")}}" class="">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <input class="Newsletter form-control @error("cname")is-invalid @enderror" name="cname" placeholder="Name" type="text" >
                                        @error("cname")
                                        <p class="text-danger invalid-feedback">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">

                                            <input type="text" name="cemail" class="Newsletter form-control @error("cemail") is-invalid @enderror" placeholder="E-mail">
                                            @error("cemail")
                                            <p class="text-danger invalid-feedback">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">

                                            <input type="text" name="title" class="Newsletter form-control @error("title") is-invalid @enderror" placeholder="Title">
                                            @error("title")
                                            <p class="text-danger invalid-feedback">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea class="textarea form-control @error("cmessage")is-invalid @enderror" name="cmessage"  placeholder="Comment" type="text" ></textarea>
                                            @error("cmesage")
                                            <p class="text-danger invalid-feedback">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <button class="Subscribe" type="submit">Submit</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; 2024   <small>created By KC</small></p>

                </div>
            </div>
        </div>
    </div>
</footer>

<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset("data/js/jquery.min.js")}}"></script>
<script src="{{asset("data/js/popper.min.js")}}"></script>
<script src="{{asset("data/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("data/js/jquery-3.0.0.min.js")}}"></script>
<script src="{{asset("data/js/plugin.js")}}"></script>
<!-- sidebar -->
<script src="{{asset("data/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
<script src="{{asset("data/js/custom.js")}}"></script>
<!-- javascript -->
<script src="{{asset("data/js/owl.carousel.js")}}"></script>
<script>
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
</script>

</body>
</html>
