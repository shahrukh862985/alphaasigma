<!doctype html>
<html class="no-js" lang="en">
<head>
        <title>AlphaaSigma | Home Page</title>
        <meta name="description" content="AlphaaSigma">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ShahrukhKhan">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('site-asset/img/logo.png')}}">
        <link rel="apple-touch-icon" href="{{asset('site-asset/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('site-asset/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('site-asset/images/apple-touch-icon-114x114.png')}}">
        <!-- animation --> 
        <link rel="stylesheet" href="{{asset('site-asset/css/animate.css')}}" />
        <!-- bootstrap --> 
        <link rel="stylesheet" href="{{asset('site-asset/css/bootstrap.css')}}" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{asset('site-asset/css/et-line-icons.css')}}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{asset('site-asset/css/font-awesome.min.css')}}" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{asset('site-asset/css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{asset('site-asset/css/owl.transitions.css')}}" />
        <link rel="stylesheet" href="{{asset('site-asset/css/full-slider.css')}}" />
        <!-- text animation -->
        <link rel="stylesheet" href="{{asset('site-asset/css/text-effect.css')}}" />
        <!-- common -->
        <link rel="stylesheet" href="{{asset('site-asset/css/style.css')}}" />
        <!-- responsive -->
        <link rel="stylesheet" href="{{asset('site-asset/css/responsive.css')}}" />
        <link rel="stylesheet" href="{{asset('site-asset/css/custom-style.css')}}" />
        <!--[if IE]>
            <link rel="stylesheet" href="{{asset('site-asset/css/style-ie.css')}}" />
        <![endif]-->
        <!--[if IE]>
            <script src="{{asset('site-asset/js/html5shiv.js')}}"></script>
        <![endif]-->
        @livewireStyles
    </head>
    <body>
        
            
        
        <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom no-transition" role="navigation">
            <marquee behavior="" direction="rtl" onmouseover="this.stop()" onmouseout="this.start()" class="text-uppercase">warning: this product contains nicotine. nicotine is an addictive chemical.</marquee>
            <div class="container">
                
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-3 col-sm-3 col-xs-6"><a class="logo-light" href="{{route('home')}}"><img alt="" src="{{asset('site-asset/img/logo.png')}}" class="logo" /></a><a class="logo-dark" href="{{route('home')}}"><img alt="" src="{{asset('site-asset/img/logo.png')}}" class="logo" /></a></div>
                    <!-- end logo -->
                    <!-- toggle navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <!-- end toggle navigation -->
                    <div class="col-md-9 text-right">
                        <div class="navbar-collapse collapse">
                            <!-- main menu -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#myCarousel" class="inner-link">Home</a> </li>
                                <li><a href="#products" class="inner-link">Products</a> </li>
                                <li><a href="#new-falvour" class="inner-link">New Flavour</a> </li>
                                {{-- <li><a href="#about" class="inner-link">About</a> </li> --}}
                                <li><a href="#verifyproduct" class="inner-link">Verify Product</a></li>
                                <li><a href="#contact-us" class="inner-link">Contact</a></li>
                            </ul>
                            <!-- end main menu -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation panel -->
        <!-- slider -->
        <section id="myCarousel" class="carousel slide carousel-slide carousel-slide-main">
            <!-- slider indicators -->
            <ol class="carousel-indicators xs-indicators-black" style="margin-bottom: -15px">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <!-- end slider indicators -->
            <!-- slider images -->
            <div class="carousel-inner">
                <!-- slider item -->
                <div class="item active full-screen">
                    <!-- Set the first background image using inline CSS below. -->
                    <img src="{{asset('site-asset/img/slide-4.jpg')}}" alt="" srcset="" class="img-responsive">
                    {{-- <div class="fill" style="background-image:url('{{asset('site-asset/img/slide-4.jpg')}}');"></div> --}}
                    {{-- <div class="opacity-light bg-white display-none xs-display-block"></div> --}}
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item full-screen">
                    <!-- Set the first background image using inline CSS below. -->
                    <img src="{{asset('site-asset/img/slide-20.jpg')}}" alt="" srcset="" class="img-responsive">
                    {{-- <div class="fill" style="background-image:url('{{asset('site-asset/img/slide-new.jpg')}}');"></div> --}}
                    {{-- <div class="opacity-light bg-white display-none xs-display-block"></div> --}}
                </div>
                <!-- end slider item -->
               
            </div>
            <!-- slider controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <img src="{{asset('site-asset/images/arrow-pre.png')}}" alt="" /> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <img src="{{asset('site-asset/images/arrow-next.png')}}" alt="" /> </a>
            <!-- end slider controls -->
        </section>
        <!-- end slider -->
        <section id="products" class="features approach  animate slow-mo even fadeIn no-padding-bottom xs-onepage-section" data-anim-type="fadeIn" data-anim-delay="200">
            <!-- slider --> 
            <div id="myCarousel3" class="carousel slide carousel-slide"> 
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-md-12 text-center">
                            <h3 class="section-title no-padding-bottom">Our Products</h3>
                        </div>
                        <!-- end section title -->
                    </div>
                    <div class="carousel-inner margin-seven no-margin-bottom">
                        <!-- slider item -->
                        <div class="item active"> 
                            <div class="row">
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten p-2">
                                    <div class="border product-card">
                                        <img src="{{asset('site-asset/img/product-14.jpg')}}" class="img-fluid" alt="" srcset="">
                                        <h2>Caribbean Mix</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                        <img src="{{asset('site-asset/img/product-2.jpg')}}" class="img-fluid" alt="" srcset="">
                                        <h2>fatty patty</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                        <img src="{{asset('site-asset/img/product-3.jpg')}}" class="img-fluid" alt="" srcset="">
                                        <h2>fairy floss</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item"> 
                            <div class="row">
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten">
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-4.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>Pink Lemonade</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-5.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>frozen lush</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-6.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>ram</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item"> 
                            <div class="row">
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten">
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-7.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>red heaven</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-8.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>Summer</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten">
                                    <div class="border product-card"> 
                                    <img src="{{asset('site-asset/img/product-9.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>strawnana</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item"> 
                            <div class="row">
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten">
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-10.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>russian king</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-11.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>zesty</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                                <!-- features item -->
                                <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten"> 
                                    <div class="border product-card">
                                    <img src="{{asset('site-asset/img/product-12.jpg')}}" class="img-fluid" alt="" srcset="">
                                    <h2>tropical blue</h2>
                                    </div>
                                </div>
                                <!-- end features item -->
                            </div>
                        </div>
                        <!-- end slider item -->
                    </div>
                </div>
                <!-- slider controls --> 
                <a class="left carousel-control" href="#myCarousel3" data-slide="prev"> <img src="{{asset('site-asset/images/arrow-pre.png')}}" alt=""/> </a> <a class="right carousel-control" href="#myCarousel3" data-slide="next"> <img src="{{asset('site-asset/images/arrow-next.png')}}" alt=""/> </a>
                <!-- end slider controls --> 
            </div>
            <!-- end slider --> 
        </section>

        {{-- <section id="about" class="features animate slow-mo even fadeIn no-padding-bottom xs-onepage-section" data-anim-type="fadeIn" data-anim-delay="200">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">About H-Code</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <!-- features grid -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">01</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">01</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">We are digital<br>media agency.</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">Lorem Ipsum is dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage xs-margin-top-ten">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">02</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">02</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">We work hard<br>and play hard.</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">Lorem Ipsum is dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage xs-margin-top-ten">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">03</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">03</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">We are leaders,<br>not followers.</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">Lorem Ipsum is dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- end features grid -->
                </div>
            </div>
        </section> --}}
        <!-- services section -->
        <section id="new-falvour" style="padding-top: 50px" class="corporate-standards no-padding-bottom wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom">New Flavor List</h3>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
            <div class="container margin-five no-margin-bottom no-padding">
                <div class="row">
                    <!-- tab -->
                    <div class="col-lg-12 col-md-12 center-col" >
                        <img src="{{asset('site-asset/img/slide-2.jpg')}}" class="img-responsive" alt="" srcset="">
                    </div>

                    {{-- <div class="col-lg-6 col-md-6 no-padding corporate-standards-img cover-background position-relative" style="background-image:url({{ URL::asset('site-asset/img/new-flavor.png') }});">
                        <div class="opacity-light bg-dark-gray"></div>
                        <p class="text-uppercase corporate-standards-title white-text letter-spacing-7"><span class="title-extra-large no-letter-spacing yellow-text">01</span><br>Cola Ice</p>
                    </div> --}}
                    {{-- <div class="col-lg-6 col-md-6 no-padding corporate-standards-img cover-background position-relative" style="background-image:url({{ URL::asset('site-asset/img/product-12.jpg') }});">
                        <div class="opacity-light bg-dark-gray"></div>
                        <p class="text-uppercase corporate-standards-title white-text letter-spacing-7"><span class="title-extra-large no-letter-spacing yellow-text">02</span><br>tropical blue</p>
                    </div> --}}
                    {{-- <div class="col-lg-6 col-md-6 corporate-standards-text sm-margin-lr-four sm-margin-top-four xs-padding-tb-ten">
                        <div class="img-border-small-fix border-gray"></div>
                        <i class="icon-picture large-icon yellow-text"></i>
                        <h1 class="margin-ten no-margin-bottom">Cola ice</h1>
                        <p class="text-med margin-ten width-80 center-col"></p>
                        
                    </div> --}}
                    <!-- end tab -->
                </div>
            </div>
        </section>
        <!-- end services section -->

        <section id="verifyproduct" class="grid-wrap work-4col border-top no-padding-bottom xs-onepage-section">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center no-padding">
                        <h3 class="section-title" style="padding: 0px">Verify Product</h3>
                    </div>
                    <!-- end section title -->
                </div>
                
                @livewire('front.verify')
            </div>
        </section>
        
        <section id="contact-us" class="xs-onepage-section" style="padding-top: 50px;padding-boottom: 50px">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center no-padding">
                        <h3 class="section-title" style="padding-bottom: 20px">Contact Us</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <div class="col-md-9 text-center center-col">
                        <div class="col-md-4 col-sm-4 text-center"></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom"><a href="mailto:jdistrollc@gmail.com" class="black-text">jdistrollc@gmail.com</a></h6><div>
                        <div class="col-md-4 col-sm-4 text-center"></div>
                    </div>
                </div>
                
                @livewire('front.contact')
            </div>
        </section>
        
        <!-- footer -->
        <footer>
            <div class="container onepage-footer-middle">
                <div class="row">
                    <div class="col-md-10 col-sm-12 text-center center-col">
                        <h3 class="footer-warning-h">Alphaa Sigma stand firms against the access of Alphaa Sigma stick to minors. The sale of tobacco products to minor is prohibited by law.</h3>
                        <p class="footer-warning"><b>Warning</b>: This product contains nicotine. Nicotine is an addictive chemical.</p>
                        <p class="footer-warning"><b>California Proposition 65 Warning</b>: This product can expose you to chemicals including formaldehyde, which is known to the State of California to cause cancer, and nicotine, which is known to the State of California to cause birth defects or other reproductive harm. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark-gray footer-bottom">
                <div class="container">
                    <div class="row margin-one">
                        <!-- copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one" style="margin-top: 5px;">
                                2020 © Copyright | Powered by <a href="https://www.alphaasigma.com">Alphaasigma</a> | All Rights Reserved
                        </div>
                        <!-- end copyright -->
                        <!-- logo -->
                        <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                            <a href="{{route('home')}}"><img src="{{asset('site-asset/img/logo.png')}}" alt=""/></a>
                        </div>
                        <!-- end logo -->
                    </div>

                </div>
            </div>
            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->

<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="ageVerify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="myModalLabel">Age Verification</h4>
        </div>
        <div class="modal-body text-center">
          <p class="text-center">By Clicking Button you Verify that you are over 21 years old.</p>
          <button id="agreeButton">Yes I'm</button>
        </div>
      </div>
    </div>
  </div>

        <!-- javascript libraries / javascript files set #2 --> 
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('site-asset/js/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{asset('site-asset/js/bootstrap.js')}}"></script> 
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.easing.1.3.js')}}"></script> 
        <script type="text/javascript" src="{{asset('site-asset/js/skrollr.min.js')}}"></script>  
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.viewport.mini.js')}}"></script>  
        <script type="text/javascript" src="{{asset('site-asset/js/smooth-scroll.js')}}"></script>
        <!-- jquery appear -->
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.appear.js')}}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{asset('site-asset/js/wow.min.js')}}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{asset('site-asset/js/page-scroll.js')}}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.parallax-1.1.3.js')}}"></script>
        <!-- owl slider  -->
        <script type="text/javascript" src="{{asset('site-asset/js/owl.carousel.min.js')}}"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="{{asset('site-asset/js/text-effect.js')}}"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('site-asset/js/jquery.revolution.js')}}"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="{{asset('site-asset/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- hamburger menu-->
        <script type="text/javascript" src="{{asset('site-asset/js/classie.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('site-asset/js/hamburger-menu.js')}}"></script> --}}
        <!-- one page navigation --> 
        <script type="text/javascript" src="{{asset('site-asset/js/one-page-main.js')}}"></script>
        <!-- setting --> 
        <script type="text/javascript" src="{{asset('site-asset/js/main.js')}}"></script>
        <script>
            $(document).ready(function(){
                if(!localStorage.getItem('verify'))
                {
                    $('#ageVerify').modal('show'); 
                }
            })
            $(document).on('click','#agreeButton',function(){
                $('#ageVerify').modal('hide');
                localStorage.setItem('verify',"yes");
            })
        </script>
        @livewireScripts
        
    </body>
</html>