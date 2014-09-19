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
    
});