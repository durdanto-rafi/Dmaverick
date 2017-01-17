<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +88 01710 255581</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
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
                    </div>
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
                <a class="navbar-brand" href="{{route('index')}}"><img src="images/logo.png" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                        <a href="{{route('about-us')}}">About Us</a>
                    </li>
                    <li class="{{ Request::is('services') ? 'active' : '' }}">
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li class="{{ Request::is('portfolio') ? 'active' : '' }}">
                        <a href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sister Concerns <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-item.html">Instance International Limited</a></li>
                            <li><a href="http://www.facebook.com/Antarik-Travel-International-210590119032726/?ref=bookmarks">Antarik Travel International</a></li>
                            <li><a href="http://www.facebook.com/dMaverickBlood">dMaverick Blood Foundation</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
                        <a href="{{route('contact-us')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->