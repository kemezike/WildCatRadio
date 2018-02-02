    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Wildcats Radio</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">



      <!-- Bootstrap CSS File -->

      <link href="{{asset('wcr/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

      
      <!-- Libraries CSS Files -->
      <link href="{{asset('wcr/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('wcr/lib/animate/animate.min.css')}}" rel="stylesheet">

      <!-- Main Stylesheet File -->
      <link href="{{asset('wcr/css/style.css')}}" rel="stylesheet">


      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

      <!-- OTHER CSS  -->
      <link rel="stylesheet" type="text/css" href="{{asset('wcr/css/buttons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('wcr/css/chat.css')}}">

      <script>
        setInterval(function(){chat()},1000);
      </script>

      
    </head>

    <body>
      <!--==========================
      Header
      ============================-->
      <header id="header">
        <div class="container">

          <div id="logo" class="pull-left">
            <h1>WCRADIO</h1>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="#hero">Dashboard</a></li>
              <li><a href="#dedications">Dedications</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#schedule">Schedule</a></li>
              <li><a href="#about">About Us</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->

      <!--==========================
        Hero Section
        ============================-->
        <section id="hero">
          <div class="hero-container">
            <h1>CEBU INSTITUTE OF TECHNOLOGY - UNIVERSITY</h1>
            <h2>Home of the Wildcats</h2>
          </div>
        </section><!-- #hero -->

        <main id="main">

         <!-- JPLAYER -->
         <div class="hidden">
          <div id="jquery_jplayer_1" class="jp-jplayer"></div>
          <div id="jp_container_1" class="jp-audio-stream" role="application" aria-label="media player">
            <div class="jp-type-single">
              <div class="jp-gui jp-interface">
                <div class="jp-controls">
                  <button class="jp-play" role="button" tabindex="0" id="jplay1">play</button>
                </div>
                <div class="jp-volume-controls">
                  <button class="jp-mute" role="button" tabindex="0">mute</button>
                  <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                  <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                  </div>
                </div>
              </div>
              <div class="jp-details">
                <div class="jp-title" aria-label="title">&nbsp;</div>
              </div>
            </div>
          </div>
        </div>
        <!-- JPLAYER -->
      <!--==========================
          About Us Section
          ============================-->
          <section id="about">
            <div class="container">
              <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                  <h2 class="title">Few Words About Us</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>

                  <div class="icon-box wow fadeInUp">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                  </div>

                  <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-photo"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  </div>

                  <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                  </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
              </div>

            </div>
          </section><!-- #about -->

           <!--==========================
          Dedication Section
          ============================-->
          <section id="dedications">

            <div class="container wow fadeInUp">
              <div class="section-header">
                <h3 class="section-title" id="">Dedication
                </h3>
                <p class="section-description">Ipahayag ang iyong Storya gamit aning na Serbisyo</p>
              </div>

              <div class="container chatbox col-lg-12 wow fadeInRight">
                <div class="row about-container">
                  <div class="scrollbar" id="style-3">
                    <div class="col-lg-12 content order-lg-1 order-2" id="chatbox">                    

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section><!-- #dedication -->


         <!--==========================
          Schedule Section
          ============================-->
          <section id="schedule">
            <div class="container wow fadeInLeft">
              <div class="section-header">
                <h3 class="section-title">Schedule</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
              </div>
              <div class="container wow fadeInDown">
               <table class="table table-bordered" id="tableSched">
                <thead>
                  <tr>
                    <th>Genre</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Punk Rock</td>
                    <td>9:00 - 10:00</td>
                  </tr>
                  <tr>
                    <td>Christian Song</td>
                    <td>10:00 - 11:00</td>
                  </tr>
                  <tr>
                    <td>OPM</td>
                    <td>11:00 - 12:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section><!-- #schedule -->

         <!--==========================
          Team Section
          ============================-->
          <section id="team">
            <div class="container wow fadeInUp">
              <div class="section-header">
                <h3 class="section-title">Team</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="member">
                    <div class="pic"><img src="{{asset('wcr/img/mem1.jpg')}}" alt="" id="ulolkakryce"></div>
                    <h4>Kryce Earl Martus</h4>
                    <span>Programmer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="member">


                    <div class="pic"><img src="{{asset('wcr/img/mem2.jpg')}}" alt=""></div>
                    <h4>Jeff Eric Cabarrubias</h4>
                    <span>Programmer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="member">
                    <div class="pic"><img src="{{asset('wcr/img/mem4.jpeg')}}" alt=""></div>
                    <h4>Ian Laborte</h4>
                    <span>Programmer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="member">
                    <div class="pic"><img src="{{asset('wcr/img/mem3.jpg')}}" alt=""></div>
                    <h4>Eve Baclayon</h4>
                    <span>Graphic Artist</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- #team -->



        <!--==========================
          Footer Section
          ============================-->
          <section id="s-footer">
            <div class="footer-top">
              <div class="container">

              </div>
            </div>

            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong> Wildcats Radio</strong>. All Rights Reserved 2018
              </div>
              <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
            -->
            Heyow Guys This is WildCats Radio Lol
          </div>
        </div>
      </section><!-- footer -->
    </main>


      <!--==========================
        Sticky Footer
        ============================-->
        <div class="footer" id="metafooter">
          <div id="bg"></div>
          <input class="hidden" id="excheck" type="text"/>
          <!-- FOR THE AUDIO STREAM -->
          <audio id="music">
            <source id="stream" src="#">
            </audio>
            <!-- END OF THE AUDIO STREAM -->
            <div class="b1">
              <span id="appn"><img src="{{asset('wcr/img/tiger.png')}}" alt="BOGO" title="BOGO" id="logo_1"/></img>&nbsp;WILDCATS RADIO</span>
              <button class="btn btn-default" type="button" id="play-button">

                <i class="fa fa-play playsize" aria-hidden="true" id="streamicon"></i>
                <i id="refreshicon" class="fa fa-refresh fa-spin fa-3x fa-fw playsize" style="display:none"></i>

              </button>
              <marquee width="35%" height="20px" id="metadataholder"><span id="metadata"> Radio Connecting . . </span> </marquee>
              <a class="btn btn-default" id="mute-button"><i class="fa fa-volume-up mutesize" aria-hidden="true" id="muteonicon"></i></a> 
              <input id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"/>
              @if(!Auth::user())
              <button class="btn btn-default smallbuts" id="dedicationAccess"  type="button" title="Send Dedications" data-toggle="modal" data-target="#logModal">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<i class="fa fa-file-text" aria-hidden="true"></i>
              </button>
              @endif
              @if(Auth::user())
              <button class="btn btn-default smallbuts" type="button" title="Send Dedications" data-toggle="modal" data-target="#decModal">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<i class="fa fa-file-text" aria-hidden="true"></i>
              </button>
              @endif

              <button class="btn btn-default smallbuts" type="button" id="shenbogoka" title="Minimizae">

                <i id="minbutton" class="fa fa-window-minimize" aria-hidden="true"></i>

              </button>

            </div>



            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

          </div>

          <!-- JavaScript Libraries -->
          
          <script src="{{asset('wcr/lib/jquery/jquery-3.2.1.min.js')}}"></script>
          <script src="{{asset('wcr/lib/jquery/jquery-migrate.min.js')}}"></script>
          <script src="{{asset('wcr/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('wcr/lib/easing/easing.min.js')}}"></script>
          <script src="{{asset('wcr/lib/wow/wow.min.js')}}"></script>
          <script src="{{asset('wcr/lib/bootstrap/js/bootstrap.min.js')}}"></script>
          <script src="{{asset('wcr/lib/waypoints/waypoints.min.js')}}"></script>
          <script src="{{asset('wcr/lib/counterup/counterup.min.js')}}"></script>
          <script src="{{asset('wcr/lib/superfish/hoverIntent.js')}}"></script>
          <script src="{{asset('wcr/lib/superfish/superfish.min.js')}}"></script>
          <script src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js""></script>

          <!-- Contact Form JavaScript File -->
          
          <!-- Template Main Javascript File -->
          <script src="{{asset('wcr/js/main.js')}}"></script>
          <script src="{{asset('wcr/js/playtrigger.js')}}"></script>
          <script src="{{asset('js/displayDedication.js')}}"></script>
          <script src="{{asset('wcr/lib/Jplayer/dist/jplayer/jquery.jplayer.min.js')}}"></script>
          <script src="{{asset('js/dedication.js')}}"></script>
          <script src="{{asset('wcr/js/login.js')}}"></script>
        </body>

        <!-- MODALS -->
        <!-- Dedication Modal -->
        @if(Auth::user())
          <div class="modal fade" id="decModal" tabindex="-1" role="dialog" aria-labelledby="decModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name" value="@if(Auth::user())
                    {{Auth::user()->name}}
                    @endif">
                  </div>
                  <div class="form-group">
                    <label for="sel1">College:</label>
                   <select class="form-control" id="college">
                    <option default>CCS</option>
                    <option>CMBA<option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label" >Message:</label>
                  <textarea class="form-control" id="message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" id="send" onclick="send()" class="btn btn-primary">Send message</button>
            </div>
          </div>
        </div>
      </div>
        @endif
      <!-- End Dedication Modal -->

      <!-- Login Modal -->
      @if(!Auth::user())
      <div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="decModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Log-in</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/register" method="POST">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" name="name" id="username">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <input type="submit" value="Submit" class="btn btn-primary" value="Log in"> --}}
                <input type="submit" value="Submit" class="button is-primary">
                <button type="button" id="login" onclick="register()" class="btn btn-primary">Login</button>
                {{-- <button type="button" class="btn btn-primary">Log in</button> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
      @endif

      <!-- End Dedication Modal -->

      <!-- END OF MODALS-->
      </html>
