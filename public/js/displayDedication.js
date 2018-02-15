// DISPLAY DEDICATION
function chat(){
  $.ajax({
   type: 'GET',
   url: '/chat',
        dataType:"json", //to parse string into JSON object,
        success: function(data){ 
        	if(data){
        		var len = data.length;
        		var txt = "";
        		var created_at;
        		var h;
        		var m;
            var s;
            for(var i=0;i<10;i++){
              if(!data[i].name)
                data[i].name="Anonymous";

              if(data[i].college_name)
                txt += '<div class="container darker"><p>"' + data[i].message + '"</p><span class="time-left">'+ data[i].name +'</span><br><span class="time-left"> Song: "'+ data[i].song_name +'"</span><br><span class="time-left">'+ data[i].college_name +'</span><br><span class="time-left">' + moment(data[i].created_at).format('MMMM Do YYYY, h:mm a') + '</span><br><hr></div>'; 
              else
                txt += '<div class="container darker"><p>"' + data[i].message + '"</p><span class="time-left">'+ data[i].name +'</span><br><span class="time-left"> Song: "'+ data[i].song_name +'"</span><br><span class="time-left">' + moment(data[i].created_at).format('MMMM Do YYYY, h:mm a') + '</span><br><hr></div>';
            }
          if(txt != ""){
           $("#chatbox").html(txt);

         }
       }
     },
     error: function(jqXHR, textStatus, errorThrown){
        	// alert('error: ' + textStatus + ': ' + errorThrown);
        }
      });
}