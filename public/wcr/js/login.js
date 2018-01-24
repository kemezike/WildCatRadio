    function login(){
       $.ajax({
          type: 'post',
          url: '/register',
          data: {
            'name' : ("#name").val(),
        },
        success: function(data) {
         console.log(data)
     }
 });
   }