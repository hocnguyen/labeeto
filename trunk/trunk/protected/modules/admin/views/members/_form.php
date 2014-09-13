
<div class="row-fluid">
<div class="span12">
<div class="containerHeadline">
    <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','Members'); ?></h2>
    <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
    <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
</div>

<div class="floatingBox" style="display: block;">
<div class="container-fluid">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'members-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'class'=>'form-horizontal contentForm',
        'data-validate'=>'parsley',
    )
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'username'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>155, 'class'=>'span10', 'data-required'=>'true')); ?>
    </div>
</div>

<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'email'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>155, 'class'=>'span10', 'data-required'=>'true')); ?>
    </div>
</div>
    <?php if( !$model->id ): ?>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'password'); ?>

    </label>
    <div class="controls">
        <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40, 'class'=>'span10', 'data-required'=>'true')); ?>
    </div>
</div>
    <?php endif; ?>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'role'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'role',array('size'=>30,'maxlength'=>30, 'class'=>'span10', 'data-required'=>'true')); ?>
    </div>
</div>
    <div class="control-group">
        <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'language'); ?>
        </label>
        <div class="controls">
            <?php
                $language = array('fr'=>'French','en'=>'English');
                echo $form->dropDownList($model,'language',$language);
            ?>
        </div>
    </div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'fname'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'fname',array('size'=>40,'maxlength'=>40, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'lname'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'lname',array('size'=>40,'maxlength'=>40, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group" style="display:none !important ;">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'birthday'); ?>
    </label>
    <div class="controls fix-select-box">
        <?php
        if($model->isNewRecord){
            echo $form->dropDownList($model, 'bday', DateHelper::getDays(), array('prompt' => Yii::t('global','Day'),'class' => ' span2 fix-date validate[required]'));
            echo $form->dropDownList($model, 'bmonth', DateHelper::getMonths(), array('prompt' => Yii::t('global','Month'),'class' => ' span2 fix-date validate[required]'));
            echo $form->dropDownList($model, 'byear', DateHelper::getYears(), array('prompt' => Yii::t('global','Year'),'class' => 'span2 fix-date validate[required]'));

        } else if($model->birthday) {
            $tmp= explode('.',$model->birthday);
            echo $form->dropDownList($model, 'bday', DateHelper::getDays(), array('prompt' =>$tmp[0],'class'=>'span2 fix-date '));
            echo $form->dropDownList($model, 'bmonth', DateHelper::getMonths(), array('prompt' => $tmp[1],'class'=>'span2 fix-date '));
            echo $form->dropDownList($model, 'byear', DateHelper::getYears(), array('prompt' => $tmp[2],'class'=>'span2 fix-date'));
        } else {
            echo $form->dropDownList($model, 'bday', DateHelper::getDays(), array('prompt' => Yii::t('global','Day'),'class' => ' span2 fix-date validate[required]'));
            echo $form->dropDownList($model, 'bmonth', DateHelper::getMonths(), array('prompt' => Yii::t('global','Month'),'class' => ' span2 fix-date validate[required]'));
            echo $form->dropDownList($model, 'byear', DateHelper::getYears(), array('prompt' => Yii::t('global','Year'),'class' => 'span2 fix-date validate[required]'));

        }
        ?>
    </div>
</div>

<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'address'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>155, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phone'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'phone',array('size'=>40,'maxlength'=>40, 'class'=>'span10')); ?>
    </div>
</div>

<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'street'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'nr'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'nr',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'ext_information'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'ext_information',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'postcode'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'postcode', array('class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'state'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city'); ?>
    </label>
    <div class="controls">
        <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>155, 'class'=>'span10')); ?>
    </div>
</div>
<div class="control-group">
    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'country_id'); ?>
    </label>
    <div class="controls">
        <?php echo $form->dropDownList($model, 'country_id', CHtml::listData(Countries::model()->findAll(), 'id', 'short_name' ), array( 'prompt' => Yii::t('global', '-- Choose Value --') )); ?>
    </div>
</div>

<div class="formFooter">
    <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn btn-primary')); ?>
    <button class="btn" type="reset">Reset</button>
</div>
<?php $this->endWidget(); ?>
</div>
</div>

</div>
</div>