    $('#indexLink').on('click',function(){
        $.ajax({
            url:'/index',
            method:'GET',
            success:function(data){
                $('#main').html(data);    
            },
            error:function(){
                alert('fail to load.');
            }
        })
    });