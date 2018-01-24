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
        			for(var i=4;i>=0;i--){
                            txt += '<div class="container darker"><p>' + data[i].message + '</p><span class="time-left">'+ data[i].name +'</span><br><span class="time-left">College Of Computer Studies</span><br><span class="time-left">' + data[i].created_at + '</span><br><hr></div>'; 
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