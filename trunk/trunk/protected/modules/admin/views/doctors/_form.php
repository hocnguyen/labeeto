
    <div class="row-fluid">
<div class="span12">
    <div class="containerHeadline">
        <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','doctors'); ?></h2>
        <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
        <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
    </div>

    <div class="floatingBox" style="display: block;">
        <div class="container-fluid">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'doctors-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions'=>array(
                                'class'=>'form-horizontal contentForm',
                                'data-validate'=>'parsley',
                                )
                )); ?>

            <?php echo $form->errorSummary($model); ?>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'title'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->dropDownList($model, 'title', array('Professor'=>Yii::t('global','Professor'), 'Doctor'=> Yii::t('global', 'Doctor') )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'name'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'first_name'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
            <div class="control-group">
                <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'department'); ?>
                </label>
                <div class="controls">
                    <?php
                    $departments = CHtml::listData( Maps::model()->findAll(),'id','name' );
                    echo $form->dropDownList( $model,'department', $departments );
                    ?>
                </div>
            </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'ent'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'ent'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phoniatricians'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'phoniatricians'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'free_field'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'free_field',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'degrees'); ?>
</label>
                    <div class="controls">
                        <?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'Doctors[degrees]', 'value' => isset($model->degrees) ? $model->degrees : '', 'editorTemplate' => 'full' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'status_grade'); ?>
</label>
                    <div class="controls">
                        <?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'Doctors[status_grade]', 'value' => isset($model->status_grade) ? $model->status_grade : '', 'editorTemplate' => 'full' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'specialty'); ?>
</label>
                    <div class="controls">
                        <?php
                            $specialty = CHtml::listData( Services::model()->findAll(),'id','name' );
                            echo $form->dropDownList( $model,'specialty', $specialty );
                        ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'audiometry'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'audiometry'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'audiometry_ff'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'audiometry_ff',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phoniatry'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'phoniatry'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phoniatry_ff'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'phoniatry_ff',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'speech_therapy'); ?>
</label>
                    <div class="controls">
                        <?php
                            $speech_therapy = CHtml::listData( SpeechTherapist::model()->findAll(),'id','name' );
                            echo $form->dropDownList( $model,'speech_therapy', $speech_therapy );
                        ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'specific_phone_number'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'specific_phone_number',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'specific_fax'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'specific_fax',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
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