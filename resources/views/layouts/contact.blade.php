<!DOCTYPE html>
<html>

<head>
    <title>Pantera | Contact</title>
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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

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
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--contact-start-->
<div class="contact">
    <div class="container">
        <div class="contact-top heading">
            <h2>CONTACT</h2>
        </div>
        <div class="contact-text">
            <div class="col-md-3 contact-left">
                <div class="address">
                    <h5>Address</h5>
                    <p>The company name,
                        <span>Lorem ipsum dolor,</span>
                        Glasglow Dr 40 Fe 72.</p>
                </div>
                <div class="address">
                    <h5>Address1</h5>
                    <p>Tel:1115550001,
                        <span>Fax:190-4509-494</span>
                        Email: <a href="mailto:example@email.com">contact@example.com</a></p>
                </div>
            </div>
            <div class="col-md-9 contact-right">
                <form>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Phone">
                    <input type="text"  placeholder="Email">
                    <textarea placeholder="Message" required=""></textarea>
                    <div class="submit-btn">
                        <input type="submit" value="SUBMIT">
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--contact-end-->
<!--map-start-->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
</div>
<!--map-end-->
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
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>New Products</p></a></li>
                    <li><a href="#"><p>Our Stores</p></a></li>
                    <li><a href="contact.html"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>My Credit slips</p></a></li>
                    <li><a href="#"><p>My Merchandise returns</p></a></li>
                    <li><a href="#"><p>My Personal info</p></a></li>
                    <li><a href="#"><p>My Addresses</p></a></li>
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
                <p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
</html>
