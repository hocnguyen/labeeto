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
                    <label class="label-join">Interested in</label>
                </div>
                <div class="col-md-2">
                    <?php echo $form->dropDownList($model,'interesting',array('0'=>'Men','1'=>'Women','2'=>'Both'),array('class'=>'form-control')); ?>
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
                
                <a href="#" class="dc_bright_button bright-red bright-round">Register now</a>
                <a href="#" class="dc_bright_button bright-blue bright-bubble"><img class="fb_connect" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/facebook_a.png">Connect</a>
                <label class="label-join fix-size">Already a member?<a href="#">Login>> </a></label>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
</div>
<div class="row grey-info-block text-center">
    <div class="container">
        <h2 class="page_title"><span>about us</span><br />
            <span class="sep"></span><br />
            <small>Cras ornare tristique elit</small></h2>
        <div class="col-md-6"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/pic1.jpg" alt="image" class="img-rounded img-responsive">
            <h3><small>Commodo id natoque malesuada</small></h3>
            <p class="small-paragraph">Phasellus ultrices nulla quis nibh. Quisque a lectus.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        </div>
        <div class="col-md-6"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/pic2.jpg" alt="image" class="img-rounded img-responsive">
            <h3><small>Auctor etiam porttitor phasellus</small></h3>
            <p class="small-paragraph">Phasellus ultrices nulla quis nibh. Quisque a lectus.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="text-center three-blocks">
    <div class="container">
        <div class="row">
            <h2 class="">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</h2>
            <p class="">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>
        </div>
    </div>
</div>