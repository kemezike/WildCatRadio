    // SEND DEDICATION
    function send(){
       $.ajax({
          type: 'post',
          url: '/chat',
          data: {
            'message': $("#message").val(),
            'song_name': $("#song-name").val(),
        },
        success: function(data) {
         console.log(data)
         toastr.success('Daghan Salamat!', 'Dedication Sent!');
         $("#decModal").modal('hide');
         $('#message').val("");
     },
        error: function(data) {
         console.log(data)

         toastr.error('Message must not be empty.', 'Oops.');
         // $("#decModal").modal('hide');
         // $('#message').val("");
     }
 });
   }