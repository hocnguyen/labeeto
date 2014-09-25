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
                $('#form-excercise').hide();
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
                $('#form-drink').hide();
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
                $('#form-smoke').hide();
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
        $('.li-GeneralSettings').css('border-bottom', '3px solid #5dc1ea');
        $('.li-SearchReferences').css('border-bottom', 'none');
        $('.li-Notifications').css('border-bottom', 'none');
        $('.li-Blocklist').css('border-bottom', 'none');
        $('#SearchReferences').hide();
        $('#Notifications').hide();
        $('#Blocklist').hide();
        $('#GeneralSettings').show();
        
    });
    
    $('.link-SearchReferences').click(function(){
        $('.li-SearchReferences').css('border-bottom', '3px solid #5dc1ea');
        $('.li-GeneralSettings').css('border-bottom', 'none');
        $('.li-Notifications').css('border-bottom', 'none');
        $('.li-Blocklist').css('border-bottom', 'none');
        $('#GeneralSettings').hide();
        $('#Notifications').hide();
        $('#Blocklist').hide();
        $('#SearchReferences').show();
        
    });
    
    $('.link-Notifications').click(function(){
        $('.li-Notifications').css('border-bottom', '3px solid #5dc1ea');
        $('.li-SearchReferences').css('border-bottom', 'none');
        $('.li-GeneralSettings').css('border-bottom', 'none');
        $('.li-Blocklist').css('border-bottom', 'none');
        $('#SearchReferences').hide();
        $('#GeneralSettings').hide();
        $('#Blocklist').hide();
        $('#Notifications').show();
        
    });
    
    $('.link-Blocklist').click(function(){
        $('.li-Blocklist').css('border-bottom', '3px solid #5dc1ea');
        $('.li-SearchReferences').css('border-bottom', 'none');
        $('.li-GeneralSettings').css('border-bottom', 'none');
        $('.li-Notifications').css('border-bottom', 'none');
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
    
    $('.note_default_question').click(function(){
        var id = $(this).attr("data-id")
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
    
    
    $('.q_default_cancel').click(function(){
        var id = $(this).attr("data-id");
        $('.answer_'+ id).show();
        $('#question_'+ id).hide();
    });
    
    $('.avartar img').mouseover(function(){
        if ($('.popup_avavtar').is(':hidden')) {
            $('.popup_avavtar').css('display', 'block');
        }else{
            $('.popup_avavtar').hide();
        }
    })
    $('.avartar img').mouseout(function(){
        $('.popup_avavtar').hide();
    });
    
    $('#form-change-avatar').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: '/user/ChangeAvatar',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log(data);
                    $('#ChangeAvatar').modal('hide')
                    showModalTemp(data);
                },
                error: function(data){
                    console.log("error");
                }
            });
        return false;
    })
    
    function showModalTemp(name_image){
        if ($('.avartar img').attr('src') == ''){
                $('.avartar img').attr('src', '/uploads/avatar/'+ name_image);
        }else{
            $('.avartar img').attr('src', '');
            $('.avartar img').attr('src', '/uploads/avatar/'+ name_image);
        }
     }
});