$(document).ready(function(){

    $(".fancybox").fancybox({
        'padding': 0,
        'opacity': true
    });

    $('#facebook').oauthpopup({
        path: '/user/login',
        width:600,
        height:300
    });

    $('#facebookPopup').oauthpopup({
        path: '/user/login',
        width:600,
        height:300
    });

    $('.btn-next').click(function(){
        var name_exists = document.getElementById("username-exists").value;
        var username = $('#username-step2').val();
        var address = $('#address').val();
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
        var validate = checkValidate(name_exists,username,address,day,month,year,ehtnicity,feet,inche);
        if(validate ==0){
           /* $.get('user/checkUser?name='+username+'&email='+ $.session.get('email'),function(html){
                if(html ==0){

                } else {
                    alert('Username or email exists, Please try again with other name!');
                }
            });*/
            $.session.set('username', username);
            $.session.set('birthday', month+"/"+day+"/"+year);
            $.session.set('ehtnicity', ehtnicity);
            $.session.set('height', feet+'.'+inche);
            $.session.set('gender', gender);
            $.session.set('relations', relation);
            setValueStep2();
            $('.step-1').hide();
            $('.step-2').show();
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
            variableGet+="address="+ $.session.get('address')+"&";
            variableGet+="latitude="+ $.session.get('latitude')+"&";
            variableGet+="longtitude="+ $.session.get('longitude')+"&";
            variableGet+="relations="+ $.session.get('relations')+"&";
            variableGet+="career="+career+"&";
            variableGet+="education="+education+"&";
            variableGet+="religion="+religion+"&";
            variableGet+="excercise="+excercise+"&";
            variableGet+="passion="+passion+"&";
            variableGet+="goal="+goal+"&";
            variableGet+="smoke="+smoke+"&";
            variableGet+="drink="+drink+"&";
            variableGet+="photo="+$.session.get("avatar");
            $.get("/user/register?"+variableGet,function(){
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
        var email_exists =document.getElementById("email-exists").value;
        var name_exists = document.getElementById("username-exists").value;
        var result = checkValidateSignUp(username,email,password,email_exists,name_exists);
        if(result ==0){
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
            return true;
         }
        return false;
    });

    $('#upload').click(function(){
        $('.option-upload').hide();
        $('.upload-avatar').show();
    });
    $('#uploadAvatar').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/UploadAvatar',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('.avatar').html('<img src="/uploads/avatar/'+data+'"/>');
                $('.upload-avatar').hide();
                $.session.set('avatar',data);
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    function checkValidate(name_exists,username,address,day,month,year,ehtnicity,feet,inche){
        var check =0;
        if(name_exists ==1){
            check=10;// Username not empty
            return check;
        }
        if(username ==''){
            check=1;// Username not empty
            return check;
        }

        if(address==''){
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
    function checkValidateSignUp(username, email, password,email_exists,name_exists){
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
        }
        
        var re = /^[^\d]{1}.*(?=.{8,})(?=.*[A-Za-z])(?=.*[\d]).*$/;
        var red=/^.*(?=.{4,20})(?=.*[A-Za-z])(?=.*[\d]).*$/;

        var pw = re.exec(password);
        if (!pw) {
            check = 4 ;// Password must 8 characters long and contain atleast 1 uppercase letter and 1 number
            return check;
        }
        var space=red.exec(username);
        if(!space){
            check = 7;
            return check;
        }

        if (email_exists ==1) {
            check = 5 ;// Email exists.
            return check;
        }
        if (name_exists ==1) {
            check = 6 ;// Username exists.
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
            $('.error').html('Please choose address !');
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
         html+= getFormattedDate($.session.get('birthday'))+" <br/>";
         html+= $.session.get('height')+" ft, "+gender+"<br/>";
         html+= $.session.get('address');
        if($.session.get("avatar")){
            var img_avatar = "<img src='/uploads/avatar/"+$.session.get("avatar")+"' />";
        }else {
            var img_avatar = "<img src='/themes/default/images/no-avatar.png' />";
        }

        $('.avatar-step2').html(img_avatar);
        $('.detail-temp-info').html(html);

    }
    function getFormattedDate(input){
        var pattern=/(.*?)\/(.*?)\/(.*?)$/;
        var result = input.replace(pattern,function(match,p1,p2,p3){
            var months=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
            return months[(p1-1)]+" "+(p2<10?"0"+p2:p2)+", "+p3;
        });
        return result;
    }
    /*function checkValidate(firstname,lastname,address,birthday,ehtnicity,feet,inches,gender){
        if(firstname =='' || lastname =='' || address =='' || birthday)

    }*/


    $('.profile-picture').click(function(){
        $('.option-upload').slideToggle();
        $('.upload-avatar').hide();

    });

    $('#country').change(function(){
        var country = $('#country').val();
        $.get("/index/getState?country="+country,function(html){
            $('#state').html(html);
        });
    });

    $('#state').change(function(){
        var state = $('#state').val();
        $.get("/index/getCity?state="+state,function(html){
            $('#city').html(html);
        });
    });
    
    $('#form-education').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveEducation',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log(data);
                $.session.set('avatar',data);
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });

    $('.resetpw').live('click',function(){
        var email =$('.email-pw').val();
        if(email !=''){
            $('.content-lost').html('');
            $('.content-lost').addClass('loading');
            $.get('/user/lostPassword?email='+email,function(data){
                $('.content-lost').html(data);
                $('.content-lost').css('padding','25px');
                $('.content-lost').removeClass('loading');
            });
        } else {
            alert('Please fill your email!');
        }
    })
});
