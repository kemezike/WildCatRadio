    function send(){
       $.ajax({
          type: 'post',
          url: '/chat',
          data: {
            'user_id' : 1,
            'message': $("#message").val(),
        },
        success: function(data) {
         console.log(data)
     }
 });
   }