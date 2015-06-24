$(function() {

    $('.search .game').change(function() {
        $.get('/api/games/' + $(this).val() + '/activities', function(activities) {
            $('.activity-select option').remove();
            $('<option>')
                .text('Any')
                .appendTo('.activity-select');
            $.each(activities, function(index, value) {
                $('<option>')
                    .attr('value', value.id)
                    .text(value.activity)
                    .appendTo('.activity-select');
            })
        });
    });

    $(document).ready(function(){
      
        $('.carousel').slick({
          dots: true,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: 'linear'
        });

    });

     $('.myImages img').load(function(){
        var height = $(this).height();
        var width = $(this).width();
        console.log('widthandheight:',width,height);
        if(width>height){
            $(this).addClass('wide-img');
        }else{
            $(this).addClass('tall-img');
        }
    });




});



