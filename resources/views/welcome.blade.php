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
    <title>Eforlad travel</title>
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
    <link rel="icon" href="{{asset("data/images/fevicon.png")}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
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
                                <li><img src="{{asset("data/images/2.png")}}" alt="#"/> +959 767381581</li>
                                <li><img src="{{asset("data/images/3.png")}}" alt="#"/> admin@honey.mailenable.com.mm</li>
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
                                    <li><a href="#blog">Blog</a></li>
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
                                            <div class="dropdown">
                                                <a class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item log" href="{{ route('user.ticket') }}">Profile</a>
                                                    <a class="dropdown-item log" href="{{ route('signout') }}">Logout</a></div>
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
<section class="container-fluid home bg-info position-relative">
    <div class="row">
        <video src="{{asset("data/vedio/bg2.mp4")}}" autoplay muted loop class="w-100 h-100"></video>

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
                            <select class="custom-select @error("package") is-invalid @enderror" name="package" >
                                <option selected disabled >Select Package</option>
                                <option class="cus-select"  value="holiday">Holiday Trip </option>
                                <option class="cus-select" value="honeymoon">HoneyMoon Trip </option>
                                <option class="cus-select" value="family">Family Trip </option>
                            </select>

                            @error("package")
                            <div class="text-danger invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-6 pb-3">
                            <select class="custom-select @error("trip") is-invalid @enderror" name="trip" >
                                <option selected disabled >Select Trip</option>
                                <option class="cus-select"  value="bagan">Bagan </option>
                                <option class="cus-select" value="dawei">Dawei</option>
                                <option class="cus-select" value="ngapali">NgaPali</option>
                                <option class="cus-select" value="myitkyina">MyitKyiNa</option>
                            </select>

                            @error("trip")
                            <div class="text-danger invalid-feedback">{{$message}}</div>
                            @enderror
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
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <select class="custom-select @error("hour") is-invalid @enderror" name="hour" >
                                <option class="cus-select" selected disabled>Hour</option>
                                <option class="cus-select"  value="1">1</option>
                                <option class="cus-select"  value="2">2</option>
                                <option class="cus-select"  value="3">3</option>
                                <option class="cus-select"  value="4">4</option>
                                <option class="cus-select"  value="5">5</option>
                                <option class="cus-select"  value="6">6</option>
                                <option class="cus-select"  value="7">7</option>
                                <option class="cus-select"  value="8">8</option>
                                <option class="cus-select"  value="9">9</option>
                                <option class="cus-select"  value="10">10</option>
                                <option class="cus-select"  value="11">11</option>
                                <option class="cus-select"  value="12">12</option>
                            </select>
                            @error("hour")
                            <div class="text-danger invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <select class="custom-select @error("minute") is-invalid @enderror" name="minute" >
                                <option value="" selected disabled class="cus-select">Minute</option>
                                <option class="cus-select"  value=":10:">10</option>
                                <option class="cus-select"  value=":15:">15</option>
                                <option class="cus-select"  value=":20:">20</option>
                                <option class="cus-select"  value=":25:">25</option>
                                <option class="cus-select"  value=":30:">30</option>
                                <option class="cus-select"  value=":35:">35</option>
                                <option class="cus-select"  value=":40:">40</option>
                                <option class="cus-select"  value=":45:">45</option>
                                <option class="cus-select"  value=":50:">50</option>
                                <option class="cus-select"  value=":55:">55</option>
                                <option class="cus-select"  value=":00:">00</option>

                            </select>
                            @error("minute")
                            <div class="text-danger invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <select class="custom-select @error("dp") is-invalid @enderror" name="dp" >
                                <option selected disabled >Select AM or PM</option>
                                <option class="cus-select"  value="AM">AM</option>
                                <option class="cus-select" value="PM">PM</option>
                            </select>

                            @error("dp")
                            <div class="text-danger invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 traveling-box">
                            <div class="read-more">
                                <button type="submit" class="read-more">Booking Now</button>
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
                    <h2 style="color:#6b4701;">About  our travel agency</h2>
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
                        <p> <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure thereThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span></p>
                        <div class="palne-img-area">
                            <img src="{{asset("data/images/plane-img.png")}}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#">Read More</a>
    </div>
</div>
<!-- end about -->
<!-- traveling -->
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
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="{{asset("data/icon/travel-icon.png")}}" alt="icon"/></i>
                    <h3>Different Countrys</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="read-more">
                        <a  href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="{{asset("data/icon/travel-icon2.png")}}" alt="icon"/></i>
                    <h3>Mountains Tours</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="read-more">
                        <a  href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="{{asset("data/icon/travel-icon3.png")}}" alt="icon"/></i>
                    <h3>Bus Tours</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="read-more">
                        <a  href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="{{asset("data/icon/travel-icon4.png")}}" alt="icon"/></i>
                    <h3>Summer Rest</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="read-more">
                        <a  href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end traveling -->
<!--London -->
<div class="London">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Weekend in Bagan</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="London-img">
            <figure><img src="{{asset("data/images/bagan.jpg ")}}" style="width: 100%;height: 40%" alt="img"></figure>
        </div>
    </div>
</div>
<!-- end London -->
<!--Tours -->
<div class="Tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>The Best Tours</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                </div>
            </div>
        </div>
        <section id="demos">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/1.jpg")}}" alt="#" />
                            <h3>Holiday Tour</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/2.jpg")}}" alt="#" />
                            <h3>New York</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/3.jpg")}}" alt="#" />
                            <h3>London</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{asset("data/images/2.jpg")}}" alt="#" />
                            <h3>Holiday Tour</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end Tours -->
<!-- Amazing -->
<div class="amazing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="amazing-box">
                        <h2>Amazing London Tour</h2>
                        <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span>
                   @guest
                            <a href="{{route("login")}}">Book Now</a><a href="{{route('bagan')}}">Get More</a>

                        @else
                            <a href="{{route("user.booknow")}}">Book Now</a><a href="{{route('bagan')}}">Get More</a>

                        @endguest

                    </div>


            </div>
        </div>
    </div>
</div>
<!-- end Amazing -->
<!-- our blog -->
<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Blog</h2>
                    <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-box">
                    <figure><img src="{{asset("data/images/blog-image0.jpg")}}" alt="#"/>
                        <span>4 Feb 2019</span>
                    </figure>
                    <div class="travel">
                        <span>Post  By :  Travel  Agency</span>
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                    </div>
                    <h3>London Amazing Tour</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-box">
                    <figure><img src="{{asset("data/images/blog-image.jpg")}}" alt="#"/>
                        <span>10 Feb 2019</span>
                    </figure>
                    <div class="travel">
                        <span>Post  By :  Travel  Agency</span>
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                    </div>
                    <h3>London Amazing Tour</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end our blog -->
<!-- footer -->
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
                        <span>UCSL <br>Loikaw<br>
                        BURMA<br>
                        +959 767381581</span>
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
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" name="cname" placeholder="Name" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" name="cemail" placeholder="Email" type="text">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" name="cmessage" placeholder="comment" type="text">Comment</textarea>
                                </div>
                            </div>
                            <button class="Subscribe">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; 2023   <small>created By Team 3</small></p>

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
