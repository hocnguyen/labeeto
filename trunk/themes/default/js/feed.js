$(document).ready(function(){
    /*Feed page */
    $('.profile-nav').click(function(){
        if ($('.menu-profile').is(':hidden')) {
            $('.test-nav').css('background', '#232f37');
            $('.menu-profile').css('display','block');
        } else {
            $('.test-nav').css('background', 'none');
            $('.menu-profile').css('display','none');
        }

    });

    $('.photo-private').click(function(){
        $('.content-profile').hide();
        $('.content-photo').show();
    });
});
