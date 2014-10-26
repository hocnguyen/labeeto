
    <div class="row-fluid">
<div class="span12">
    <div class="containerHeadline">
        <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','save-search'); ?></h2>
        <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
        <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
    </div>

    <div class="floatingBox" style="display: block;">
        <div class="container-fluid">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'save-search-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions'=>array(
                                'class'=>'form-horizontal contentForm',
                                'data-validate'=>'parsley',
                                )
                )); ?>

            <?php echo $form->errorSummary($model); ?>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'user_id'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'user_id', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'username'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>155, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'gender'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'gender', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'age_from'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'age_from', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'age_to'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'age_to', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'within_from'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'within_from', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'within_to'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'within_to', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'height_from'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'height_from', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'height_to'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'height_to', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'education'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'education',array('size'=>40,'maxlength'=>40, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'ehtnicity'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'ehtnicity',array('size'=>30,'maxlength'=>30, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'religion'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'religion',array('size'=>40,'maxlength'=>40, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'children'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'children', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'excercise'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'excercise',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'drink'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'drink',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'smoke'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'smoke',array('size'=>60,'maxlength'=>100, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_online'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'is_online', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'verified'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'verified', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'created'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'created', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'updated'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'updated', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <div class="controls">
                        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn btn-primary')); ?>
                        <button class="btn" type="reset"><?php echo Yii::t('global','Reset'); ?></button>
                    </div>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>

</div>
    </div>