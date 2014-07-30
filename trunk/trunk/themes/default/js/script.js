$(document).ready(function(){
    $.fn.setCursorToTextEnd = function() {
        var $initialVal = this.val();
        this.val($initialVal);
    };
    $('#homeBWBox .bwSearch input').val("");
    $('#homeBWBox .bwSearch input').focusin(function(){
        $('#homeBWBox .bwSearch').css('border','2px solid #333');
    });
    $('#homeBWBox .bwSearch input').focusout(function(){
        $('#homeBWBox .bwSearch').css('border','2px solid #9ACD32');
    });  
    /*$('.bx-viewport').on('mouseenter',function(){
        $( ".bx-controls-direction .bx-prev" ).animate({
            opacity: 1,
            'margin-left': "+=50"
        }, 500, function() {});

        $( ".bx-controls-direction .bx-prev" ).animate({
            opacity: 1,
            'margin-right': "+=50"
        }, 500, function() { });
    });
    $('.bx-viewport').on('mouseout',function(){
        $( ".bx-controls-direction .bx-prev" ).animate({
            opacity: 0,
            'margin-left': "-=50"
        }, 500, function() {});

        $( ".bx-controls-direction .bx-prev" ).animate({
            opacity: 0,
            'margin-right': "-=50"
        }, 500, function() {});
    });*/
    $('.bxslider').bxSlider({
        mode: 'fade',
        pagerShortSeparator: 'o', 
        captions: true,
        autoStart: true, 
        controls: true,
        auto:true,
    });
    $('#homeBWBox .bwSearch input[name=search]').on('keyup',function(){
        var key = $(this).val();
        $('.top-menu').remove();
        $('.home').remove();
        $('.main-footer').remove();
        $('#homeBWBox').html('');
        $('#homeBWBox').after('<img class="mainLoading" />');
        
        $.get( baseUrl+'/index/ajaxIndex?init_key='+key, function( response ) {
            $('#homeBWBox').html(response);
            $('#homeBWBox').removeAttr('id');
            $('#mainSearch .simpleSearch input.topic').focus().setCursorToTextEnd();
            $('.mainLoading').hide();
        });
    });
    $('.bw_video_slider').bxSlider({
        mode: 'fade',
        pagerShortSeparator: 'o', 
        captions: true,
        autoStart: true, 
        controls: false,
    });
    $('#simpleSearch .topic').on('keyup',function(){
        if($(this).val().length > 0)
            $('#simpleSearch .subtopic').removeAttr('readonly');
        else
            $('#simpleSearch .subtopic').attr('readonly','readonly');
    });
    $('#showCreateBox > input').change(function(){
        if($('#createTopic').is(':visible')){
            $('#createTopic').slideUp();
        } else{
            $('#createTopic').slideDown();
        }
    })
})

