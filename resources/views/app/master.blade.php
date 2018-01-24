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
    <script src="{{asset('js/clock.js')}}"></script>
    <script src="{{asset('js/displayDedication.js')}}"></script>
    <script>

        function radioTitle() {


// this is the URL of the json.xml file located on your server.
var url = 'http://192.168.254.101:8000/json.xsl'; 

$.ajax({
   type: 'GET',
   url: url,
   async: true,
   jsonpCallback: 'parseMusic',
   contentType: "application/json",
   dataType: 'jsonp',
   success: function(json) {
        // this is the element we're updating that will hold the track title
        $('#track-title').html(json['/stream.m3u']['title']); 
        // this is the element we're updating that will hold the listeners count
        // $('#listeners').val(json['/stream']['listeners']); 
    },
    error: function(e) {
       console.log(e.message);
   }
});
}

function startMetadata(){

  setTimeout(function(){radioTitle();}, 500);
  setInterval(function(){radioTitle();}, 500); // we're going to update our html elements / player every 15 seconds

}

</script>
<style>
.container::after {
    content: "";
    clear: both;
    display: table;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}

</style>

{{-- modal --}}
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

</head>
<body onload="startTime(); startMetadata(); radio();">

    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div style="display: none" id="jp_container_1" class="jp-audio-stream" role="application" aria-label="media player">
    <div class="jp-type-single">
        <div class="jp-gui jp-interface">
            <div class="jp-controls">
                <button class="jp-play" role="button" tabindex="0">play</button>
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
        <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
    </div>
</div>

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

                    {{-- @if(auth::user()) --}}
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
                    <input type="hidden" id="user_id" value="{{auth::user()->id}}">
                    @else
                    <input type="hidden" id="user_id" value="">
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
                    <button class="btn btn-default" type="button" id="play-button"><i class="fa fa-play" aria-hidden="true" id="play-button-icon"></i></button>
                </div>
                <div class="column is-7-mobile is-centered">
                    <p><span id="track-title" class="metadata" style="font-size: 20px; color: white;"> </span></p> 
                </div>  
            </div>
        </div>
    </section>
</div>

<!-- mobile navbar -->
<script src="{{asset('js/vue.js')}}"></script>

@if(auth::user())
<script src="{{asset('js/dedication.js')}}"></script>
@endif
<script src="{{asset('js/links.js')}}"></script>

<script>
    new Vue({
        el: '#app',
        data: {
            showNav: false
        }
    });

    $('#indexLink').on('click',function(){
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
        @if(auth::user())
        $.ajax({
            url:'/dedication',
            method:'GET',
            beforeSend: function() {
                $('#main').html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
            },
            success:function(data){
                $('#main').html(data);
                chat();
                setInterval(function(){chat()},1000);


            },
            error:function(){
                alert('fail to load.');
            }
        })
        @else
        $.ajax({
            url:'/signup',
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
        @endif

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