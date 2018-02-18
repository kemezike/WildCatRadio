$(document).ready(function(){

  var kapoy = setInterval(function(){WhenPause();}, 1000);
  setInterval(function(){checkNetConnection(kapoy);}, 6000);
  setInterval(function(){radioTitle();}, 6000);
  


  var music = document.getElementById('music');
  var stream = document.getElementById('stream');
  var refreshIntervalId;
  var ts=(new Date()).getTime();
        // The play button
        $("#play-button").bind({
            // Click function
            click:function(){
            // CHECKING OF THE CONNECTING IF TRUE IT WILL STREAM
            PlayStop();
          }
        });

        // MUTE BUTTON
        $("#mute-button").bind({
          click:function(){
           Mute();
          }
        });

          // MiniMaximize BUTTON
          $("#mmbutton").bind({
          click:function(){
            Minimax();
          }
        });
      });

// TO CHECK IF THE RADIO IS ONLINE 
function checkNetConnection(val){ 
  $.ajax({
   type: 'GET',
   url: 'http://192.168.254.100:8000',
   success: function(data, textStatus, XMLHttpRequest) {
    $('#excheck').val("true");
    if($('#excheck').val("true") && $('#streamicon').hasClass("fa-refresh fa-spin fa-3x fa-fw"))
    {
      $('#streamicon').removeClass("fa-refresh fa-spin fa-3x fa-fw");
      $('#streamicon').addClass("fa-play");
    }
    val = setInterval( WhenPause(), 10000 );
  },
  error: function(XMLHttpRequest, textStatus, errorThrown) {
    $('#excheck').val("false");
    clearInterval(val);
    if($('#excheck').val("false") && $('#streamicon').hasClass("fa-stop") )
    {
      $('#streamicon').removeClass("fa-stop");
      $('#streamicon').addClass("fa-refresh fa-spin fa-3x fa-fw");
    }
    else if($('#excheck').val("false") && $('#streamicon').hasClass("fa-play"))
    {
      $('#streamicon').removeClass("fa-play");
      $('#streamicon').addClass("fa-refresh fa-spin fa-3x fa-fw");
    }
    else if($('#excheck').val("") && $('#streamicon').hasClass("fa-play"))
    {
      $('#streamicon').removeClass("fa-play");
      $('#streamicon').addClass("fa-refresh fa-spin fa-3x fa-fw");
    }

  }
});
}

// DISPLAY THE LOADING ANIMATION WHEN THE RADIO IS OFFLINE
function loadingAnimation() {
  if ($('#excheck').val("false") || $('#excheck').val("") )
  {
    $('#metadata').val("Radio offline :( ");
  }
 }

// DISPLAY THE RADIO TITLE
function radioTitle() {
  var url = 'http://192.168.254.100:8000/json.xsl';  
  $.ajax({
   type: 'GET',
   url: url,
   async: true,
   jsonpCallback: 'parseMusic',
   contentType: "application/json",
   dataType: 'jsonp',
   success: function(json) {
     $('#metadata').text(json['/stream.m3u']['title']); 
     $('#listeners').text(json['/stream.m3u']['listeners']); 
   },
   error: function(e) {
      $('#metadata').text("Radio Offline :( "); 
   }
 });

}

// SET THE VOLUME
function SetVolume(val)
    {
    	$('#volcheckerggwp').val(val);
        var player = document.getElementById('music');
        console.log('Before: ' + player.volume);
        player.volume = val / 100;
        console.log('After: ' + player.volume);
        if((val/100) == 100)
        {
            $('#muteonicon').removeClass("fa-volume-off");
            $('#muteonicon').addClass("fa-volume-up");
        }
        else if((val/100) == 0)
        {
            $('#muteonicon').removeClass("fa-volume-up");
            $('#muteonicon').addClass("fa-volume-off");
        }
        else if((val/100) > 0 && ((val/100) != 100) )
        {
             $('#muteonicon').removeClass("fa-volume-off");
            $('#muteonicon').addClass("fa-volume-up");;
        }
    }

// IT WILL DESTROY THE MUSIC WHEN IT STOPS AND CHANGES SOURCE AFTERWARDS
function WhenPause()
    {
        var music = document.getElementById('music');
        if( music.paused == true )
        {
        	$('#pausechecker').val("true");
        	$('#streamicon').removeClass("fa-stop");
            $('#streamicon').addClass("fa-play");
        	music.setAttribute("src",'#');
        	$('#stream').removeAttr('src');
        }
        else
        {
        	$('#pausechecker').val('false');
        }

    }

// PLAY/STOP
function PlayStop()
{
	 if ( $('#excheck').val() == "true" )
            {
              if( $('#streamicon').hasClass("fa-play")){
                $('#streamicon').removeClass("fa-play");
                $('#streamicon').addClass("fa-stop");
                music.setAttribute('src',"http://192.168.254.100:8000/stream.m3u");
                music.controls = false ;
                music.play();
              }
              else if ($('#streamicon').hasClass("fa-stop"))
              {
                $('#streamicon').removeClass("fa-stop");
                $('#streamicon').addClass("fa-play");
                music.pause();
                music.setAttribute('src',"#");
                $('#stream').removeAttr('src');
              }
            }
            // ELSE IF NO CONNECTION IT WILL INFORM THE USER 
            else
            {
              toastr.error('Please Try Again Later', 'Radio is Offline');


            }
}
// WHEN YOU PRESS THE MUTE BUTTON IT WILL MUTE THE MUSIC
function Mute()
{
	 if(music.volume > 0){
              $('#muteonicon').removeClass("fa-volume-off");
              $('#muteonicon').addClass("fa-volume-up");
              $('#vol-control').val(0);
              SetVolume(0);
            }
            else
            {
              $('#muteonicon').removeClass("fa-volume-up");
              $('#muteonicon').addClass("fa-volume-off");
              $('#vol-control').val(100);
              SetVolume(100);
            }
}
// IT WILL MINIMIZE AND MAXIMIZE THE FOOTER
function Minimax()
{
	if($('#metafooter').hasClass("footer")){
              $('#metafooter').removeClass("footer");
              $('#metafooter').addClass("footer1");
              $('#minbutton').removeClass("fa-window-minimize");
              $('#minbutton').addClass("fa-window-maximize");
              $('#vol-control').hide();
              $('#mute-button').hide();
              $('#appn').hide();
              $('#play-button').css('margin-right', '10px');
            }
            else
            {
              $('#metafooter').removeClass("footer1");
              $('#metafooter').addClass("footer");
              $('#minbutton').removeClass("fa-window-maximize");
              $('#minbutton').addClass("fa-window-minimize");
              $('#vol-control').show();
              $('#mute-button').show();
              $('#play-button').css('margin-right', '50px');
              $('#appn').show();
      
            }
}