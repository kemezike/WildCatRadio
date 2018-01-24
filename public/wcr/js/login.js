    function register(){
      alert($("#username").val());

      $.ajax({
        type: 'post',
        url: '/register',
        data: {
          'name': $("#username").val(),
        },
        success: function(data) {
          $("#dedicationTitle").load('/main #dedicationTitle');
         console.log(data)
       }
     });
    }