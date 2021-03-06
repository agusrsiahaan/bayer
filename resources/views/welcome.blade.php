<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bayer Plus</title>

        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/vendor.css') }}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"> -->
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/landing.css') }}">

        <style type="text/css">
           
        </style>

        <!--[if IE]>
            <script type="text/javascript">
                 var console = { log: function() {} };
            </script>
        <![endif]-->
        
    </head>
    <body>
        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        <div id="app">
            <div id="header">
                <div class="container-fluid">
                    <a class="brand brand-left" href="#">
                        <img class="img-responsive" src="/images/logo1.png">
                    </a>
                    <nav class="navbar">
                        <div class="container">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                           <!--  <a class="navbar-brand" href="#">
                                <img class="img-responsive" src="/images/logo1.png">
                            </a> -->
                          </div>
                          <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                              <li class="active"><a href="#">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Rewards</a></li>
                              <li><a href="#">FAQ</a></li>
                              <li><a href="#">Contact</a></li>
                            
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                              <li class="join"><a class="" href="#">JOIN</a></li>
                              <li class="signin"><a class="btn" href="#">SIGN IN</a></li>
                              <li class="upload-invoice"><a class="btn" href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> UPLOAD INVOICE</a></li>
                            </ul>
                          </div><!--/.nav-collapse -->

                        </div><!--/.container-fluid -->
                    </nav>

                     <a class="brand brand-right" href="#">
                        <img class="img-responsive" src="/images/logo2.png">
                    </a>
                </div>
            </div>

            <div id="fullpage">
                <div class="section first" id="section0">
                    <div class="container">
                        <div class="row intro">
                            <div class="col-md-12">
                                <div class="intro-title">
                                    <h1 class="is-animated">
                                        Bayer Global
                                    </h1>
                                    <h1 class="is-animated">
                                        Reward
                                    </h1>
                                    <h1 class="is-animated">
                                        Experience
                                    </h1>
                                </div>
                                <div class="intro-link">
                                    <!-- <a class="find-more" href="">FIND OUT MORE</a> -->
                                    <!-- <a class="find-more" href="">FIND OUT MORE <span class="icon-right"></span></a> -->

                                    <button class="find-more">FIND OUT MORE<span class="icon-right"></span><span class="icon-right after"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="divider">&nbsp;</div>
                            </div>
                        </div>
                        <div class="row tabs">
                            <div class="col-md-4">
                                <h2>Join Easily</h2>
                                Getting rewarded should be as simple as 1, 2, 3. Sign up in a snap. 
                            </div>
                            <div class="col-md-4">
                                <h2>Rack Up The Points</h2>
                                Watch the points rain in by just buying things you are already buying. 
                            </div>
                            <div class="col-md-4">
                                <h2>Redeem Goodies</h2>
                                Start baggin’ those good stuffs from electronics to more Bayer products for your business needs!
                            </div>
                        </div>

                    </div>
                    <div class="arrow bounce">
                      <a class="fa fa-arrow-down fa-2x" href="#"></a>
                    </div>
                </div>
                <div class="section second" id="section1">
                    <div class="container">
                        <div class="row intro is-animated">
                            <div class="intro-title text-center">
                                <h1>How Bayer Plus Works</h1>
                            </div>
                        </div>
                        <div class="row bayer-steps owl-carousel owl-theme">
                            <div class="step oc-item">
                                <img class="img-responsive" src="/images/step-1.png">
                                <h3>Snap a Picture</h3>
                                <p class="description">
                                    Snap a Picture
                                </p>
                            </div>
                            <div class="step oc-item">
                                <img class="img-responsive" src="/images/step-2.png">
                                <h3>Select Product</h3>
                                <p class="description">
                                    Select your desired item from the extensive list of products available
                                </p>
                            </div>
                            <div class="step oc-item">
                                <img class="img-responsive" src="/images/step-3.png">
                                <h3>Sit Back and Relax</h3>
                                <p class="description">
                                    Sit Back and Relax
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="arrow bounce">
                      <a class="fa fa-arrow-down fa-2x" href="#"></a>
                    </div>
                </div>
                <div class="section third" id="section2">
                    <div class="container">
                        <div class="row intro">
                            <div class="col-md-12">
                                <div class="intro-title">
                                    <h1 class="is-animated">
                                        Awesome
                                    </h1>
                                    <h1 class="is-animated">
                                        Benefits All
                                    </h1>
                                    <h1 class="is-animated">
                                        Your Around
                                    </h1>
                                </div>
                                <div class="intro-link">
                                    <!-- <a class="find-more" href="">FIND OUT MORE</a> -->
                                    <button class="find-more">FIND OUT MORE<span class="icon-right"></span><span class="icon-right after"></span></button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="divider">&nbsp;</div>
                            </div>
                        </div>

                        <div class="row benefits">
                            <div class="col-md-3">
                                <div class="icon">
                                    <img class="img-responsive" src="/images/benefit-1.png">
                                </div>
                                <p class="description">
                                    1 BD$ per $1 spent on every purchase
                                </p>
                            </div>
                            <div class="col-md-3">
                                <div class="icon">
                                    <img class="img-responsive" src="/images/benefit-2.png">
                                </div>
                                <p class="description">
                                    Up to 20x the points on orders on Bayer Promo Items
                                </p>
                            </div>
                            <div class="col-md-3">
                                <div class="icon">
                                    <img class="img-responsive" src="/images/benefit-3.png">
                                </div>
                                <p class="description">
                                    Enjoy welcome reward upon signing in for the first time
                                </p>
                            </div>
                            <div class="col-md-3">
                                <div class="icon">
                                    <img class="img-responsive" src="/images/benefit-4.png">
                                </div>
                                <p class="description">
                                    Chance to win a trip of a lifetime upon enrollment
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section fp-auto-height footer" id="section3">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-8">
                               <div class="country-selection">
                                    <h4>Country</h4>
                                    <ul class="list-inline">
                                       <li>
                                           <a href="">Indonesia</a>
                                       </li>
                                       <li>
                                           <a href="">Korea</a>
                                       </li>
                                       <li>
                                           <a href="">Malaysia</a>
                                       </li>
                                       <li>
                                           <a href="">Thailand</a>
                                       </li>
                                    </ul>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="language-selection">
                                   <select class="form-control">
                                       <option>English</option>
                                       <option>Indonesia</option>
                                       <option>English</option>
                                   </select>
                               </div>
                           </div>
                       </div>
                       <hr class="spacer">
                       <div class="row footer-two">
                           <div class="col-md-6">
                               <img class="img-responsive logo-on-footer" src="/images/logo1.png">
                               <p>
                                    <span class="copyright">
                                        Copyright © Bayer AG.
                                    </span><br />
                                    <span>
                                        Last updated: February 22, 2017
                                    </span>
                               </p>
                           </div>
                           <div class="col-md-6 text-right footer-nav">
                                <ul class="list-inline">
                                   <li>
                                       <a href="">Bayer Global</a>
                                   </li>
                                   <li class="divider">|</li>
                                   <li>
                                       <a href="">General Term of Use</a>
                                   </li>
                                   <li class="divider">|</li>
                                   <li>
                                       <a href="">Privacy Statement</a>
                                   </li>
                                   <li class="divider">|</li>
                                   <li>
                                       <a href="">Imprint</a>
                                   </li>
                                </ul>
                           </div>
                       </div>
                   </div>
                </div>
            </div>

        </div>
        
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script> -->

        <script type="text/javascript">
            $(document).ready(function() {
                var $isAnimatedFirst = $('.first .is-animated'),
                $isAnimatedSecond = $('.second .is-animated'),
                $isAnimatedSecondSingle = $('.second .is-animated__single'),
                $isAnimatedThird = $('.third .is-animated'),
                $isAnimatedThirdSingle = $('.third .is-animated__single');

                $('#fullpage').fullpage({
                    //anchors: ['firstPage', 'secondPage', '3rdPage'],
                    sectionsColor: ['#0090c5', '#0090c5', '#0090c5'],
                    css3: true,
                    afterLoad: function(anchorLink, index){
                        var loadedSection = $(this);

                        //using index
                        if(index >= 2){
                            $('#return-to-top').fadeIn(200); 

                            $('#return-to-top').click(function() {
                                // $('body,html').animate({
                                //     scrollTop : 0
                                // }, 500);

                                $.fn.fullpage.moveTo(1);
                            });

                        }else{
                            $('#return-to-top').fadeOut(200);
                        }

                        $isAnimatedFirst.addClass('animated fadeInUp');
                        $isAnimatedFirst.eq(0).css('animation-delay', '.3s');
                        $isAnimatedFirst.eq(1).css('animation-delay', '.6s');
                        $isAnimatedFirst.eq(2).css('animation-delay', '.9s');

                        if( index == 1 || index == 2 ){
                            $('.arrow a').click(function(){
                                $.fn.fullpage.moveSectionDown();
                            });
                        }

                    },
                    onLeave: function(index, nextIndex, direction) {
                        if( index == 1 && nextIndex == 2 ) { 
                            $isAnimatedSecond.addClass('animated fadeInUp'); 
                        }

                        if( (index == 1 || index == 2) && nextIndex == 3 ) {
                            $isAnimatedThird.addClass('animated fadeInUp');
                            $isAnimatedThird.eq(0).css('animation-delay', '.3s');
                            $isAnimatedThird.eq(1).css('animation-delay', '.6s');
                            $isAnimatedThird.eq(2).css('animation-delay', '.9s');
                        }
                    },
                    afterRender: function(){
                        $('.owl-carousel').owlCarousel({
                            loop:true,
                            margin:10,
                            nav:true,
                            center: true
                        });
                    }
                });



            });


        </script>
    </body>
</html>
