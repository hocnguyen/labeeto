$(document).ready(function(){
    $(".fancybox").fancybox({
        'padding': 0,
        'opacity': true
    });
    $(".registrations").fancybox({
        'padding': 0,
        'opacity': true,
        'closeBtn'	: false,
        'closeClick'	: false,
        'width'		: 850,
        'height'		: 480,
        'autoSize'	: false,
        helpers : {
            overlay : {closeClick: false}
        }
    });

    $(".post-a-day").fancybox({
        'padding': 0,
        'opacity': true,
        'width'		: 850,
        'height'		: 400,
        'closeBtn'	: false,
        'autoSize'	: false,
        'closeClick'	: false,
        helpers : {
            overlay : {closeClick: false}
        }

    });
    $('#facebook').oauthpopup({
        path: '/members/login',
        width:600,
        height:300
    });

    $('#facebookPopup').oauthpopup({
        path: '/members/login',
        width:600,
        height:300
    });

    $('.btn-next').click(function(){
        $('.step-1').hide();
        $('.step-2').show();
    });

    $('.btn-edit').click(function(){
        $('.step-2').hide();
        $('.step-1').show();
    });

    $('.btn-next-step2').click(function(){
        $('.step-2').hide();
        $('.step-3').show();
    });

    $('.btn-skip').click(function(){
        /*$.fancybox.close();*/
        window.location.assign('/my_feed');
    });

   /* $('.signup-home').click(function(){
        var username = $("#username").val();
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if((username == '') || (email ='') || (password =='')){
            return true
        } else {
            alert(username);
            return false;
        }

    })*/


});
