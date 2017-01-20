@extends('layouts.master')

@section('title', 'dMaverick - About')

@section('body')
    <section id="about-us">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>About dMaverick Intelligence</h2>
                <p class="lead">Imagine…One touch on your tablet and the movie starts, your shades close and the surround sound kicks in at the perfect volume. When the sun goes down, your porch light turns on. The whole house locks at 11 p.m. automatically.
    You rush out with the kids to drop them off at school. By the time you get to the office you wonder, “Did I close the garage door?” Simply check from your smartphone and relax.
    Imagine living in a home that obeys your every command...where virtually every device and system can be controlled remotely and fully automated. You can use your tablet to control your home theater, dim the lights, lock the doors, turn up the heat and arm the alarm. Or your smartphone to do the same from not just anywhere in your house—but from anywhere in the world. 
    Welcome to dMaverick Intelligence, a smart automation solution for homes and businesses that makes it easy for you to intelligently control every aspect of your home—from TVs to thermostats, door locks to drapes—no matter where you are, using one simple-to-use interface. We make your life more comfortable, more efficient and more secure.
    Best of all, dMaverick Intelligence gives you the power of technology to personalize your home or business with the automation system of your dreams—all within your budget.

                </p>
            </div>
            
            <!-- about us slider -->
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/about/about-us.jpg" class="img-responsive" alt=""> 
                        </div>
                        {{-- <div class="item">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                        </div> 
                        <div class="item">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                        </div>  --}}
                    </div>
                    
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->
            
            {{-- <div class="center wow fadeInDown">
                <h2>Vision Statement</h2>
                <p class="lead">To create new value with passion, our vision is to excite and delight our clients by conforming intelligence for a better lifestyle.
                </p>
            </div>

            <div class="center wow fadeInDown">
                <h2>Mission Statement</h2>
                <p class="lead">Clients are the highest priority. Our mission is to achieve operational excellence through superior customer service, innovation, quality and commitment.
                </p>
            </div>

            <div class="center wow fadeInDown">
                <h2>Core Values</h2>
                <p class="lead">We are a Culture, driven by the performance with metrics to ensure continuous melioration. We value integrity, creativity, customer focus and respect highly motivated and the maverick people with ample team spirit.
                </p>
            </div> --}}
            
            <!-- Our Skill -->
            <div class="skill-wrap clearfix">
            
                <div class="center wow fadeInDown">
                    <h2>Our Skill</h2>
                    <p class="lead">dMaverick Intelligence offers various building and hotel automation services to serve <br>
                    client’s requirements and have the in-house expertise to deliver the project with given timeline.</p>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="joomla-skill">                                   
                                <p><em>85%</em></p>
                                <p>Building Automation System</p>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="html-skill">                                  
                                <p><em>95%</em></p>
                                <p>Interior <br> Design</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="css-skill">                                    
                                <p><em>80%</em></p>
                                <p>Hotel Automaiton</p>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                            <div class="wp-skill">
                                <p><em>90%</em></p>
                                <p>Commercial Automation</p>                                     
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div><!--/.our-skill-->
            

            <!-- our-team -->
            <div class="team">
                <div class="center wow fadeInDown">
                    <h2>Team of dMaverick Intelligence</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">	
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/about/ceo.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Talha Ibn Jafar</h4>
                                    <h5>Founder and Chief Executive Officer</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="https://www.facebook.com/talhadastone">Facebook</a></li>
                                        <li class="btn"><a href="https://www.twitter.com/talhadastone">Twitter</a></li>
                                        <li class="btn"><a href="https://www.linkedin.com/in/talha-ibn-jafar-b403374b?trk=nav_responsive_tab_profile">LinkedIn</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    
                                    <ul class="social_icons">
                                        <li><a href="https://www.facebook.com/talhadastone"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/talhadastone"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="https://www.linkedin.com/in/talha-ibn-jafar-b403374b?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin-square"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!--/.col-lg-4 -->
                    
                    
                    <div class="col-md-4 col-sm-6 col-md-offset-2">	
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/about/dir-finance.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Muhammed Naim Musa Mazumder</h4>
                                    <h5>Director, Finance</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="https://www.facebook.com/muhammed.mazumder"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!--/.col-lg-4 -->					
                </div> <!--/.row -->
                <div class="row team-bar">
                    <div class="first-one-arrow hidden-xs">
                        <hr>
                    </div>
                    <div class="first-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="second-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="third-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="fourth-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                </div> <!--skill_border-->       

                <div class="row clearfix">   
                    <div class="col-md-4 col-sm-6 col-md-offset-2">	
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/about/dir-engineering.png" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <h4>Engr. Shamsul Arafin Rad</h4>
                                    <h5>Director, Engineering</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="https://www.facebook.com/arafin.rad?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="https://www.linkedin.com/in/shamsul-arafin-5b6b44b0?authType=NAME_SEARCH&authToken=hzr9&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A396977754%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1484053021738%2Ctas%3Ashamsul%20"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/about/dir-business.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Adnan Rahman</h4>
                                    <h5>Director, Business Development</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="https://www.facebook.com/adnan.rahman.5454?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>	<!--/.row-->
            </div><!--section-->
        </div><!--/.container-->
    </section><!--/about-us-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
@endsection