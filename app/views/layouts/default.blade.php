<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Life Talk Club</title>

    <!-- core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/prettyPhoto.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/responsive.css') }}
    {{ HTML::style('css/form.css') }}
    {{ HTML::style('css/token-input.css') }}
    {{ HTML::style('packages/eternicode/bootstrap-datepicker/css/datepicker3.css') }}


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +27 613 861 287</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <!-- <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div> -->
                    <!-- SIGN IN -->
                    @if(!Auth::check())
                    <div class="pull-right nav signin-dd">
                        <a class="quick_sign_in" id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
                        <div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

                            <h4>Sign In</h4>
                            <form action="/users/login" method="post" role="form">

                                <div class="form-group"><!-- email -->
                                    <input class="form-control" placeholder="Username or email" name="username" type="text">
                                </div>

                                <div class="input-group">

                                    <!-- password -->
                                    <input  class="form-control" placeholder="Password" name="password" type="password">

                                    <!-- submit button -->
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Sign In</button>
                                    </span>

                                </div>

                                <div class="checkbox"><!-- remmember -->
                                    <label>
                                        <input type="checkbox"> Remember me &bull; <a class="forgot" href="password">Forgot password?</a>
                                    </label>
                                </div>

                            </form>

                            <hr />

                            <p class="bottom-create-account">
                                <a href="/members/signup" class="quick_sign_in">Create Account</a>
                            </p>
                        </div>
                    </div>
                    @else

                    <div class="pull-right nav signin-dd">
                        <a class='quick_sign_in' id="quick_sign_in" href="#" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Welcome, {{ Auth::user()->firstname }} {{Auth::user()->surname }}  </span></a>
                        <div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

                            <h4>Profile</h4>
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                 <div class="pull-left">
                                    <a href="/user/account" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">

                            </li>
                        </div>
                    </div>
                    @endif
                    <!-- /SIGN IN -->
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="about">Life Talk Club</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="/">Home</a></li>
                        <li {{ (Request::is('about') ? 'class="active"' : '') }}><a href="/about">About Us</a></li>
                        <li {{ (Request::is('members') ? 'class="active"' : '') }}><a href="/members">Members</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Partners</a></li>
                        <li  {{ (Request::is('contact') ? 'class="active"' : '') }}><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->



        @yield('content')

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" href="#" title="">Life Talk Club</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/jquery.prettyPhoto.js') }}
    {{ HTML::script('js/jquery.isotope.min.js') }}
    {{ HTML::script('js/jquery.easing.js') }}
    {{ HTML::script('js/jquery.tokeninput.js') }}
    {{ HTML::script('packages/eternicode/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/wow.min.js') }}

</body>
</html>
