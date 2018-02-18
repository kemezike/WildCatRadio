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
       if(data=="6 hours please!")
        toastr.error('6 hours pa gago', 'Error!!');
      else
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