function send(){
     $.ajax({
      type: 'post',
      url: '/chat',
      data: {
        'user_id' : {{auth::user()->id}},
        'message': $("#message").val(),
    },
    success: function(data) {
       console.log(data)
   }
});
 }
