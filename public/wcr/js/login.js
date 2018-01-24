    function register(){
      alert($("#username").val());
       $.ajax({
          type: 'post',
          url: '/register',
          data: {
            'name': $("#username").val(),
        },
        success: function(data) {
         console.log(data)
     }
 });
   }