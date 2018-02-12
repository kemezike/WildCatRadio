    // SEND DEDICATION
    function send(){
       $.ajax({
          type: 'post',
          url: '/chat',
          data: {
            'message': $("#message").val(),
        },
        success: function(data) {
         console.log(data)
         toastr.success('Daghan Salamat!', 'Dedication Sent!');
         $("#decModal").modal('hide');
         $('#message').val("");
     }
 });
   }