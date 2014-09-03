$(document).ready(function(){

    $(".fancybox").fancybox({
        'padding': 0,
        'opacity': true
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
        var username = $('#username-step2').val();
        var zipcode = $('#zipcode').val();
        var days = document.getElementById("day");
        var day = days.options[days.selectedIndex].value;
        var months = document.getElementById("month");
        var month = months.options[months.selectedIndex].value;
        var years = document.getElementById("year");
        var year = years.options[years.selectedIndex].value;
        var feets = document.getElementById("feet");
        var feet = feets.options[feets.selectedIndex].value;
        var inches = document.getElementById("inches");
        var inche = inches.options[inches.selectedIndex].value;
        var relations = document.getElementById("relations");
        var relation = relations.options[relations.selectedIndex].value;
        var ehtnicity = $('#ehtnicity').val();
        var gender = $( "input:radio[name=gender]:checked" ).val();
        var validate = checkValidate(username,zipcode,day,month,year,ehtnicity,feet,inche);
        if(validate ==0){
            $.ajax({
                url: "http://maps.googleapis.com/maps/api/geocode/json",
                cache: false,
                dataType: "json",
                type: "GET",
                data: "address=" + zipcode,
                success: function(result, success) {
                    if(result['status'] =="OK"){
                        $.session.set('address', result['results'][0]['formatted_address']);
                        $.session.set('latitude', result['results'][0]['geometry']['location']['lat']);
                        $.session.set('longtitude', result['results'][0]['geometry']['location']['lng']);
                        $.session.set('username', username);
                        $.session.set('zipcode', zipcode);
                        $.session.set('birthday', year+"/"+month+"/"+day);
                        $.session.set('ehtnicity', ehtnicity);
                        $.session.set('height', feet+'.'+inche);
                        $.session.set('gender', gender);
                        $.session.set('relations', relation);
                        setValueStep2();
                        $('.step-1').hide();
                        $('.step-2').show();
                    } else {
                        $(".error-zip").show('slider');
                    }

                }

            });

            return false;
        }
    });

    $('.btn-edit').click(function(){
        $('.step-2').hide();
        $('.step-1').show();
    });

    $('.btn-next-step2').click(function(){
        var career = $('#career').val();
        var education = $('#education').val();
        var religion = $('#religion').val();
        var excercise = $('#excrise').val();
        var passion = $('#passion').val();
        var goal = $('#goal').val();
        var smoke = $('#smoke').val();
        var drink = $('#drink').val();
        if(career !='' && religion !='' && passion !='' && goal !=''){
            var variableGet = "username="+$.session.get('username')+"&";
            variableGet+="email="+ $.session.get('email')+"&";
            variableGet+="password="+ $.session.get('password')+"&";
            variableGet+="birthday="+ $.session.get('birthday')+"&";
            variableGet+="height="+ $.session.get('height')+"&";
            variableGet+="gender="+ $.session.get('gender')+"&";
            variableGet+="ehtnicity="+ $.session.get('ehtnicity')+"&";
            variableGet+="zipcode="+ $.session.get('zipcode')+"&";
            variableGet+="address="+ $.session.get('address')+"&";
            variableGet+="latitude="+ $.session.get('latitude')+"&";
            variableGet+="longtitude="+ $.session.get('longtitude')+"&";
            variableGet+="relations="+ $.session.get('relations')+"&";
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

        }
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
             /*$.get('/members/checkUser?name='+username,function(data){
                 if(data ==0){
                     showMessageError(5);
                 } else {
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
                     $.session.set('username', username);
                     $.session.set('email', email);
                     $.session.set('password', password);
                     $('#username-step2').val(username);
                 }
             })*/
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
             $.session.set('username', username);
             $.session.set('email', email);
             $.session.set('password', password);
             $('#username-step2').val(username);

         }
    });

    function checkValidate(username,zipcode,day,month,year,ehtnicity,feet,inche){
        var check =0;
        if(username ==''){
            check=1;// Username not empty
            return check;
        }
        if(zipcode ==''){
            check=6;// Address not empty
            return check;
        }
        if(day =='' || month=='' || year==''){
            check=7;// Birthday not empty
            return check;
        }
        if(ehtnicity ==''){
            check=8;// Ehtnicity not empty
            return check;
        }
        if(feet =='' || inche=='' ){
            check=9;// Height not empty
            return check;
        }
        return check;

    }
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
        }else if(error ==6) {
            $('.error').html('Address not empty!');
        }else if(error ==7) {
            $('.error').html('Birthday not empty!');
        }else if(error ==8) {
            $('.error').html('Ehtnicity not empty!');
        }else if(error ==9) {
            $('.error').html('Height not empty!');
        }
    }

    function setValueStep2(){
        var gender = ($.session.get('gender')==0?"Male":"Female");
        var html = $.session.get('username')+" <br/>";
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
