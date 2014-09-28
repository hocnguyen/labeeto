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

    $('.close-photo').click(function(){
        $('.content-profile').show();
        $('.content-video').hide();
        $('.line-green-video').hide();
        $('.line-green-photo-pravite').hide();
        $('.content-photo-private').hide();
        $('.content-photo').hide();
        $('.line-green-photo').css('display','none');

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
    
    /***Update Profile****/
    
    /*Education*/
    $('#id-education').click(function(){
        if ($('#form-education').is(':hidden')) {
            $('#form-education').show();
            $('#value-education').hide();
        }else{
            $('#form-education').hide();
            $('#value-education').show();
        }
    });
    
    $('#cancel-education').click(function(){
        $('#form-education').hide();
        $('#value-education').show();
    });
    
    /*Religion*/
    $('#id-religion').click(function(){
        if ($('#form-religion').is(':hidden')) {
            $('#form-religion').show();
            $('#value-religion').hide();
        }else{
            $('#form-religion').hide();
            $('#value-religion').show();
        }
    });
    
    $('#cancel-religion').click(function(){
        $('#form-religion').hide();
        $('#value-religion').show();
    });
    
    /*Ethnicity*/
    $('#id-ehtnicity').click(function(){
        if ($('#form-ehtnicity').is(':hidden')) {
            $('#form-ehtnicity').show();
            $('#value-ehtnicity').hide();
        }else{
            $('#form-ehtnicity').hide();
            $('#value-ehtnicity').show();
        }
    });
    
    $('#cancel-ehtnicity').click(function(){
        $('#form-ehtnicity').hide();
        $('#value-ehtnicity').show();
    });
    
    /*Height*/
    $('#id-height').click(function(){
        if ($('#form-height').is(':hidden')) {
            $('#form-height').show();
            $('#value-height').hide();
        }else{
            $('#form-height').hide();
            $('#value-height').show();
        }
    });
    
    $('#cancel-height').click(function(){
        $('#form-height').hide();
        $('#value-height').show();
    });
    
    /*Passion*/
    $('#id-passion').click(function(){
        if ($('#form-passion').is(':hidden')) {
            $('#form-passion').show();
            $('#value-passion').hide();
        }else{
            $('#form-passion').hide();
            $('#value-passion').show();
        }
    });
    
    $('#cancel-passion').click(function(){
        $('#form-passion').hide();
        $('#value-passion').show();
    });
    
    /*Goal*/
    $('#id-goal').click(function(){
        if ($('#form-goal').is(':hidden')) {
            $('#form-goal').show();
            $('#value-goal').hide();
        }else{
            $('#form-goal').hide();
            $('#value-goal').show();
        }
    });
    
    $('#cancel-goal').click(function(){
        $('#form-goal').hide();
        $('#value-goal').show();
    });
    
    /*Smoke*/
    $('#id-smoke').click(function(){
        if($('#form-smoke .rangeslider').css('opacity') == 0) {
            $('#form-smoke .rangeslider').css('opacity','1');
            $('.btn-ranges-sm').show();
            $('#value-smoke').hide();
        }else{
            $('#form-smoke .rangeslider').css('opacity','0');
            $('.btn-ranges-sm').hide();
            $('#value-smoke').show();
        }
    });
    
    $('#cancel-smoke').click(function(){
        $('#form-smoke .rangeslider').css('opacity','0');
        $('.btn-ranges-sm').hide();
        $('#value-smoke').show();
    });
    
    /*Drink*/
    $('#id-drink').click(function(){
        if($('#form-drink .rangeslider').css('opacity') == 0) {
            $('#form-drink .rangeslider').css('opacity','1');
            $('.btn-ranges-dr').show();
            $('#value-drink').hide();
        }else{
            $('#form-drink .rangeslider').css('opacity','0');
            $('.btn-ranges-dr').hide();
            $('#value-drink').show();
        }
    });
    
    $('#cancel-drink').click(function(){
        $('#form-drink .rangeslider').css('opacity','0');
        $('.btn-ranges-dr').hide();
        $('#value-drink').show();
    });
    /*Excercise*/
    $('#id-excercise').live('click',function(){
        if($('#form-excercise .rangeslider').css('opacity') == 0) {
            $('#form-excercise .rangeslider').css('opacity','1');
            $('.btn-ranges-ex').show();
            $('#value-excercise').hide();
        }else{
            $('#form-excercise .rangeslider').css('opacity','0');
            $('.btn-ranges-ex').hide();
            $('#value-excercise').show();
        }
    });
    
    $('#cancel-excercise').click(function(){
        $('#form-excercise .rangeslider').css('opacity','0');
        $('.btn-ranges-ex').hide();
        $('#value-excercise').show();
    });
    
    /*Children*/
    $('#id-children').click(function(){
        if ($('#form-children').is(':hidden')) {
            $('#form-children').show();
            $('#value-children').hide();
        }else{
            $('#form-children').hide();
            $('#value-children').show();
        }
    });
    
    $('#cancel-children').click(function(){
        $('#form-children').hide();
        $('#value-children').show();
    });
    
    /*about*/
    $('#id-about').click(function(){
        if ($('#form-about').is(':hidden')) {
            $('#form-about').show();
            $('#value-about').hide();
        }else{
            $('#form-about').hide();
            $('#value-about').show();
        }
    });
    
    $('#cancel-about').click(function(){
        $('#form-about').hide();
        $('#value-about').show(); 
    });
    
    /*diet*/
    $('#id-diet').click(function(){
        if ($('#form-diet').is(':hidden')) {
            $('#form-diet').show();
            $('#value-diet').hide();
        }else{
            $('#form-diet').hide();
            $('#value-diet').show();
        }
    });
    
    $('#cancel-diet').click(function(){
        $('#form-diet').hide();
        $('#value-diet').show(); 
    });
    
    /*Gym*/
    $('#id-gym').click(function(){
        if ($('#form-gym').is(':hidden')) {
            $('#form-gym').show();
            $('#value-gym').hide();
        }else{
            $('#form-gym').hide();
            $('#value-gym').show();
        }
    });
    
    $('#cancel-gym').click(function(){
        $('#form-gym').hide();
        $('#value-gym').show(); 
    });
    
    /*All header*/
    $('#id-gender').click(function(){
        if ($('#form-gender').is(':hidden')) {
            $('#form-gender').show();
            $('#value-gender').hide();
        }else{
            $('#form-gender').hide();
            $('#value-gender').show();
        }
    });
    
    $('#cancel-gender').click(function(){
        $('#form-gender').hide();
        $('#value-gender').show();
    });

    setInterval(function(){
        $.get('/index/checkTimeout', function(result) {
            if (result == lastest_visit) {
                 /*$('#messLogout').modal('show');
                 $('#messLogout').modal();*/
                setTimeout(function(){window.location.href="/user/logout"},10000);
            }
            else
                lastest_visit = result;
        });
    },600000);
    /* Post custom questions */
    $('.post-question').click(function(){

        var answer = $('#answer').val();
        var question = $('#question').val();
        if(answer =='' || question ==''){
            alert('Please ensure the question and answer is filled out.');
        }else {
            $('#question-custom-form').hide();
            $.get('/user/addQuestions?question='+question+'&answer='+answer,function(data){
                /**Reset Form Add New**/
                $('#question').attr('value', '');
                $('#answer').attr('value', '');
                /**Appen html**/
                var html = '<div class="content-bit" id="content-question-default_' + data + '">';
                    html+= '    <span class="what" id="sentence_question_'+ data +'">'+ question +'</span>';
                    html+= '    <span class="note-span note_default_question" data-id="'+ data +'"></span>';
                    html+= '    <span class="godfather answer_'+ data +'" data-id="'+ data +'" >'+ answer +'</span>';
                    html+= '    <div id="question_'+ data +'" style="display: none;">';
                    html+= '    <input type="text" value="'+ question +'" class="form-control" id="user_question_'+ data +'"/>';
                    html+= '    <br>';
                    html+= '    <textarea class="form-control" id="user_answer_'+ data +'" name="answer"> '+ answer +' </textarea>';
                    html+= '    <span class="my-btn">';
                    html+= '    <input type="submit" value="Save" class="saveAnswer" data-id="'+ data +'" />';
                    html+= '    <span class="text-cancel q_default_delete deleteAnswer" data-id="'+ data +'">Delete</span>';
                    html+= '    <span class="text-cancel q_default_cancel" data-id="'+ data +'">Cancel</span>';
                    html+= '    </span></div></div>';
                
                $('.all-question').append(html);
            });
        }
    });

    /*Upload public photo*/
    $('.public-photo').click(function(){
       $('#public_photo').modal('show');
    })
    /*Upload Private photo*/
    $('.private-photo').click(function(){
        $('#private_photo').modal('show');
    })
    
    
    
});
