
    <div class="row-fluid">
<div class="span12">
    <div class="containerHeadline">
        <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','special-education-schools'); ?></h2>
        <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
        <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
    </div>

    <div class="floatingBox" style="display: block;">
        <div class="container-fluid">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'special-education-schools-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions'=>array(
                                'enctype' => 'multipart/form-data',
                                'class'=>'form-horizontal contentForm',
                                'data-validate'=>'parsley',
                                )
                )); ?>

            <?php echo $form->errorSummary($model); ?>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'corporate_name'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'corporate_name',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'corporate_name_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'corporate_name_2',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'advertiser'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'advertiser'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'typology'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'typology',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'status'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'status'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'overall_capacity'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'overall_capacity',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'management'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'management',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'deafnesses'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'deafnesses',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'structures'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'structures',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'language_communication'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'language_communication',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'support'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'support',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'paramedical_care'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'paramedical_care',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'medical_care'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'medical_care',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'specific_monitoring'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'specific_monitoring'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'special_free_field'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'special_free_field',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'cochlear_implant'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'cochlear_implant',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'grades_of_teaching'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'grades_of_teaching',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'integration_mechanisms_1'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'integration_mechanisms_1',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'integration_mechanisms_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'integration_mechanisms_2',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'specialized_monitoring'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'specialized_monitoring',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'fp'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'fp',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'chains'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'chains',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'branch'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'branch',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'grip'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'grip',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description'); ?>
</label>
                    <div class="controls">
                        <?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'SpecialEducationSchools[description]', 'value' => isset($model->description) ? $model->description : '', 'editorTemplate' => 'full' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'address'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'additional_address'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'additional_address',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'zip'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'country'); ?>
</label>
                   <div class="controls">
                        <?php
                            $listCountry  = CHtml::listData(Countries::model()->findAll('is_active = 0'),'id','short_name');
                            echo $form->dropDownList($model,'country', $listCountry);
                        ?>
                   </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'po_box'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'po_box',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city_cedex'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'city_cedex',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'zip_cedex'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'zip_cedex',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phone_1'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'phone_1',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phone_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'phone_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'fax'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'fax',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'email_1'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'email_1',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'email_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'email_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'website'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'website_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'website_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'logo'); ?>
</label>
                                <div class="controls">
                                    <?php echo $form->fileField($model,'logo'); ?>
                                    <?php echo $form->error($model,'logo'); ?>
                                    <?php if ($model->logo):?>
                                        <div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/special_education_school/'.$model->logo.'"'?> rel="group">
                                                <img class="img-polaroid" <?php echo 'src="/uploads/special_education_school/'.$model->logo.'"'?> style="height: 65px;"/>
                                            </a></div>
                                    <?php endif;?>
                                </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'pics'); ?>
</label>               <div class="controls">
                                    <?php echo $form->fileField($model,'pics'); ?>
                                    <?php echo $form->error($model,'pics'); ?>
                                    <?php if ($model->pics):?>
                                        <div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/special_education_school/'.$model->pics.'"'?> rel="group">
                                                <img class="img-polaroid" <?php echo 'src="/uploads/special_education_school/'.$model->pics.'"'?> style="height: 65px;"/>
                                            </a></div>
                                    <?php endif;?>
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