<div class="form-registration">
    <div class="row">
          <div class="col-md-3 col-lg-3"></div>
          <div class="col-md-6 col-lg-6">
                <div class="login_title"><?php echo Yii::t('global','Reset your password') ?></div>
          </div>
          <div class="col-md-3 col-lg-3"></div>
        </div>
    <div class="row">
        <?php $this->widget('widgets.admin.notifications'); ?>
        <p class="text-center"><?php echo Yii::t('global', 'Enter you email here. You will receive a reset password via email.'); ?></p>

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableAjaxValidation'=>false,
        )); ?>
        <?php echo $form->errorSummary($model); ?>
        
        
        <div class="row">
          <div class="col-md-4 col-lg-4"></div>
          <div class="col-md-4 col-lg-4"><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>155,'class'=>' span5 validate[custom[email]]', 'id'=>'my-id')); ?></div>
          <div class="col-md-4 col-lg-4"><?php echo $form->error($model,'email'); ?></div>
        </div>
        
        <div class="row">
          <div class="col-md-4 col-lg-4"></div>
          <div class="col-md-4 col-lg-4"><?php echo CHtml::submitButton(Yii::t('global','Submit'), array('class'=>' btn_login_now', 'style'=>'margin-top: 40px;', 'id'=>'my-id')); ?></div>
          <div class="col-md-4 col-lg-4"></div>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>