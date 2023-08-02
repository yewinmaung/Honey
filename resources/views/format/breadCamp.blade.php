
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
                    <div class="">
                        <ol class="breadcrumb w-100">
                            <li class="breadcrumb-item"><a href="{{route("home")}}" class="owncol">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('user.ticket')}}" class="owncol">Your Ticket</a></li>
                            <li class="breadcrumb-item active">@yield("abc")</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>


