
    <div class="row-fluid">
<div class="span12">
    <div class="containerHeadline">
        <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','agencies'); ?></h2>
        <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
        <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
    </div>

    <div class="floatingBox" style="display: block;">
        <div class="container-fluid">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'agencies-form',
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
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'type'); ?>
</label>
                    <div class="controls">
                        <?php
                        $type = CHtml::listData( AgenciesCategory::model()->findAll(),'id','name' );
                        echo $form->dropDownList($model,'type', $type ); ?>
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
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'legal_status'); ?>
</label>
                    <div class="controls">
                        <?php
                        $legal_status = Utils::getStatusCommon();
                        echo $form->dropDownList($model,'legal_status', $legal_status ); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'advertisers'); ?>
</label>
                    <div class="controls">
                        <?php
                        $advertisers = Utils::getStatusCommon();
                        echo $form->dropDownList($model,'advertisers', $advertisers ); ?>
                    </div>
                </div>
            <div class="control-group">
                <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'address'); ?>
                </label>
                <div class="controls">
                    <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
                </div>
            </div>
            <div class="control-group">
                <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city'); ?>
                </label>
                <div class="controls">
                    <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
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
                <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'zip'); ?>
                </label>
                <div class="controls">
                    <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
                </div>
            </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'logo'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->fileField($model,'logo'); ?>
                        <?php echo $form->error($model,'logo'); ?>
                        <?php if ($model->logo):?>
                            <div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/agencies/'.$model->logo.'"'?> rel="group">
                                    <img class="img-polaroid" <?php echo 'src="/uploads/agencies/'.$model->logo.'"'?> style="height: 65px;"/>
                                </a></div>
                        <?php endif;?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'service'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'service',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'address_id'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'address_id',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>

                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'additional_address'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'additional_address',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
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
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'zip_cedex'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'zip_cedex',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
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
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'phone'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
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
                        <?php echo $form->textField($model,'email_1',array('size'=>60,'maxlength'=>150, 'class'=>'span10', 'data-required'=>'true')); ?>
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
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'email_3'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'email_3',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'grip'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'grip',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'description_2',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'publishing'); ?>
</label>
                    <div class="controls">
                        <?php
                        $publishing = Utils::getStatusCommon();
                        echo $form->dropDownList($model,'publishing', $publishing ); ?>
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
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'email'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'address_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'address_2',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'additional_address_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'additional_address_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'city_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'zip_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'zip_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'country_2'); ?>
</label>
                    <div class="controls">
                        <?php
                        $listCountry2  = CHtml::listData(Countries::model()->findAll('is_active = 0'),'id','short_name');
                        echo $form->dropDownList($model,'country_2', $listCountry2);
                        ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'po_box_cedex_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'po_box_cedex_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city_cedex_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'city_cedex_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'fax_2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'fax_2',array('size'=>60,'maxlength'=>150, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'image'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->fileField($model,'image'); ?>
                        <?php echo $form->error($model,'image'); ?>
                        <?php if ($model->image):?>
                            <div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/agencies/'.$model->image.'"'?> rel="group">
                                    <img class="img-polaroid" <?php echo 'src="/uploads/agencies/'.$model->image.'"'?> style="height: 65px;"/>
                                </a></div>
                        <?php endif;?>
                    </div>
                </div>
                            <div class="control-group">
                    <div class="controls">
                        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn btn-primary')); ?>
                        <button class="btn" type="reset">Reset</button>
                    </div>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>

</div>
    </div>