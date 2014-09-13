
	<div class="row-fluid">
<div class="span12">
	<div class="containerHeadline">
		<i class="icon-ok-sign"></i><h2>videos</h2>
		<div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
		<div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
	</div>

	<div class="floatingBox" style="display: block;">
		<div class="container-fluid">

			<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'videos-form',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array(
								'enctype' => 'multipart/form-data',
								'class'=>'form-horizontal contentForm',
								'data-validate'=>'parsley',
								)
				)); ?>

			<?php echo $form->errorSummary($model); ?>
				<div class="control-group">
					<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'title'); ?></label>
					<div class="controls">
						<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
					</div>
				</div>
				<div class="control-group">
					<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'pictures'); ?></label>
					<div class="controls">
						<?php echo $form->fileField($model,'pictures'); ?>
						<?php if ($model->pictures):?>
							<div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/video/'.$model->pictures.'"'?> rel="group">
								<img class="img-polaroid" <?php echo 'src="/uploads/video/'.$model->pictures.'"'?> style="height: 65px;"/>
							</a></div>
						<?php endif;?>
					</div>
				</div>
				<div class="control-group">
					<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'video'); ?></label>
					<div class="controls">
						<?php								
							echo $form->fileField($model,'video');
							if($model->video):								
								echo CHtml::link($model->video,"/uploads/video/".$model->video,$htmlOptions=array ('style'=>'padding-left:20px;color:#616161;'));
							endif;
						?>
					</div>
				</div>
				<div class="control-group">
					<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'grip'); ?></label>
					<div class="controls">
						<?php echo $form->textField($model,'grip',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
					</div>
				</div>
				<div class="control-group">
					<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'type'); ?></label>
					<div class="controls">
						<?php
							 $type_video 	= Videos::getPublicVideo(); 
							echo $form->dropDownList($model,'type', $type_video); 
						?>
					</div>
				</div>
				<div class="control-group">
					<label for="fullname" class="control-label"  style="padding-top: 0px;"><?php echo $form->labelEx($model,'is_home'); ?></label>
					<div class="controls">
						<?php echo $form->checkBox($model,'is_home'); ?>
					</div>
				</div>
				<div class="control-group">
					<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description'); ?></label>
					<div class="controls">
						<?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'Videos[description]', 'value' => isset($model->description) ? $model->description : '', 'editorTemplate' => 'full' )); ?>
						
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