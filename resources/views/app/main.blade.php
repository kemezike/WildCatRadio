    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Wildcats Radio</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">


      <link rel="stylesheet" type="text/css" href="{{asset('wcr/lib/datatables/dataTables.bootstrap4.css')}}">
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
      <link rel="stylesheet" type="text/css" href="{{asset('wcr/css/tablebuttons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('wcr/css/chat.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('wcr/lib/toastr/build/toastr.css')}}">
      <script>

        setInterval(function(){chat();
        },10000);
      </script>

      
    </head>

    <body>
      @if(count($errors))
      <div class="formgroup">
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul> 
        </div>
      </div>   
      @endif
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
              @if(Auth::user())
              <li><a href="#">Welcome, {{Auth::user()->name}}</a></li>
              <li><a href="/logout">Logout</a></li>
              @endif
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
            <!-- DEDICATION FOR CP  -->
            @if(!Auth::user())
            <button class="btn btn-default ddcatcp" id="dedicationAccess"  type="button" title="Send Dedications" data-toggle="modal" data-target="#logModal">
              Dedicate Now with name! 
            </button>
            @endif
            {{-- @if(Auth::user()) --}}
            <button class="btn btn-default ddcatcp" type="button" title="Send Dedications" data-toggle="modal" data-target="#decModal">
              Dedicate Now !
            </button>
            {{-- @endif --}}
            <!-- DEDICATION FOR CP  -->
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

            <!-- /.container-fluid -->
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

              @if(Auth::user())
              @if(Auth::user()->type=='admin')
              <div class="container-fluid" id="CONTAINER">
                <!-- Example Tables Card -->
                <div class="card mb-4" id="tablecard">
                 <div class="card-header blue" >
                  <button type="submit" class="btn btn-primary btn-md" id="refreshtab"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Refresh</button>
                </div>
                <div class="card-body" id="TableBODY" >
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                      <thead>
                        <tr>
                          <th title="View Message"></th>
                          <th></th>
                          <th></th>
                          <th>User Name</th>
                          <th></th>
                          <th>College Name</th>
                          <th>Date Added</th>
                          <th>Date Updated</th>
                          <th>Song Name</th>
                          <th></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">
                  Made by #GTE OJT
                </div>
              </div>
            </div>
            @elseif(Auth::user()->type=='user')


            <div class="container chatbox col-lg-12 wow fadeInRight">
              <div class="row about-container">
                <div class="scrollbar" id="style-3">
                  <div class="col-lg-12 content order-lg-1 order-2" id="chatbox">                    

                  </div>
                </div>

              </div>
            </div>
            @endif
            @elseif(!Auth::user())


            <div class="container chatbox col-lg-12 wow fadeInRight">
              <div class="row about-container">
                <div class="scrollbar" id="style-3">
                  <div class="col-lg-12 content order-lg-1 order-2" id="chatbox">                    

                  </div>
                </div>

              </div>
            </div>
            @endif



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
          <input id="excheck" class="hidden" type="text"/>
          <!-- FOR THE AUDIO STREAM -->
          <audio id="music">
            <source id="stream" src="#">
            </audio>
            <!-- END OF THE AUDIO STREAM -->
            <div class="b1">
              <span id="appn"><img src="{{asset('wcr/img/tiger.png')}}" alt="Logo" title="Logo" id="logo_1"/></img>&nbsp;WILDCATS RADIO</span>
              <button class="btn btn-default" type="button" id="play-button">

                <i class="fa fa-play playsize" aria-hidden="true" id="streamicon"></i>
                <i id="refreshicon" class="fa fa-refresh fa-spin fa-3x fa-fw playsize" style="display:none"></i>

              </button>
              <span style="position:absolute;margin-top: 50px;margin-left: 170px; "><label>Listeners:</label><span id="listeners">Identifying Listeners..</span></span>

              <marquee width="35%" height="20px" id="metadataholder"><span id="metadata"> Radio Connecting . . </span> </marquee>

              <a class="btn btn-default" id="mute-button"><i class="fa fa-volume-up mutesize" aria-hidden="true" id="muteonicon"></i></a> 
              <input id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"/>

              <!-- DEDICATION FOR PC  -->
              @if(!Auth::user())
              <button class="btn btn-default smallbuts" id="dedicationAccess"  type="button" title="Send Dedications" data-toggle="modal" data-target="#logModal">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<i class="fa fa-file-text" aria-hidden="true"></i>
              </button>
              @endif
              {{-- @if(Auth::user()) --}}
              <button class="btn btn-default smallbuts" type="button" title="Send Dedications" data-toggle="modal" data-target="#decModal">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<i class="fa fa-file-text" aria-hidden="true"></i>
              </button>
              {{-- @endif --}}

              <button class="btn btn-default smallbuts" type="button" id="mmbutton" title="Minimizae">

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
          <script src="{{asset('wcr/lib/waypoints/waypoints.min.js')}}"></script>
          <script src="{{asset('wcr/lib/counterup/counterup.min.js')}}"></script>
          <script src="{{asset('wcr/lib/superfish/hoverIntent.js')}}"></script>
          <script src="{{asset('wcr/lib/superfish/superfish.min.js')}}"></script>
          <script src="{{asset('wcr/lib/toastr/build/toastr.min.js')}}"></script>
          <script src="{{asset('wcr/lib/moment.js')}}"></script>

          <!-- DATATABLes JS -->
          <script src="{{asset('wcr/lib/datatables/jquery.dataTables.js')}}"></script>
          <script src="{{asset('wcr/js/dedicationview.js')}}"></script>
          <script src="{{asset('wcr/lib/datatables/dataTables.bootstrap4.js')}}"></script>

          
          <!-- Template Main Javascript File -->
          <script src="{{asset('wcr/js/main.js')}}"></script>
          <script src="{{asset('wcr/js/playtrigger.js')}}"></script>
          <script src="{{asset('wcr/js/toaststyle.js')}}"></script>
          <script src="{{asset('js/displayDedication.js')}}"></script>
          <script src="{{asset('wcr/lib/Jplayer/dist/jplayer/jquery.jplayer.min.js')}}"></script>
          <script src="{{asset('js/dedication.js')}}"></script>
          <script src="{{asset('wcr/js/login.js')}}"></script>
          <script src="{{asset('wcr/lib/popper/popper.min.js')}}"></script>
          <script src="{{asset('wcr/lib/bootstrap/js/bootstrap.min.js')}}"></script>
        </body>

        <!-- MODALS -->
        <!-- Dedication Modal -->
        {{-- @if(Auth::user()) --}}
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
                    <label for="song-name" class="col-form-label">Song:</label>
                    <input type="text" class="form-control" id="song-name" name="song-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label" >Message:</label>
                    <textarea class="form-control" id="message"></textarea>
                  </div>
                  {{--  @if(!Auth::user())
                   <div class="form-group">
                    <label for="sel1">College:</label>
                    <select class="form-control" id="college" name="college">
                      @foreach($colleges as $college)
                      <option value="{{$college->id}}">{{$college->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  @endif --}}
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="send" onclick="send()" class="btn btn-primary">Send message</button>
              </div>
            </div>
          </div>
        </div>
        {{-- @endif --}}
        <!-- End Dedication Modal -->

        <!-- Login Modal -->
        {{-- @if(!Auth::user()) --}}
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
                  <div class="form-group">
                    <label for="sel1">College:</label>
                    <select class="form-control" id="college" name="college">
                      @foreach($colleges as $college)
                      <option value="{{$college->id}}">{{$college->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" value="Login" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
        {{-- @endif --}}
        <!-- End Dedication Modal -->

        <!-- VIEW DEDICATION MODAL -->
        <div class="modal fade" id="viewdecModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4> Message </h4>
              </div>
              <div class="modal-body">
                <textarea class="form-control desc" id="ddcatview" style="height:300px;" Placeholder="Code Description" disabled></textarea>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
       <!-- VIEW DEDICATION MODAL -->


       <!-- Remove Modals -->

         <div class="modal fade" id="RemoveModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">\
              <input type="text" id="ddcatid" class="hidden"/>
              <div class="modal-header">
                <h4> Remove Dedication </h4>
              </div>
              <div class="modal-body">
                <h5> Are you sure you want to delete this Dedication?</h5>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" id="removeddcat">Delete</button>
             </div>
           </div>
         </div>
       </div>
       <!-- END OF REMOVE MODALS -->
              <!-- END OF MODALS-->

              </html>
