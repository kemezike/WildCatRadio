    function send(){
       $.ajax({
          type: 'post',
          url: '/chat',
          data: {
            'message': $("#message").val(),
        },
        success: function(data) {
         console.log(data)
         $('#decModal').modal('hide');
         $('#message').val("");
     }
 });
   }