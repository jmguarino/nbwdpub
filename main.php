<?php
session_start();

if( $_SESSION["hasAuthed"] == "true") {
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NorthBayWeddingDay</title>
        <meta name="description" content="Andrea and Justin's Wedding Website" />
        <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, onepage, responsive, mobile" />
        <meta name="author" content="Justin Guarino, adapted from template by Prime Design" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Stlylesheet -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
        <!-- Skin Color -->
        <link rel="stylesheet" href="css/colors/blue.css" id="color-skins" />
    </head>

    <body>
        <!-- Start Preloader -->
        <div id="loader">
            <div class="spinner">
                <div class="cube cube0"></div>
                <div class="cube cube1"></div>
                <div class="cube cube2"></div>
                <div class="cube cube3"></div>
                <div class="cube cube4"></div>
                <div class="cube cube5"></div>
                <div class="cube cube6"></div>
                <div class="cube cube7"></div>
                <div class="cube cube8"></div>
                <div class="cube cube9"></div>
                <div class="cube cube10"></div>
                <div class="cube cube11"></div>
                <div class="cube cube12"></div>
                <div class="cube cube13"></div>
                <div class="cube cube14"></div>
                <div class="cube cube15"></div>
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Start Header -->
        <header>
            <nav class="navbar navbar-default navbar-alt" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand to-top" rel="home" href="#">
                            <img src= "img/logo/guarino-logo-white.png" data-src-520px="img/logo/guarino-logo-white.png" alt="NBWD" class="logo-big">
                            <img src="img/logo/guarino-logo.png" data-src-520px="img/logo/guarino-logo.png" alt="NBWD" class="logo-small">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav  navbar-right">
                            <li> <a class="to-top"> Home </a> </li>
                            <li class="to-section"> <a href="#info"> Info </a> </li>
                            <li class="to-section"> <a href="#RSVP"> RSVP </a> </li>
                            <li class="to-section"> <a href="#hotels"> Hotels </a> </li>
                            <li class="to-section"> <a href="#registry"> Registry </a> </li>
                            <li class="to-section"> <a href="#activities"> Activities </a> </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header>
        <!-- End Header -->
        <!-- Start Home Revolution Slider Parallax Section -->
        <section id="home-revolution-slider">
            <div class="hero">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/hiking/wateraway.JPG" data-delay="10000" data-saveperformance="on">
                                <img src="img/hiking/wateraway.JPG" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- Home Heading -->
                                <div class="tp-caption sft" data-x="center" data-y="260" data-speed="1200" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <h2 class="home-heading op-3">Come Celebrate!</h2>
                                </div>
                                <!-- Home Subheading -->
                                <div class="tp-caption home-subheading sft fadeout" data-x="center" data-y="360" data-speed="1200" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="op-3"><strong>Scroll down for more info!</strong></div>
                                </div>
                                <!-- Home Button -->
                                <div class="tp-caption home-button sft fadeout" data-x="center" data-y="400" data-speed="1200" data-start="1550" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="op-3"> <a href="#RSVP" class="btn btn-primary btn-scroll"> RSVP </a> </div>
                                </div>
                            </li>
                            <!-- SLIDE 2 -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/hiking/waterclose.JPG" data-delay="10000" data-saveperformance="on">
                                <img src="img/hiking/waterclose.JPG" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- Home Heading -->
                                <div class="tp-caption sft" data-x="center" data-y="260" data-speed="1200" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <h2 class="home-heading op-1">Eat up and party down!</h2>
                                </div>
                                <!-- Home Subheading -->
                                <div class="tp-caption home-subheading sft " data-x="center" data-y="360" data-speed="1200" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="op-1"></div> 
                                </div>
                                <!-- Home Button -->
                                <div class="tp-caption home-button sft fadeout" data-x="center" data-y="400" data-speed="1200" data-start="1550" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="op-1"> <a href="#RSVP" class="btn btn-primary btn-scroll"> RSVP </a> </div>
                                </div>
                            </li>
                            <!-- SLIDE 3 -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/hiking/pathentrance.JPG" data-delay="10000" data-saveperformance="on">
                                <img src="img/hiking/pathentrance.JPG" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- Home Heading -->
                                <div class="tp-caption sft" data-x="center" data-y="260" data-speed="1200" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <h2 class="home-heading op-2">Come Celebrate!</h2>
                                </div>
                                <!-- Home Subheading -->
                                <div class="tp-caption home-subheading sft fadeout" data-x="center" data-y="360" data-speed="1200" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="op-2"><strong>Food, Fun, Dancing!</strong></div>
                                </div>
                                <!-- Home Button -->
                                <div class="tp-caption home-button sft fadeout" data-x="center" data-y="400" data-speed="1200" data-start="1550" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="op-2"> <a href="#info" class="btn btn-primary btn-scroll"> INFO </a> </div>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                    <div class="home-bottom">
                        <div class="container text-center">
                            <div class="move bounce">
                                <a href="#features" class="ion-ios-arrow-down btn-scroll"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Revolution Slider Parallax Section -->
        <div class="site-wrapper content">
            <!-- Start Features Section -->
            <section id="features">
                <div class="container">
                    <div class="row features-row wow fadeInUp">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-column">
                            <div class="feature-icon"> <i class="ion-android-restaurant size-2x highlight"></i> <i class="ion-android-restaurant back-icon"></i> </div>
                            <div class="feature-info">
                                <h4>Food!</h4>
                                <p class="feature-description">Eat your heart out at the delicious buffet! Food options include gourmet salads, Roasted Prime Rib, Salmon with Blood Orange sauce, and of course a delectable dessert</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-column">
                            <div class="feature-icon"> <i class="ion-android-walk size-2x highlight"></i> <i class="ion-android-walk back-icon"></i> </div>
                            <div class="feature-info">
                                <h4>Fun!</h4>
                                <p class="feature-description">Check out this icon guy, he's running to the dance floor!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-column">
                            <div class="feature-icon"> <i class="icon-heart size-2x highlight"></i> <i class="icon-heart back-icon"></i> </div>
                            <div class="feature-info">
                                <h4>Family!</h4>
                                <p class="feature-description">Join us as we embark on a new chapter!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Features Section -->
            <!-- Start Quote Section -->
            <section id="quote" class="parallax-section-1">
                <!--
                <div class="container">
                    <div class="row wow fadeInUp">
                        <div id="quote-slider" class="owl-carousel">
                            <div>
                                <blockquote>
                                    <i class="icon-left ion-quote ion-2x highlight"></i> <span> The Difference between ordinary and extraordinary<br>
                                    is just that little extra! </span> <i class="icon-right ion-quote ion-2x highlight"></i>
                                </blockquote>
                                <h4 class="quote-author highlight">Prime Team</h4>
                            </div>
                            <div>
                                <blockquote>
                                    <i class="icon-left ion-quote ion-2x highlight"></i> <span> A Perfect Design is made with Passion, Dedication,<br>
                                    and a lots of Coffee! </span> <i class="icon-right ion-quote ion-2x highlight"></i>
                                </blockquote>
                                <h4 class="quote-author highlight">Prime Team</h4>
                            </div>
                            <div>
                                <blockquote>
                                    <i class="icon-left ion-quote ion-2x highlight"></i> <span> What separates design from art is that design is<br>
                                    meant to be... functional. </span> <i class="icon-right ion-quote ion-2x highlight"></i>
                                </blockquote>
                                <h4 class="quote-author highlight">Prime Team</h4>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- End Quote Section -->
            <!-- Start Info Section -->
            <section id="info">
                <div class="container">
                    <div class="text-center wow fadeInUp">
                        <h3 class="section-title">Info</h3>
                        <p class="subheading">A bit about the venue and plans for the big day.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp extra-padded">
                            <img src="img/hiking/overview.JPG" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp">
                            <div class="h3">The Place</div>
                            <p>Santa Rosa Golf and Country Club, located in west Santa Rosa. <a href="https://goo.gl/maps/UJfF3PMkRw52" target="_blank">Click here for a google map link!</a></p>
                            <div class="h3">The Time</div>
                            <p>Saturday June 25th 2016 at 4:30PM (Please plan on arriving a little early!)</p>
                            <div class="h3">The Size</div>
                            <p>We have only invited family and close friends to keep things small (roughly 60 people or so).</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Info Section -->
            <!-- Start Fun Facts Section -->
            <section id="fun-facts" class="parallax-section-2">
                <div class="container well fact-well">
                    <div class="text-center white wow fadeInUp">
                        <h3 class="section-title">Keep us in the know!</h3>
                        <h4>If you haven't already, <a href="#RSVP"><span class="highlight">RSVP</span></a> below!</h4>
                    </div>
                    <div class="counter-row row text-center wow fadeInUp">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fact-container">
                            <div class="fact">
                                <span id="attendingCount" class="counter highlight"></span>
                                <h4>Attending</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fact-container">
                            <div class="fact">
                                <span id="waitingCount" class="counter highlight"></span>
                                <h4>Yet to Confirm</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fact-container">
                            <div class="fact">
                                <h2  class="counter highlight">0</h2>
                                <h4>Days Until Wedding</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Fun Facts Section -->
            <!-- Start RSVP Section -->
            <section id="RSVP">
                <div class="container">
                    <div class="text-center wow fadeInUp">
                        <h3 class="section-title">RSVP</h3>
                        <p class="subheading">Let us know you'll be attending!</p>
                        <p>We have very limited space so <em>please</em> contact Justin or Andrea to discuss adding more than allowed on this form!</p>
                        <p><small>Having trouble with the form below? Email Justin at <a href="mailto:justin@northbayweddingday.com?Subject=RSVP" target="_blank">justin@northbayweddingday.com</a> instead.</small></p>
                    </div>
                    <div class="row" id="rsvpWidget">
                        <div class="container" id="nameDiv">
                            <div class="row">
                                <div class="center-block well ">
                                    <div class="row fade">
                                        <img src="img/logo/ajwedding.png" class="img-responsive center-block">
                                    </div>
                                    <div class="row fade">
                                        <div class="col-md-12 ui-widget">
                                            <div class="row">
                                                <p class="text-center">Start typing your name then click on the match in the box that appears below.</p>
                                            </div>
                                            <form id="rsvpForm">
                                                <div class="row ui-widget">
                                                    <input id="rsvpGuests" class="center-block" type="text" name="pass">
                                                </div>
                                                <div class="row">
                                                    <input id="gnSub" class="center-block" type="submit" value="Go">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- RSVP for Party Div -->
                        <div class="container hidden" id="partyRSVP">
                            <div class="row">
                                <div class="center-block well ">
                                    <div class="row fade">
                                        <img src="img/logo/ajwedding.png" class="img-responsive center-block">
                                    </div>
                                    <div class="row fade">
                                        <div class="row">
                                            <p class="text-center">Please RSVP for the other members of your party as well!</p>
                                        </div>
                                        <form class="col-md-12" method="POST" action="php/db_setRSVP.php" id="rsvpChoices">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <tbody id="guestRows">
                                                            <!-- Dynamic content -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <input class="center-block" type="submit" name="subRSVP" value="Submit" id="subRSVP">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Confirmation Div -->
                         <div class="container hidden" id="rsvpSuccess">
                            <div class="row">
                                <div class="center-block well ">
                                    <div class="row fade">
                                        <img src="img/logo/ajwedding.png" class="img-responsive center-block">
                                    </div>
                                    <div class="row fade">
                                        <p class="text-center">Great! Thank you for your confirmation!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End RSVP Section -->
            <!-- Start Portfolio Section -->
            <section id="portfolio">
                <div class="container-fluid">
                    <div class="text-center">
                        <h3 class="section-title wow fadeInUp"> Engagement Photos! </h3>
                        <p class="subheading wow fadeInUp">Thanks to our groomsmen
                            <a href="http://www.danthompsonphotography.net/" target="_blank"><span class="highlight">Dan Thompson</span>
                        </a> and Daniel Butler for an amazing photoshoot experience! Check out some of our favorites below.</p>
                    </div>
                    <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
                        <ul>
                            <li class="cbp-item effect effects identity logo">
                                <div class="img">
                                    <img src="img/engagement/usfence-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/usfence.jpg" class="cbp-lightbox expand" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects identity logo">
                                <div class="img">
                                    <img src="img/engagement/uslookup-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/uslookup.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects web-design">
                                <div class="img">
                                    <img src="img/engagement/usfar-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/usfar.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects motion identity">
                                <div class="img">
                                    <img src="img/engagement/usswing-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/usswing.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects identity graphic">
                                <div class="img">
                                    <img src="img/engagement/shessuperpretty-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/shessuperpretty.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects motion logo">
                                <div class="img">
                                    <img src="img/engagement/bootysmack-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/bootysmack.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects web-design graphic">
                                <div class="img">
                                    <img src="img/engagement/halp-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/halp.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects web-design graphic">
                                <div class="img">
                                    <img src="img/engagement/uskiss-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/uskiss.jpg" class="cbp-lightbox" data-title="Photos by<br>Dan Thompson"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects web-design graphic">
                                <div class="img">
                                    <img src="img/engagement/ussmile-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/ussmile.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Prime"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="cbp-item effect effects web-design graphic">
                                <div class="img">
                                    <img src="img/engagement/ussunset-sm.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-icon">
                                                <a href="img/engagement/ussunset.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Prime"> <i class="icon-magnifier"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End Portfolio Section -->
            <!-- Start hotels -->
            <section id="hotels">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="section-title wow fadeInUp">Hotels</h3>
                            <p class="wow fadeInUp">Stay a while!</p>
                            <p class="wow fadeInUp col-md-6">
                                <br> <b>The Gables Inn</b>
                                <br> <a href="https://goo.gl/maps/V1NSg7Ngigq" target="_blank">4257 Petaluma Hill Road Santa Rosa CA 95404</a>
                                <br> <a href="http://www.thegablesinn.com/" target="_blank">http://www.thegablesinn.com/</a>
                                <br> A charming Victorian bed and breakfast located off of rural Petaluma Hill Road. Enjoy the breathtaking view of Rohnert Park’s serene valley. **2 night minimum. About 20 mins/9.4 miles from venue.
                                <br>
                            </p>
                            <p class="wow fadeInUp col-md-6">
                                <br> <b>The Fairfield Inn in Sebastopol (a Marriot Hotel)</b>
                                <br> <a href="https://goo.gl/maps/12EZPAsxuLy" target="_blank">1101 Gravenstein Highway South, Sebastopol, CA 95472</a>
                                <br> <a href="http://www.winecountryhi.com/" target="_blank">http://www.winecountryhi.com/</a>
                                <br> Conveniently located just 10 minutes (5 miles) from the venue, this hotel is perfect for those who prefer location over vacation. **6 rooms total have been reserved under “Austin.” Please contact the bride or groom if you have any issues reserving your room.
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End hotels -->
            <!-- Start registry -->
            <section id="registry">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="section-title wow fadeInUp">Registry</h3>
                            <p class="subheading wow fadeInUp">We are registered at <a href="https://www.amazon.com/gp/registry/registry.html?ie=UTF8&id=G2OYJ8B2VP7E&type=wedding" target="_blank">Amazon</a>
                            and <a href="http://www.target.com/gift-registry/giftgiver?registryId=ps9DdAX1q4qNM01XLK6brw" target="_blank">Target</a> if you're looking for ideas!</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End registry -->
            <!-- Start picture divider -->
            <section id="quote" class="parallax-section-3">
            </section>
            <!-- End picture divider -->
            <!-- Start activities-->
            <section id="activities">
                <div class="container">
                    <div class="text-center">
                        <h3 class="section-title wow fadeInUp">Activities</h3>
                        <p class="subheading wow fadeInUp">Welcome to Sonoma County and the Bay Area. Enjoy your stay!<br> Click on the name of any business below for more info (yelp page, etc).</p>
                    </div>
                    <div class="row features-row wow fadeInUp">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-column">
                            <div class="feature-icon">
                                <i class="ion-coffee size-2x highlight"></i>
                            </div>
                            <div class="feature-info">
                                <h4><a href="http://www.yelp.com/biz/flying-goat-coffee-santa-rosa" target="_blank">Flying Goat Coffee</a></h4>
                                <p class="feature-description">Try the spicy Aztec Mocha, Justin’s personal favorite! (Please do not feed the hipsters.)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 white feature-column">
                            <div class="feature-icon">
                                <i class="ion-wineglass size-2x highlight"></i>
                            </div>
                            <div class="feature-info">
                                <h4><a href="http://www.yelp.com/biz/flavor-bistro-santa-rosa" target="_blank">Flavor Bistro</a></h4>
                                <p class="feature-description">Andrea loves the eggs benedict! We both like the mimosas!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 white feature-column">
                            <div class="feature-icon">
                                <i class="ion-fork size-2x highlight"></i>
                            </div>
                            <div class="feature-info">
                                <h4><a href="http://www.yelp.com/biz/colibri-grill-cafe-santa-rosa" target="_blank">Colibri Grill Cafe</a></h4>
                                <p class="feature-description">The cheese blintzes are almost too pretty to eat (but that doesn't stop us). The eggs benedict is great here too.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row features-row wow fadeInUp">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-column">
                            <div class="feature-icon">
                                <i class="ion-bug size-2x highlight"></i>
                            </div>
                            <div class="feature-info">
                                <h4><a href="https://goo.gl/maps/syEJ4A9UAPJ2" target="_blank">Annadel State Park</a></h4>
                                <p class="feature-description">We're lucky enough to live adjacent to a residential access trail into a nearby state park. All of the photos on this website were shot there!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 white feature-column">
                            <div class="feature-icon"> <i class="ion-heart size-2x highlight"></i> </div>
                            <div class="feature-info">
                                <h4><a href="http://www.yelp.com/biz/sol-food-san-rafael-3" target="_blank">Sol Food in San Rafael</a></h4>
                                <p class="feature-description">After a long drive back from visiting family, nothing satisfies our hunger quite like Sol Food. They're in high demand (check their yelp out) but the wait is worth it! Personal favorites are the Po' Boy (fried prawn) sandwich and mariquitas (delicious plantain chips). Don't forget the Ponche!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 white feature-column">
                            <div class="feature-icon"> <i class="ion-leaf size-2x highlight"></i> </div>
                            <div class="feature-info">
                                <h4><a href="http://www.yelp.com/biz/mount-tamalpais-state-park-mill-valley" target="_blank">Mount Tamalpais</a></h4>
                                <p class="feature-description">A beautiful state park with loads of trails; if you drive a bit further you could even make a stop at Stinson Beach! This is about an hour south of the venue, so might as well stop by Sol Food on the way! (Seriously, eat Sol Food) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End activities -->
            <!-- Start Google Map Section -->
            <div id="map"></div>
            <!-- End Google Map Section -->
            <!-- Start Footer 1 -->
            <footer id="footer">
                <!-- Start Footer Copyright -->
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="text-center">
                                <h3 class="section-title wow fadeInUp">NorthBayWeddingDay</h3>
                                <p class="wow fadeInUp">Justin Guarino © 2016 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer Copyright -->
            </footer>
            <!-- End Footer 1 -->
            <!-- Start Back To Top -->
            <a id="back-to-top"> <i class="icon ion-chevron-up"></i> </a>
            <!-- End Back To Top -->
        </div>
        <!-- End Site Wrapper -->
        <!-- jQuery -->
        <script type="text/javascript" src="js/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/moderniz.min.js"></script>
        <script type="text/javascript" src="js/plugins/smoothscroll.min.js"></script>
        <script type="text/javascript" src="js/no-ui-slider/jquery.nouislider.all.min.js"></script>
        <script type="text/javascript" src="js/plugins/revslider.min.js"></script>
        <script type="text/javascript" src="js/plugins/waypoints.min.js"></script>
        <script type="text/javascript" src="js/plugins/parallax.min.js"></script>
        <script type="text/javascript" src="js/plugins/easign1.3.min.js"></script>
        <script type="text/javascript" src="js/plugins/cubeportfolio.min.js"></script>
        <script type="text/javascript" src="js/plugins/owlcarousel.min.js"></script>
        <script type="text/javascript" src="js/plugins/tweetie.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/plugins/gmap3.min.js"></script>
        <script type="text/javascript" src="js/plugins/wow.min.js"></script>
        <script type="text/javascript" src="js/plugins/counterup.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>

</html>

<?php } ?>
