

$('#indexLink').on('click',function(){
            // add gif pre-loader
            $.ajax({
                url:'/index',
                method:'GET',
                beforeSend: function() {
                    $('#main')
                    .html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
                },
                success:function(data){
                    $('#main').html(data);    
                },
                error:function(){
                    alert('fail to load.');
                }
            })
        });

$('#dedicationLink').on('click',function(){
            // add gif pre-loader
            $.ajax({
                @if(auth::user())
                url:'/dedication',
                @else
                url:'/signup',
                @endif
                method:'GET',
                beforeSend: function() {
                    $('#main').html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
                },
                success:function(data){
                    $('#main').html(data);
                    scrollDown();
                    chat();
                    setInterval(function(){chat()},1000);
                    

                },
                error:function(){
                    alert('fail to load.');
                }
            })
        });

$('#scheduleLink').on('click',function(){
    $.ajax({
        url:'/schedule',
        method:'GET',
        beforeSend: function() {
            $('#main').html('<section style="padding-left:110px" class="section dedication is-centered"><img src="{{asset('img/loading.gif')}}"/></section>');
        },
        success:function(data){
            $('#main').html(data);    
        },
        error:function(){
            alert('fail to load.');
        }
    })
});