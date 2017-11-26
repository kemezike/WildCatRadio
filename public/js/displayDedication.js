 function chat(){
            $.ajax({
                type: 'GET',
                url: '/chat',
        dataType:"json", //to parse string into JSON object,
        success: function(data){ 
            if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                        if(data[i].name && data[i].message){
                            txt += '<div class="card">                    <div class="card-body">                        <p class="card-text float-left">'+ data[i].name+': ' + data[i].message + '</p>                    </div>                </div>'
                        }
                    }
                    if(txt != ""){
                        $("#chatbox").html(txt);
                        
                    }
                }
            }
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('error: ' + textStatus + ': ' + errorThrown);
        }
    });
        }