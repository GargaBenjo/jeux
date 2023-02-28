@extends("layouts.app-user")
@section('contenu')
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
                              
                              <div class="col-md-12 col-sm-12 col-12">
                                 <div class="yo_img" align="center">
                                    <figure style='text-align:center'><img src="{{ asset('public/images/mascotte1.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption  banner_po">
                           <div class="row">
                              
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/football.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/handball.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>HAND</strong> BALL</h1>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/basketball1.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>BASKET</strong> BALL</h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Contact us</a>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/volleyball.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>VOLLEY</strong> BALL</h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Contact us</a>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/tennis.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>TENNIS</strong></h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Contact us</a>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/tennistable1.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>TENNIS</strong> DE TABLE</h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Contact us</a>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/athletes.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>ATHLETISME</strong></h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Contact us</a>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/lutte1.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>LUTTE</strong></h1>
                                    <a class="read_more yoga_btn " href="contact.html" role="button">Voir plus</a>
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
                              <div class="col-md-5 col-sm-12">
                                 <div class="yo_img">
                                    <figure><img src="{{ asset('public/images/judo.png') }}" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7 text">
                                 <div class="yoga_box">
                                    <span>LES DISCIPLINES</span>
                                    <h1> <strong>JUDO</strong></h1>
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
                     <h2>LES MATCHS / COMPETITIONS DU JOUR</h2>
                     <span>Les matchs et les compétitions ayant lieu ce jour
                     </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6 d_none">
                    <div class="our_yoga">
                        <figure><img src="{{ asset('public/images/football.png') }}" alt="#" style='width:40%'/></figure>
                        <h3>FOOTBALL</h3>
                        <span>Ngaoundéré - Yaoundé I</span><br>
                        <span>Score: 0 - 0</span>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bott">
                  <div class="our_yoga">
                     <figure><img src="{{ asset('public/images/handball.png') }}" alt="#" style='width:40%'/></figure>
                     <h3>HANDBALL</h3>
                     <span>Ngaoundéré - Yaoundé I</span><br>
                        <span>Début 17h</span>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 d_none">
               <div class="our_yoga">
                     <figure><img src="{{ asset('public/images/volleyball.png') }}" alt="#" style='width:40%'/></figure>
                     <h3>VOLLEYBALL</h3>
                     <span>Ngaoundéré - Yaoundé I</span><br>
                        <span>Score: 0 - 0</span>
                        <span>Terminé</span>
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
                     <h2>GALERIE DES EVENEMENTS</h2>
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
                                       <div class="col-md-4 col-sm-4">
                                          <div class="aliq">
                                             <img class="qusright" src="{{ asset('public/images/galerie1.jpg') }}" alt="#"/>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-sm-4">
                                          <div class="aliq">
                                             <img class="qusright" src="{{ asset('public/images/galerie1.jpg') }}" alt="#"/>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-sm-4">
                                          <div class="aliq">
                                             <img class="qusright" src="{{ asset('public/images/galerie1.jpg') }}" alt="#"/>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
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
@endsection