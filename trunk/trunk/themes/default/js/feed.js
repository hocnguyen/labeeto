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
        $(".clicked-notification").hide();
    });


    $('#PhotoNomal').click(function(){
        $('.content-profile').hide();
        $('.content-video').hide();
        $('.line-green-video').hide();
        $('.line-green-photo-pravite').hide();
        $('.content-photo-private').hide();
        $('.content-photo').show();
        $('.line-green-photo').css('display','block');
        
    });
    
    $('#VideosNormal').click(function(){
        $('.content-profile').hide();
        $('.content-photo').hide();
        $('.line-green-photo').hide();
        $('.content-video').show();
        $('.line-green-video').css('display','block');
    });
    
    $('#PhotoPrivate').click(function(){
        $('.content-profile').hide();
        $('.content-photo').hide();
        $('.line-green-photo').hide();
        $('.content-photo-private').show();
        $('.line-green-photo-pravite').css('display','block');
        
    });
});
