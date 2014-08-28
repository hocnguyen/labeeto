$(document).ready(function(){
    $(".fancybox").fancybox({
        'padding': 0,
        'opacity': true
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
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var address = $('#address').val();
        var birthday = $( "#day").val()+'/'+$( "#month").val()+'/'+$( "#year").val();
        var ehtnicity = $('#ehtnicity').val();
        var height = $('#feet').val()+"."+$('#inches').val();
        var gender = $( "input:radio[name=gender]:checked" ).val();
        //var validate = checkValidate(firstname,lastname,address,birthday,ehtnicity,feet,inches,gender);
        $.session.set('firstname', firstname);
        $.session.set('lastname', lastname);
        $.session.set('address', address);
        $.session.set('birthday', birthday);
        $.session.set('ehtnicity', ehtnicity);
        $.session.set('height', height);
        $.session.set('gender', gender);
        setValueStep2();
        $('.step-1').hide();
        $('.step-2').show();
    });

    $('.btn-edit').click(function(){
        $('.step-2').hide();
        $('.step-1').show();
    });

    $('.btn-next-step2').click(function(){
        var career = $('#career').val();
        var education = $('#education').val();
        var religion = $('#religion').val();
        var excercise = $( "#excercise").val();
        var passion = $('#passion').val();
        var goal = $('#goal').val();
        var smoke = $('#smoke').val();
        var drink = $('#drink').val();
        //var validate = checkValidate(firstname,lastname,address,birthday,ehtnicity,feet,inches,gender);
        var variableGet = "username="+$.session.get('username')+"&";
        variableGet+="email="+ $.session.get('email')+"&";
        variableGet+="password="+ $.session.get('password')+"&";
        variableGet+="firstname="+ $.session.get('firstname')+"&";
        variableGet+="lastname="+ $.session.get('lastname')+"&";
        variableGet+="birthday="+ $.session.get('birthday')+"&";
        variableGet+="birthday="+ $.session.get('birthday')+"&";
        variableGet+="height="+ $.session.get('height')+"&";
        variableGet+="gender="+ $.session.get('gender')+"&";
        variableGet+="ehtnicity="+ $.session.get('ehtnicity')+"&";
        variableGet+="address="+ $.session.get('address')+"&";
        variableGet+="career="+career+"&";
        variableGet+="education="+education+"&";
        variableGet+="religion="+religion+"&";
        variableGet+="excercise="+excercise+"&";
        variableGet+="passion="+passion+"&";
        variableGet+="goal="+goal+"&";
        variableGet+="smoke="+smoke+"&";
        variableGet+="drink="+drink;
        $.get("/members/register?"+variableGet,function(){
            $.session.clear();
            $('.step-2').hide();
            $('.step-3').show();
        });

    });

    $('.btn-skip').click(function(){
        /*$.fancybox.close();*/
        window.location.assign('/my_feed');
    });

    $('.signup-home').click(function(){
        var username = $("#username").val();
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var result = checkValidateSignUp(username,email,password);

        if(result ==0){
            $.get('/members/checkUser?name='+username,function(data){
                if(data ==0){
                    showMessageError(5);
                }else {
                    $.session.set('username', username);
                    $.session.set('email', email);
                    $.session.set('password', password);
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
                }
            });

        } else {
            showMessageError(result);
            return false;
        }
    });
    function checkValidateSignUp(username, email, password){
        var check =0;
        if((/\s/g.test(username) == true) || (username == '')){
            check=1; // username incorrect
            return check;
        }
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
            check=2; // email incorrect
            return check;
        }
        if(password == ''){
            check = 3 ;// Password empty
            return check;
        }else if(password.length <=6) {
            check = 4 ;// Password must have maximum 6 character.
            return check;
        }
        return check;


    }

    function showMessageError(error){
        if(error ==1) {
            $('.error').html('Username incorrect');
        } else if(error ==2) {
            $('.error').html('Email incorrect');
        }else if(error ==3) {
            $('.error').html('Password can\'t empty');
        }else if(error ==4) {
            $('.error').html('Password must have maximum 6 character.');
        }else if(error ==5) {
            $('.error').html('This username or email used to before, Please check again!');
        }
    }

    function setValueStep2(){
        var gender = ($.session.get('gender')==0?"Male":"Female");
        var html = $.session.get('firstname')+" "+$.session.get('lastname')+" <br/>";
         html+= $.session.get('birthday')+" <br/>";
         html+= $.session.get('height')+", "+gender+" <br/>";
         html+= $.session.get('address');
        $('.detail-temp-info').html(html);

    }
    /*function checkValidate(firstname,lastname,address,birthday,ehtnicity,feet,inches,gender){
        if(firstname =='' || lastname =='' || address =='' || birthday)

    }*/
    $('.profile-picture').click(function(){
            $('.option-upload').slideToggle();
    });



});
