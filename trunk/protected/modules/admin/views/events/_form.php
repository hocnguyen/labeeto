
    <div class="row-fluid">
<div class="span12">
    <div class="containerHeadline">
        <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','Events'); ?></h2>
        <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
        <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
    </div>

    <div class="floatingBox" style="display: block;">
        <div class="container-fluid">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'events-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions'=>array(
                                'enctype' => 'multipart/form-data',
                                'class'=>'form-horizontal contentForm',
                                'data-validate'=>'parsley',
                                )
                ));
            $this->widget('widgets.admin.notifications');
            ?>

            <?php echo $form->errorSummary($model); ?>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'name'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'location'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'type_events'); ?>
</label>
                    <div class="controls">
                        <?php
                            $listCategories  = CHtml::listData(EventsCategory::model()->findAll(),'id','name');
                            echo $form->dropDownList($model,'type_events', $listCategories);
                        ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label">
                        <label class="required" for="Events_organizer"> <?php echo Yii::t('global','Organizer'); ?> <span class="required">*</span></label>
</label>
                    <div class="controls">
                        <?php
                            /*$listOrganizers  = CHtml::listData(Organizers::model()->findAll(),'id','name');
                            echo $form->dropDownList($model,'organizer_id', $listOrganizers);*/
                        ?>
                        <select name="EventOrganizers[]" id="s2_2" multiple="multiple" class="span10 validate[required]" >
                            <?php
                            $cats = array(); Organizers::getTree($cats);
                            $selected = $model->getCategoriesId();
                            foreach ($cats as $cat_id=>$cat){
                                echo '<optgroup  label="">';
                                if( isset( $cat ) )
                                    echo '<option value="'.$cat_id.'"'.(in_array($cat_id, $selected)?' selected="selected"':'').'>'.$cat['name'].'</option>';
                                echo '</optgroup>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'address'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'city'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'zip'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>100, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'starting_date'); ?>
</label>
                    <div class="controls">
                        <?php
                        $model->starting_date = Utils::date_format24h($model->starting_date, 1);
                        $this->widget('CJuiDateTimePicker',array(
                            'model'=>$model,
                            'attribute'=>'starting_date',
                            'mode'=>'datetime',
                            'options'=>array("dateFormat"=>Yii::app()->locale->getDateFormat('medium_js'), 'ampm' => false),
                            'language' => Yii::app()->language=='en'?'':Yii::app()->language,
                        )); ?>
                        <?php //echo $form->textField($model,'starting_date', array('class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'ending_date'); ?>
</label>
                    <div class="controls">
                        <?php
                        $model->ending_date = Utils::date_format24h($model->ending_date, 1);
                        $this->widget('CJuiDateTimePicker',array(
                            'model'=>$model,
                            'attribute'=>'ending_date',
                            'mode'=>'datetime',
                            'options'=>array("dateFormat"=>Yii::app()->locale->getDateFormat('medium_js'), 'ampm' => false),
                            'language' => Yii::app()->language=='en'?'':Yii::app()->language,
                        )); ?>
                    </div>
                </div>
            <div class="control-group">
                <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_highlight'); ?>
                </label>
                <div class="controls">
                    <?php echo $form->checkBox($model,'is_highlight'); ?>
                </div>
            </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'logo'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->fileField($model,'logo'); ?>
                        <?php if ($model->logo):?>
                            <div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/events/'.$model->logo.'"'?> rel="group">
                                    <img class="img-polaroid" <?php echo 'src="/uploads/events/'.$model->logo.'"'?> style="height: 65px;"/>
                                </a></div>
                        <?php endif;?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description'); ?>
</label>
                    <div class="controls">
                        <?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'Events[description]', 'value' => isset($model->description) ? $model->description : '', 'editorTemplate' => 'full' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'website1'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'website1',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'website2'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'website2',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'pdf'); ?>
</label>
                    <div class="controls">
                        <?php
                            echo $form->fileField($model,'pdf');
                            $lenghtNum = 20;
                            $pdfLeght 	= strlen($model->pdf);
                            if($pdfLeght>$lenghtNum){
                                $pdfStart 	= $pdfLeght - $lenghtNum;
                                $pdfName 	= substr( $model->pdf , $pdfStart, $lenghtNum);
                                $pdfName 	= '... '.$pdfName;
                            }
                            else{
                                $pdfName = $model->pdf;
                            }

                            if($model->pdf):
                                echo "<a style='padding-left:20px;color:#616161;' href='/uploads/events/pdf/".$model->pdf."' >".$pdfName."</a>";
                            endif;
                        ?>
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