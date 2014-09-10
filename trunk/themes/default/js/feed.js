$(document).ready(function(){
    /*Feed page */
    $('.profile-nav').click(function(){
        if ($('.menu-profile').is(':hidden')) {
            $('.test-nav').css('background', '#232f37');
            $('.menu-profile').css('display','block');
            $('.username-nav').css('color', '#5dc1ea');
        } else {
            $('.test-nav').css('background', 'none');
            $('.menu-profile').css('display','none');
            $('.username-nav').css('color', '#c0c0c0');
        }

    });
    
    $("#toggle").click(function(){
        $(".menu-slide").toggle();
    });
   
    $("#toggle-notification").click(function(){
        $(".menu-notification").toggle();
    });


    $('.photo-private').click(function(){
        $('.content-profile').hide();
        $('.content-photo').show();
    });
});
