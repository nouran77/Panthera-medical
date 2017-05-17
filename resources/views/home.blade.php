<!DOCTYPE html>
<html>

<head>
    <title>Pantera | Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/skitter/skitter.css') }}"/>
    <!--Custom-Theme-files-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--start-menu-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/skitter/jquery.skitter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/skitter/jquery.easing.1.3.js') }}"></script>
    <style>
        #register-btn, #login-btn {
            background-color: #50A397;
            color: #fff;
        }
        #register-btn:hover{
            background-color: #a1a1a1 ;   }
        #login-btn:hover{
            background-color: #a1a1a1 ;
        }
    </style>
</head>

<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label">English</option>
                            <option value="1">عربي</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <button type="button" name="button" class="register-btn" data-toggle="modal" data-target="#register-modal">Register</button>
                    <button type="button" name="button" class="login-btn" data-toggle="modal" data-target="#login-modal">Login</button>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--=================================
=            Register Modal            =
==================================-->
<div class="modal fade" id="register-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" style="color: #5c5d5d;">Welcome to Panthera<i class="fa fa-smile"></i></h4>
            </div>
            <div class="modal-body clearfix">
                <div class="col-xs-12">
                    <form method="POST" id="register-form">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="hidden" name="type" value="user">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail Address">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-6 pl-0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Register" class="btn btn-block" id="register-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====  End of Register Modal  ====-->
<!--=================================
=            Login Modal            =
==================================-->
<div class="modal fade" id="login-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" style="color: #5c5d5d;">Welcome Back<i class="fa fa-smile"></i></h4>
            </div>
            <div class="modal-body clearfix">
                <div class="col-xs-12">
                    <form action="#" method="POST" id="login-form">
                        {{ csrf_field() }}
                        <div class="alert alert-danger" style="display: none;" id="alert" role="alert">
                            <ul></ul>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
									<span class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </span>
                                <input type="email" name="email" class="form-control" placeholder="E-mail Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
									<span class="input-group-addon">
                <i class="fa fa-lock"></i>
                </span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Keep me logged in
                                </label>
                                <a href="#" class="text-primary pull-right">Forgot Password?!</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="login-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====  End of Login Modal  ====-->

<!--start-logo-->
<div class="logo">
    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Panthera"></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li class="grid"><a href="{{ url('products') }}">Products</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <ul>
                                            <li><a href="{{ url('products') }}">Wheelchairs</a></li>
                                            <li><a href="{{ url('products') }}">Crutches</a></li>
                                            <li><a href="{{ url('products') }}">Strollers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <ul>
                                            <li><a href="{{ url('products') }}">Medical Gloves</a></li>
                                            <li><a href="{{ url('products') }}">Thermometer</a></li>
                                            <li><a href="{{ url('products') }}">Blood Pressure Monitor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="{{ url('about-us') }}">About us</a>
                        </li>
                        <li class="grid"><a href="{{ url('contact-us') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
<!--banner-starts-->
<div class="skitter skitter-large" id="home" style="width: 1200px; height: 370px;">
    <div id="top">
        <ul>
            <li>
                <img src="{{ asset('images/bnr-1.jpg') }}" class="cut" alt="" />
                <div class="label_text"></div>
            </li>
            <li>
                <img src="{{ asset('images/bnr-2.jpg') }}" class="swapBlocks" alt="" />
                <div class="label_text"></div>
            </li>
            <li>
                <img src="{{ asset('images/bnr-3.jpg') }}" class="swapBarsBack" alt="" />
                <div class="label_text"></div>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
{{--<script src="{{ asset('js/responsiveslides.min.js') }}"></script>--}}

{{--<script>--}}
{{--// You can also use "$(window).load(function() {"--}}
{{--$(function() {--}}
{{--// Slideshow 4--}}
{{--$("#slider4").responsiveSlides({--}}
{{--auto: true,--}}
{{--pager: true,--}}
{{--nav: true,--}}
{{--speed: 500,--}}
{{--namespace: "callbacks",--}}
{{--before: function() {--}}
{{--$('.events').append("<li>before event fired.</li>");--}}
{{--},--}}
{{--after: function() {--}}
{{--$('.events').append("<li>after event fired.</li>");--}}
{{--}--}}
{{--});--}}

{{--});--}}
{{--</script>--}}
<script>
    $(document).ready(function() {
        $(".skitter-large").skitter({
            auto_play: true,
            interval: 1000
        });
    });
</script>
<!--End-slider-script-->
<!--about-starts-->
{{--<div class="about">--}}
{{--<div class="container">--}}
{{--<div class="about-top grid-1">--}}
{{--<div class="col-md-4 about-left">--}}
{{--<figure class="effect-bubba">--}}
{{--<img class="img-responsive" src="{{ asset('images/1.png') }}" alt="" />--}}
{{--<figcaption>--}}
{{--<h2>Check our Products</h2>--}}
{{--<p>In sit amet sapien eros Integer dolore magna aliqua</p>--}}
{{--</figcaption>--}}
{{--</figure>--}}
{{--</div>--}}
{{--<div class="col-md-4 about-left">--}}
{{--<figure class="effect-bubba">--}}
{{--<img class="img-responsive" src="{{ asset('images/4.png') }}" alt="" />--}}
{{--<figcaption>--}}
{{--<h4>Check our Products</h4>--}}
{{--<p>In sit amet sapien eros Integer dolore magna aliqua</p>--}}
{{--</figcaption>--}}
{{--</figure>--}}
{{--</div>--}}
{{--<div class="col-md-4 about-left">--}}
{{--<figure class="effect-bubba">--}}
{{--<img class="img-responsive" src="{{ asset('images/5.png') }}" alt="" />--}}
{{--<figcaption>--}}
{{--<h4>Check our Products</h4>--}}
{{--<p>In sit amet sapien eros Integer dolore magna aliqua</p>--}}
{{--</figcaption>--}}
{{--</figure>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!--about-end-->--}}

<!--product-starts-->
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="{{ url('product-details') }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/28.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/7.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/2.png') }}"  alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/1.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="product-one">
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="{{ url('product-details') }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/23.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/22.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/33.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{ asset('images/panthera/18.jpg') }}" alt="" /></a>
                        <div class="product-bottom">
                            <h3>Smart Watches</h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                        </div>
                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="product">
    <div class="container">
        <h2 style="color: #5c5d5d; text-decoration: underline #50A397; padding-left: 10px;">About Panthera</h2><br>
        <div class="col-md-11">
            <p align="left" style="font-size: large; color: #5c5d5d;" class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Panthera Medical's Company established in August 2013 in Egypt that specializes in importing medical equipments and disposables products.
                The capital budgeting in 2013 was around 80.000$ eighty thousand dollar
            </p>
            <p align="left" style="font-size: large; color: #5c5d5d;" class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                The capital budgeting in 2013 was around 80.000$ eighty thousand dollar.
            </p>
            <p align="left" style="font-size: large; color: #5c5d5d;" class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                In 2013 Panthera Medical company Imported Wheelchair, Crutch, stick and walker from China (Foshan Dayang Candy Company).

            </p>
            <p align="left" style="font-size: large;">
                <a href="{{ url('about-us') }}">more...</a>
            </p>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<!--product-end-->
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>
<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li>
                        <a href="#">
                            <p>Specials</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>New Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Our Stores</p>
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <p>Contact Us</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Top Sellers</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li>
                        <a href="account.html">
                            <p>My Account</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>My Credit slips</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>My Merchandise returns</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>My Personal info</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>My Addresses</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2017 Panthera. All Rights Reserved  <a href="http://w3layouts.com/" target="_blank"></a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/memenu.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".memenu").memenu();
    });
</script>
<!--dropdown-->
<script src="{{ asset('js/jquery.easydropdown.js') }}"></script>
<script src="{{ asset('js/simpleCart.min.js') }}"></script>

<script>
    $("form#register-form").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            url: 'register',
            data: $(this).serialize(),
            type: "POST",
            success: function (response) {
//                    console.log(response);
                window.location = response.url;
            },
            error: function (response) {
                var errors = response.responseJSON;
                $.each(errors, function (name, error) {
                    $(form + " input[name='" + name + "']").parents('.form-group').addClass('has-error').append("<p class='text-danger error'>" + error + "</p>");
                });

                $('p.error').delay(2000).slideUp();
            },
            beforeSend: function () {

            }
        });
    });
    $("form#login-form").on("submit", function(event) {
        event.preventDefault();

        $.ajax({
            url: 'login',
            type: 'POST',
            data: $(this).serialize(), _token: '{{ csrf_token() }}',
            success: function(response) {
                if (response.success) {
                    window.location =response.url;
                }
            },
            error: function(response) {
                console.log(response);
                var errors = response.responseJSON;
                $("#alert ul").empty();
                $.each(errors, function(name, error) {
                    $("#alert ul").append("<li>"+error[0]+"</li>");
                    $("#alert").show();
                });
                $("#alert").delay(2000).slideUp();
            },
            beforeSend: function() {

            }
        });
    });
</script>


</body>

</html>
