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
                                 <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">Pr??sentation de l'UN</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="classes.html">Guides</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('classement')}}" :active="request()->routeIs('classement')">Classement</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="pricing.html">Jeux en direct</a>
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
         @yield("contenu")
      <!--  footer -->
      <footer style="background-color:#1865fb">
         <div class="footer" style="background:url('{{asset('public/images/2.png')}}')">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <h3>Liens</h3>
                     <ul class="link_menu">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="about.html">Pr??sentation UN</a></li>
                        <li><a href="about.html">Guide</a></li>
                        <li><a href="classes.html">Classement</a></li>
                        <li><a href="yoga.html">Jeux en direct</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  
                  <div class="col-lg-3 offset-mdlg-2     col-md-4 offset-md-1">
                     <h3>Contact </h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Dang, Ngaound??r??, Cameroun</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> un@univ-ndere.cm</a></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> Tel.: 222 25 40 02</li>
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
                        <p>?? 2023 Touts droits r??serv??s.</p>
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