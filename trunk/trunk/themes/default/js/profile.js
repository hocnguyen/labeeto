$(document).ready(function(){
    /*Education*/
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
                $('#form-education').hide();
                $('#value-education').html(data);
                $('#value-education').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Religion*/
    $('#form-religion').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveReligion',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-religion').hide();
                $('#value-religion').html(data);
                $('#value-religion').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    
    /*Ethnicity*/
    $('#form-ehtnicity').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveEthnicity',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-ehtnicity').hide();
                $('#value-ehtnicity').html(data);
                $('#value-ehtnicity').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    
    /*Passion*/
    $('#form-passion').submit(function(e) {
        var passion = $('#passion').val();
        if(passion.length > 35){
            alert('Please ensure the length fitness passion smaller than 35 character.!');
            return false;
        }
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SavePassion',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-passion').hide();
                $('#value-passion').html(data);
                $('#value-passion').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Goals*/
    $('#form-goal').submit(function(e) {
        var goals = $('#goals').val();
        if(goals.length > 35){
            alert('Please ensure the length goals smaller than 35 character.!');
            return false;
        }
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveGoal',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-goal').hide();
                $('#value-goal').html(data);
                $('#value-goal').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Children*/
    $('#form-children').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveChildren',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-children').hide();
                $('#value-children').html(data);
                $('#value-children').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Height*/
    $('#form-height').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveHeight',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-height').hide();
                $('#value-height').html(data);
                $('#value-height').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Diet*/
    $('#form-diet').submit(function(e) {
        var diet = $('#diet').val();
        if(diet.length > 35){
            alert('Please ensure the length diet smaller than 35 character.!');
            return false;
        }
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveDiet',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-diet').hide();
                $('#value-diet').html(data);
                $('#value-diet').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*About*/
    $('#form-about').submit(function(e) {
        var about = $('#about').val();
        if(about.length > 35){
            alert('Please ensure the length about smaller than 35 character.!');
            return false;
        }
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveAbout',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-about').hide();
                $('#value-about').html(data);
                $('#value-about').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
     /*Excercise*/
    $('#form-excercise').submit(function(e) {
        $('.ajaxloader').show();
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveExcercise',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-excercise .rangeslider').css('opacity','0');
                $('.btn-ranges-ex').hide();
                $('.ajaxloader').hide();
                $('#value-excercise').html(data);
                $('#value-excercise').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
     /*Drink*/
    $('#form-drink').submit(function(e) {
        $('.ajaxloader').show();
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveDrink',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-drink .rangeslider').css('opacity','0');
                $('.btn-ranges-dr').hide();
                $('.ajaxloader').hide();
                $('#value-drink').html(data);
                $('#value-drink').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Smoke*/
    $('#form-smoke').submit(function(e) {
        $('.ajaxloader').show();
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveSmoke',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-smoke .rangeslider').css('opacity','0');
                $('.btn-ranges-sm').hide();
                $('.ajaxloader').hide();
                $('#value-smoke').html(data);
                $('#value-smoke').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /*Gym*/
    $('#form-gym').submit(function(e) {
        var gym = $('#gym').val();
        if(gym.length > 35){
            alert('Please ensure the length gym membership smaller than 35 character.!');
            return false;
        }
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveGym',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-gym').hide();
                $('#value-gym').html(data);
                $('#value-gym').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    
    /*All header*/
    $('#form-gender').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/user/SaveGender',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#form-gender').hide();
                $('#value-gender').html(data);
                $('#value-gender').show();
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    /***********************************************************************/
                    /*******Menu Setting*******/
    $('.link-GeneralSettings').click(function(){
        $('.li-GeneralSettings a').css('border-bottom', '3px solid #5dc1ea');
        $('.li-SearchReferences a').css('border-bottom', 'none');
        $('.li-Notifications a').css('border-bottom', 'none');
        $('.li-Blocklist a').css('border-bottom', 'none');
        $('#SearchReferences').hide();
        $('#Notifications').hide();
        $('#Blocklist').hide();
        $('#GeneralSettings').show();
        
    });
    
    $('.link-SearchReferences').click(function(){
        $('.li-SearchReferences a').css('border-bottom', '3px solid #5dc1ea');
        $('.li-GeneralSettings a').css('border-bottom', 'none');
        $('.li-Notifications a').css('border-bottom', 'none');
        $('.li-Blocklist a').css('border-bottom', 'none');
        $('#GeneralSettings').hide();
        $('#Notifications').hide();
        $('#Blocklist').hide();
        $('#SearchReferences').show();
        
    });
    
    $('.link-Notifications').click(function(){
        $('.li-Notifications a').css('border-bottom', '3px solid #5dc1ea');
        $('.li-SearchReferences a').css('border-bottom', 'none');
        $('.li-GeneralSettings a').css('border-bottom', 'none');
        $('.li-Blocklist a').css('border-bottom', 'none');
        $('#SearchReferences').hide();
        $('#GeneralSettings').hide();
        $('#Blocklist').hide();
        $('#Notifications').show();
        
    });
    
    $('.link-Blocklist').click(function(){
        $('.li-Blocklist a').css('border-bottom', '3px solid #5dc1ea');
        $('.li-SearchReferences a').css('border-bottom', 'none');
        $('.li-GeneralSettings a').css('border-bottom', 'none');
        $('.li-Notifications a').css('border-bottom', 'none');
        $('#SearchReferences').hide();
        $('#Notifications').hide();
        $('#GeneralSettings').hide();
        $('#Blocklist').show();
        
    });
    /***********************************************************************/
    
    
    /*******************************Question custom****************************************/
    $('#question-custom').click(function(){
        if ($('#question-custom-form').is(':hidden')) {
            $('#question-custom-form').show();
        }else{
            $('#question-custom-form').hide();
        }
    });
    
    $('#cancel-question-custom').click(function(){
        $('#question-custom-form').hide();
    });
    
    /***********************************************************************/
    
    $('.note_default_question').live("click", function(){
        var id = $(this).attr("data-id");
        console.log(id);
        if ($('#question_'+ id).is(':hidden')) {
            $('.answer_'+ id).hide();
            $('#sentence_question_'+ id).hide();
            $('#question_'+ id).show();
        }else{
            $('#sentence_question_'+ id).show();
            $('.answer_'+ id).show();
            $('#question_'+ id).hide();
        }
        
    });
    
    $('.submit_answer_question').click(function(e){
        var id = $(this).attr("data-id");
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/answer/SaveAnswer/'+ id,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log(data);
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });
    
    
    $('.q_default_cancel').live("click",function(){
        var id = $(this).attr("data-id");
        $('.answer_'+ id).show();
        $('#sentence_question_'+ id).show();
        $('#question_'+ id).hide();
    });
    
    $('.double-spans').mouseover(function(){
        if ($('.popup_avavtar').is(':hidden')) {
            $('.popup_avavtar').css('display', 'block');
        }else{
            $('.popup_avavtar').hide();
        }
    })
    $('.double-spans').hover(function(){
        $('.popup_avavtar').css('display', 'block');
    });
    
    $('.double-spans').mouseout(function(){
        $('.popup_avavtar').hide();
    });
    $('.popup_avavtar').hover(function(){
        $(this).css('display', 'block');
    });
    
    $('#photo-new').change(function(e){
        $('#form-change-avatar').submit();
    });
    
    $('#form-change-avatar').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
        $('.avatar-up').addClass('loading');
        $('.avatar-up').html('');
            $.ajax({
                type:'POST',
                url: '/user/ChangeAvatar',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log(data);
                    $('#ChangeAvatar').modal('hide');
                    //showModalTemp(data);
                    location.assign('/profile');
                },
                error: function(data){
                    console.log("error");
                }
            });
        return false;
    });
    $('#photos').change(function(e){
        $('#form-photo').submit();
    });

    $('#form-photo').submit(function(e){

        e.preventDefault();
        var formData = new FormData(this);
        $('.photo-up').addClass('loading');
        $('.photo-up').html('');

        $.ajax({
            type:'POST',
            url: '/user/UploadPhoto',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log(data);
                $('#public_photo').modal('hide');
                location.assign('/profile?type=photos');
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });

    $('#private').change(function(e){
        $('#form-private').submit();
    });

    $('#form-private').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $('.private-up').addClass('loading');
        $('.private-up').html('');
        $.ajax({
            type:'POST',
            url: '/user/UploadPrivate',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log(data);
                $('#private_photo').modal('hide');
                location.assign('/profile?type=private');
            },
            error: function(data){
                console.log("error");
            }
        });
        return false;
    });

    /* Start Update question answer */
        $('.saveAnswer').click(function(){
            var id_question = $(this).attr('data-id');
            var question = $('#user_question_'+id_question).val();
            var answer = $('#user_answer_'+id_question).val();
            if(answer =='' || question ==''){
                alert('Please ensure the question and answer is filled out.');
            }else {
                $.get('/user/updateQuestions?question='+question+'&answer='+answer+'&id='+id_question,function(data){
                    if(data!=0){
                        $('#question_' + id_question).hide();
                        $('.answer_'+ id_question).html(answer);
                        $('#sentence_question_'+id_question).html(question);
                        $('.answer_'+ id_question).show();
                        $('#sentence_question_'+id_question).show();
                    } else {
                        alert('Can not save answer. Please try again later');
                    }

                });
            }
        });

    /* End Update question answer */
    
    /* Start Delete question answer */
        $('.deleteAnswer').live("click",function(){
            var id_question = $(this).attr('data-id');
            console.log(id_question);
            $.get('/user/deleteQuestions?id='+id_question,function(data){
                if(data!=0){
                    $('#content-question-default_' + id_question).hide();
                } else {
                    alert('Delete question not successful. Please try again later');
                }

            });
        });

    /* End Delete question answer */
    
    $('.del-photo').live('click',function(){
        var photoID = $(this).attr('href');
        var type = $(this).attr('data-items');
        if (confirm('Are you sure you want to delete this photo?')){
            $.get('user/deletePhoto?id='+photoID,function(){
                location.assign('/profile?type='+type);
            })
        }
        return false;
    });
    function showModalTemp(name_image){
        if ($('.avartar img').attr('src') == ''){
                $('.avartar img').attr('src', '/uploads/avatar/'+ name_image);
        }else{
            $('.avartar img').attr('src', '');
            $('.avartar img').attr('src', '/uploads/avatar/'+ name_image);
        }
     }
     
     $('#video-new').change(function(e){
        $('#form-upload-video').submit();
     });
     $('#form-upload-video').submit(function(e){
         e.preventDefault();
            var formData = new FormData(this);
            //$('.private-up').addClass('loading');
            //$('.private-up').html('');
            $.ajax({
                type:'POST',
                url: '/user/UploadVideo',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    $('#UploadVideo').modal('hide');
                    if(data == 1){
                        alert('Invalid video format.');
                    }
                    
                   location.assign('/profile?type=video');
                },
                error: function(data){
                    console.log("error");
                }
            });
            return false;
    });
    
});