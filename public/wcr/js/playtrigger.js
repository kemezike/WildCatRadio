$(document).ready(function(){

  setInterval(function(){checkNetConnection();}, 6000);
  setInterval(function(){radioTitle();}, 6000);


  var music = document.getElementById('music');
  var stream = document.getElementById('stream');
  var ts=(new Date()).getTime();
        // The play button
        $("#play-button").bind({
            // Click function
            click:function(){
            // CHECKING OF THE CONNECTING IF TRUE HE WILL STREAM
            if ( $('#excheck').val() == "true" )
            {
              if( $('#streamicon').hasClass("fa-play")){
                $('#streamicon').removeClass("fa-play");
                $('#streamicon').addClass("fa-stop");
                music.setAttribute('src',"http://192.168.43.45:8000/stream.m3u");
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
              alert("Radio is Offline");
            }
          }
        });

        // MUTE BUTTON
        $("#mute-button").bind({
          click:function(){
            if(music.muted){
              music.muted = false;
              $('#muteonicon').removeClass("fa-volume-off");
              $('#muteonicon').addClass("fa-volume-up");
               $('#vol-control').val(100);
            }
            else
            {
              music.muted = true;
              $('#muteonicon').removeClass("fa-volume-up");
              $('#muteonicon').addClass("fa-volume-off");
              $('#vol-control').val(0);
            }
          }
        });

          $("#shenbogoka").bind({
          click:function(){
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
        });
      });

function checkNetConnection(){ 
  $.ajax({
   type: 'GET',
   url: 'http://192.168.43.45:8000',
   success: function(data, textStatus, XMLHttpRequest) {
    $('#excheck').val("true");
    if($('#excheck').val("true") && $('#streamicon').hasClass("fa-refresh fa-spin fa-3x fa-fw"))
    {
      $('#streamicon').removeClass("fa-refresh fa-spin fa-3x fa-fw");
      $('#streamicon').addClass("fa-play");
    }
  },
  error: function(XMLHttpRequest, textStatus, errorThrown) {
    $('#excheck').val("false");
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

function loadingAnimation() {
  if ($('#excheck').val("false") || $('#excheck').val("") )
  {
    $('#metadata').val("Radio offline :( ");
  }
 }

function radioTitle() {
  var url = 'http://192.168.43.45:8000/json.xsl';  
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

function SetVolume(val)
    {
        var player = document.getElementById('music');
        console.log('Before: ' + player.volume);
        player.volume = val / 100;
        console.log('After: ' + player.volume);
        if($('#vol-control').val() == 100)
        {
            $('#muteonicon').removeClass("fa-volume-off");
            $('#muteonicon').addClass("fa-volume-up");
        }
        else if($('#vol-control').val() == 0)
        {
            $('#muteonicon').removeClass("fa-volume-up");
            $('#muteonicon').addClass("fa-volume-off");
        }
        else if($('#vol-control').val() > 0)
        {
             $('#muteonicon').removeClass("fa-volume-off");
            $('#muteonicon').addClass("fa-volume-up");;
        }
    }
