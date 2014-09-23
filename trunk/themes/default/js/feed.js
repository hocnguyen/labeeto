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
        $('.content-photo-private').hide();
        $('.line-green-photo-pravite').hide();
        $('.content-video').show();
        $('.line-green-video').css('display','block');
    });
    
    $('#PhotoPrivate').click(function(){
        $('.content-profile').hide();
        $('.content-photo').hide();
        $('.content-video').hide();
        $('.line-green-photo').hide();
        $('.line-green-photo-pravite').hide();
        $('.line-green-video').hide();
        $('.content-photo-private').show();
        $('.line-green-photo-pravite').css('display','block');
    });
    
    /*******************************************Update Profile******************************************************/
    
    /*Education*/
    $('#id-education').click(function(){
        if ($('#form-education').is(':hidden')) {
            $('#form-education').show();
            $('#value-education').hide();
        }else{
            $('#form-education').hide();
            $('#value-education').show();
        }
    })
    
    $('#cancel-education').click(function(){
        $('#form-education').hide();
        $('#value-education').show();
    })
    
    /*Religion*/
    $('#id-religion').click(function(){
        if ($('#form-religion').is(':hidden')) {
            $('#form-religion').show();
            $('#value-religion').hide();
        }else{
            $('#form-religion').hide();
            $('#value-religion').show();
        }
    })
    
    $('#cancel-religion').click(function(){
        $('#form-religion').hide();
        $('#value-religion').show();
    })
    
    /*Ethnicity*/
    $('#id-ehtnicity').click(function(){
        if ($('#form-ehtnicity').is(':hidden')) {
            $('#form-ehtnicity').show();
            $('#value-ehtnicity').hide();
        }else{
            $('#form-ehtnicity').hide();
            $('#value-ehtnicity').show();
        }
    })
    
    $('#cancel-ehtnicity').click(function(){
        $('#form-ehtnicity').hide();
        $('#value-ehtnicity').show();
    })
    
    /*Height*/
    $('#id-height').click(function(){
        if ($('#form-height').is(':hidden')) {
            $('#form-height').show();
            $('#value-height').hide();
        }else{
            $('#form-height').hide();
            $('#value-height').show();
        }
    })
    
    $('#cancel-height').click(function(){
        $('#form-height').hide();
        $('#value-height').show();
    })
    
    
    
    
    /*Passion*/
    $('#id-passion').click(function(){
        if ($('#form-passion').is(':hidden')) {
            $('#form-passion').show();
            $('#value-passion').hide();
        }else{
            $('#form-passion').hide();
            $('#value-passion').show();
        }
    })
    
    $('#cancel-passion').click(function(){
        $('#form-passion').hide();
        $('#value-passion').show();
    })
    
    /*Goal*/
    $('#id-goal').click(function(){
        if ($('#form-goal').is(':hidden')) {
            $('#form-goal').show();
            $('#value-goal').hide();
        }else{
            $('#form-goal').hide();
            $('#value-goal').show();
        }
    })
    
    $('#cancel-goal').click(function(){
        $('#form-goal').hide();
        $('#value-goal').show();
    })
    
    /*Smoke*/
    $('#id-smoke').click(function(){
        if ($('#form-smoke').is(':hidden')) {
            $('#form-smoke').show();
            $('#value-smoke').hide();
        }else{
            $('#form-smoke').hide();
            $('#value-smoke').show();
        }
    })
    
    $('#cancel-smoke').click(function(){
        $('#form-smoke').hide();
        $('#value-smoke').show();
    })
    
    /*Drink*/
    $('#id-drink').click(function(){
        if ($('#form-drink').is(':hidden')) {
            $('#form-drink').show();
            $('#value-drink').hide();
        }else{
            $('#form-drink').hide();
            $('#value-drink').show();
        }
    })
    
    $('#cancel-drink').click(function(){
        $('#form-drink').hide();
        $('#value-drink').show();
    })
    
    
    /*Excercise*/
    $('#id-excercise').click(function(){
        if ($('#form-excercise').is(':hidden')) {
            $('#form-excercise').show();
            $('#value-excercise').hide();
        }else{
            $('#form-excercise').hide();
            $('#value-excercise').show();
        }
    })
    
    $('#cancel-excercise').click(function(){
        $('#form-excercise').hide();
        $('#value-excercise').show();
    })
    
    /*Children*/
    $('#id-children').click(function(){
        if ($('#form-children').is(':hidden')) {
            $('#form-children').show();
            $('#value-children').hide();
        }else{
            $('#form-children').hide();
            $('#value-children').show();
        }
    })
    
    $('#cancel-children').click(function(){
        $('#form-children').hide();
        $('#value-children').show();
    })
    
    /*about*/
    $('#id-about').click(function(){
        if ($('#form-about').is(':hidden')) {
            $('#form-about').show();
            $('#value-about').hide();
        }else{
            $('#form-about').hide();
            $('#value-about').show();
        }
    })
    
    $('#cancel-about').click(function(){
        $('#form-about').hide();
        $('#value-about').show(); 
    })
    
    /*diet*/
    $('#id-diet').click(function(){
        if ($('#form-diet').is(':hidden')) {
            $('#form-diet').show();
            $('#value-diet').hide();
        }else{
            $('#form-diet').hide();
            $('#value-diet').show();
        }
    })
    
    $('#cancel-diet').click(function(){
        $('#form-diet').hide();
        $('#value-diet').show(); 
    })
    
    /*Gym*/
    $('#id-gym').click(function(){
        if ($('#form-gym').is(':hidden')) {
            $('#form-gym').show();
            $('#value-gym').hide();
        }else{
            $('#form-gym').hide();
            $('#value-gym').show();
        }
    })
    
    $('#cancel-gym').click(function(){
        $('#form-gym').hide();
        $('#value-gym').show(); 
    })
    
    /*All header*/
    $('#id-gender').click(function(){
        if ($('#form-gender').is(':hidden')) {
            $('#form-gender').show();
            $('#value-gender').hide();
        }else{
            $('#form-gender').hide();
            $('#value-gender').show();
        }
    })
    
    $('#cancel-gender').click(function(){
        $('#form-gender').hide();
        $('#value-gender').show(); 
    });
    /* Post custom questions */
    $('.post-question').click(function(){

        var answer = $('#answer').val();
        var question = $('#question').val();
        if(answer =='' || question ==''){
            alert('Phuoc custom validate cho ni nge');
        }else {
            $.get('/user/addQuestions?question='+question+'&answer='+answer,function(data){
                alert(data); // data nay la id cua question vua moi dc saved.
                // cho nay cho hien ra question va cau tra loi kem theo id o tren.
            });
        }
    });
});
