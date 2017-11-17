<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WildCats Radio</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-fonts.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar" id="nav">
            <div class="navbar-brand">
                <a class="navbar-item"  id="indexLink">
                    <img src="{{asset('img/logo.png')}}" alt="" width="112" height="28">
                </a>

                <div class="navbar-burger burger" data-target="navMenuTransparentExample" v-on:click="showNav = !showNav" v-bind:class="{ 'is-active' : showNav }" style="color:white">
                    <span></span>
                    <span></span>
                    <span></span>
                    

                </div>

            </div>

            <div id="navMenuTransparentExample" class="navbar-menu" v-bind:class="{ 'is-active' : showNav }"> 
                <div class="navbar-start">

                    <a data-scrol class="navbar-item " id="dedicationLink">
                        Dedications
                    </a>
                    <a data-scrol class="navbar-item " id="scheduleLink" >
                        Schedule
                    </a>
                </div>
                <div class="navbar-end">
                    @if(Auth::user())
                    <a align="right" data-scrol class="navbar-item " id="scheduleLink" >

                        Welcome, {{auth::user()->name}}

                    </a>
                    @endif
                </div>

            </div>
        </div>
    </nav>

    <div class="main" id="main">
       @yield('content')
   </div>

   <section class="section">
    <div class="footer">
        <div class="columns player is-mobile">
            <div class="column is-2-desktop is-5-mobile is-gapless">
                <audio id="music">
                    <source id="stream" src="#">
                    </audio>
                    <button class="btn btn-default" type="button" id="play-button"><i class="fa fa-play" aria-hidden="true" id="play-button-icon"></i></button>
                </div>
                <div class="column is-7-mobile is-centered">
                    <span id="metadata"> Despacito - Justin Bieber</span>
                </div>  
            </div>
        </div>
    </section>

</div>

<!-- for smooth navigation scroll -->
    {{-- <script src="{{assets('js/smooth-scroll.js')}}"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script> --}}

    <!-- mobile navbar -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script>

        new Vue({
            el: '#app',
            data: {
                showNav: false
            }
        });

        

        $('#indexLink').on('click',function(){
            // add gif pre-loader
            $.ajax({
                url:'/index',
                method:'GET',
                beforeSend: function() {
                    $('#main')
                    .html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
                },
                success:function(data){
                    $('#main').html(data);    
                },
                error:function(){
                    alert('fail to load.');
                }
            })
        });

        $('#dedicationLink').on('click',function(){
            // add gif pre-loader
            $.ajax({
                url:'/dedication',
                method:'GET',
                beforeSend: function() {
                    $('#main').html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
                },
                success:function(data){
                    $('#main').html(data);    
                },
                error:function(){
                    alert('fail to load.');
                }
            })
        });
        $('#scheduleLink').on('click',function(){
            $.ajax({
                url:'/schedule',
                method:'GET',
                beforeSend: function() {
                    $('#main').html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
                },
                success:function(data){
                    $('#main').html(data);    
                },
                error:function(){
                    alert('fail to load.');
                }
            })
        });
    </script>
</body>
</html>