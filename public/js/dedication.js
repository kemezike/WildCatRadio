    function send(){
       $.ajax({
          type: 'post',
          url: '/chat',
          data: {
            'user_id' : $("#user_id").val(),
            'message': $("#message").val(),
        },
        success: function(data) {
         console.log(data)
     }
 });
   }