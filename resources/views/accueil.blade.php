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
      <title>Jeux Universitaire 2023</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="{{ asset('public/images/logo_jeux.png') }}">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('public/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('public/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('public/images/loading.gif') }}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ asset('public/images/logo_jeux.png') }}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="classes.html">classes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="yoga.html">yoga</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="pricing.html">pricing</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption  banner_po">
                           <div class="row">
                              
                              <div class="col-md-5">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/football.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>FOOT</strong> BALL</h1>
                                    <a class="read_more yoga_btn" href="contact.html" role="button">Voir plus</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/handball.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="yoga_box">
                                    <span>Now started</span>
                                    <h1> <strong>Y</strong> O <strong>G</strong> A</h1>
                                    <a class="read_more yoga_btn" href="contact.html" role="button">Contact us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/basketball.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="yoga_box">
                                    <span>Now started</span>
                                    <h1> <strong>Y</strong> O <strong>G</strong> A</h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Contact us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </section>
      </header>
      <!-- end banner -->
      <!-- our classes -->
      <div class="classes">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>LES MATCHS/COMPETITIONS DU JOUR</h2>
                     <span>Les matchs et les compétitions ayant lieu ce jour
                     </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6 d_none">
               </div>
               <div class="col-md-4 col-sm-6 margin_bott">
                  <div class="our_yoga">
                     <figure><img src="{{ asset('public/images/our_yoga1.png') }}" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 d_none">
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="our_yoga">
                     <figure><img src="{{ asset('public/images/our_yoga2.png') }}" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 d_none">
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="our_yoga">
                     <figure><img src="{{ asset('public/images/our_yoga3.png') }}" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                  </div>
               </div>
               <div class="col-md-4 offset-md-4 col-sm-6  margin_top">
                  <div class="our_yoga">
                     <figure><img src="{{ asset('public/images/our_yoga4.png') }}" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                     <a class="read_more yoga_btn" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our classes -->
      
      
      
      <!-- pepole -->
      <div class="pepole">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Que dit-on?</h2>
                     <span>Les avis des visiteurs vis-à-vis des JU 2023 </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="testimo_ban_bg">
                     <div id="testimo" class="carousel slide testimo_ban" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#testimo" data-slide-to="0" class="active"></li>
                           <li data-target="#testimo" data-slide-to="1"></li>
                           <li data-target="#testimo" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="container parile0">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-12">
                                          <i><img class="qusright" src="{{ asset('public/images/t.png') }}" alt="#"/><img src="{{ asset('public/images/tes.png') }}" alt="#"/><img class="qusleft" src="{{ asset('public/images/t.png') }}" alt="#"/></i>
                                          <div class="aliq">
                                             <span>Aliqua</span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container parile0">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-12">
                                          <i><img class="qusright" src="{{ asset('public/images/t.png') }}" alt="#"/><img src="{{ asset('public/images/tes.png') }}" alt="#"/><img class="qusleft" src="{{ asset('public/images/t.png') }}" alt="#"/></i>
                                          <div class="aliq">
                                             <span>Aliqua</span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container parile0">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-12">
                                          <i><img class="qusright" src="{{ asset('public/images/t.png') }}" alt="#"/><img src="{{ asset('public/images/tes.png') }}" alt="#"/><img class="qusleft" src="{{ asset('public/images/t.png') }}" alt="#"/></i>
                                          <div class="aliq">
                                             <span>Aliqua</span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                           <i class="fa fa-arrow-left" aria-hidden="true"></i>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                           <i class="fa fa-arrow-right" aria-hidden="true"></i>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end pepole -->
      <!--  footer -->
      <footer style="background-color:#1865fb">
         <div class="footer" style="background:url('{{asset('public/images/2.png')}}')">
            <div class="container">
               <div class="row">
                     <h2>Contact Us</h2>

                  <div class="col-md-4">
                     <h3>QUICK LINKS</h3>
                     <ul class="link_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="about.html"> About</a></li>
                        <li><a href="classes.html">Classes</a></li>
                        <li><a href="yoga.html">Yoga</a></li>
                        <li><a href="pricing.html">pricing</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  
                  <div class="col-lg-3 offset-mdlg-2     col-md-4 offset-md-1">
                     <h3>Contact </h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Location</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> Call : +01 1234567890</li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2023 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('public/js/jquery.min.js') }}"></script>
      <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('public/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('public/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('public/js/custom.js') }}"></script>
   </body>
</html>