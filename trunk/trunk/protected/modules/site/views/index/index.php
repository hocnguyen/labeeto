<div class="container">

    <div class="row no_padding icons__blocks text-center">
        <h2 class="page_title"><span>Join Labeeto now</span><br />
            <span class="sep"></span>
        <div class="col-md-12 wrapper-form grey-info-block">

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'members-form',
                'enableAjaxValidation'=>false,
            )); ?>
            <div class="row first-row fix-row">
                <div class="col-md-2">
                  <label class="label-join"> I'm a</label>
                </div>
                <div class="col-md-2">
                    <?php echo $form->dropDownList($model,'gender',array('0'=>'Man','1'=>'Woman'),array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'gender'); ?>
                </div>
                <div class="col-md-4">
                    <label class="label-join">Looking For</label>
                </div>
                <div class="col-md-4">
                    <?php
                    $lookingFor = array(
                        '0'=>' Something Casual',
                        '1'=>' Something Serious',
                        '2'=>'Friendship',
                        '3'=>'Training',
                        '4'=>'Anything',
                    );
                    echo $form->dropDownList($model,'interesting',$lookingFor,array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'interesting'); ?>
                </div>
            </div>
            <div  class="row fix-row">
                <div class="col-md-2">
                    <label class="label-join"> Age</label>
                </div>
                <div class="col-md-2">
                    <?php echo $form->textField($model,'agefrom',array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'agefrom'); ?>
                </div>
                <div class="col-md-2">
                    <label class="label-join"> to</label>
                </div>
                <div class="col-md-2">
                    <?php echo $form->textField($model,'ageto',array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'ageto'); ?>
                </div>
                <div class="col-md-2">
                    <label class="label-join"> near</label>
                </div>
                <div class="col-md-2">
                    <?php echo $form->textField($model,'near',array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'near'); ?>
                </div>
            </div>
            <div class="row fix-row">
                <button class="register_button dc_ibutton-red">Register now</button>
                <a href="#" class="">
                    <img class="facebook-img" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/connect_fb.png">
                </a>
                <label class="label-join fix-size">Already a member?<a href="#">Login>> </a></label>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
</div>
<div class="row grey-info-block text-center">
    <div class="container">
        <h2 class="page_title"><span>Why Choose Labeeto</span><br />
            <span class="sep"></span></h2>
        <div class="col-md-4"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/meet-people.jpg" alt="image" class="img-rounded img-responsive">
            <h3><small>Meet people</small></h3>
            <p class="small-paragraph"></p>
            <p>We understand how hard it is to find people who share a healthy active lifestyle. We are dedicated to building a community full of motivation and inspiration</p>
        </div>
        <div class="col-md-4"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/find-love.jpg" alt="image" class="img-rounded img-responsive">
            <h3><small>Find Love</small></h3>
            <p class="small-paragraph"></p>
            <p>We will offer you a chance to find someone who wants to archive the same healthy lifestyle that you care about.</p>
        </div>
        <div class="col-md-4"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/get-fix.jpg" alt="image" class="img-rounded img-responsive">
            <h3><small>Get fit</small></h3>
            <p class="small-paragraph"></p>
            <p>We want to help you  meet your goals. When you share your achievements other will help motivate you along the way. Personal trainers will have their chance out and help you on your journey .</p>
        </div>
        <div class="clear"></div>
    </div>
</div>
