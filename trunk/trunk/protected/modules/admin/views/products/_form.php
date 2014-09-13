<!--tung add-->
<div class="row-fluid">
	<div class="span12">
		<div class="containerHeadline">
			<i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','Products'); ?></h2>
			<div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
			<div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
		</div>
		<div class="floatingBox" style="display: block;">
			<div class="container-fluid">
				<?php 
						$allTag = Tags::model()->getAllTag();
						$form=$this->beginWidget('CActiveForm', 
												array(	'id'=>'products-form',
														'enableAjaxValidation'=>false,
														'htmlOptions'=>array(
																			'enctype' => 'multipart/form-data',
																			'class'=>'form-horizontal contentForm',
																			'data-validate'=>'parsley',
																)
														)
												); 
						$this->widget('widgets.admin.notifications');
				?>
				<?php echo $form->errorSummary($model); ?>
					<div class="control-group">
						<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'name'); ?></label>
						<div class="controls">
							<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
						</div>
					</div>
					<div class="control-group">
						<label for="fullname" class="control-label"  style="padding-top: 0px;"><?php echo $form->labelEx($model,'type'); ?></label>
						<div class="controls">
						<?php							
							$type_product 	= Products::getPublicProduct(); 
							echo $form->dropDownList($model,'type', $type_product); 
						?>
						</div>
					</div>
					<div class="control-group">
						<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'pdf'); ?></label>
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
									echo "<a style='padding-left:20px;color:#616161;' href='/uploads/product/pdf/".$model->pdf."' >".$pdfName."</a>";
								endif;
							?>
						</div>
					</div>
					<div class="control-group">
						<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'grip'); ?></label>
						<div class="controls">
							<?php echo $form->textField($model,'grip',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
						</div>
					</div>
					<div class="control-group">
						<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'oder_product_id'); ?></label>
						<div class="controls">
							<?php echo $form->textField($model,'oder_product_id',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
						</div>
					</div>
					<div class="control-group cat-require">
						<label for="fullname" class="control-label"><?php echo Yii::t('global', 'Categories')?>*</label>
						<div class="controls">							
							<select name="ProductCategories[]" id="s2_2" multiple="multiple" class="span10 validate[required]" data-required="true" >
								<?php
									$cats = array(); Categories::getTree($cats);
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
						<label for="fullname" class="control-label"  style="padding-top: 0px;"><?php echo $form->labelEx($model,'is_home'); ?></label>
						<div class="controls">
							<?php echo $form->checkBox($model,'is_home'); ?>
						</div>
					</div>
					<div class="control-group">
						<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'image'); ?></label>
						<div class="controls">
							<?php echo $form->fileField($model,'image'); ?>
							<?php if ($model->image):?>
								<div style="margin:10px;"><a class="fancybox" <?php echo 'href="/uploads/product/'.$model->image.'"'?> rel="group">
									<img class="img-polaroid" <?php echo 'src="/uploads/product/'.$model->image.'"'?> style="height: 65px;"/>
								</a></div>
							<?php endif;?>
						</div>
					</div>
					<div class="control-group">
						<label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description'); ?></label>
						<div class="controls">
							<?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'Products[description]', 'value' => isset($model->description) ? $model->description : '', 'editorTemplate' => 'full' )); ?>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn btncheckcat btn-primary')); ?>
							<button class="btn" type="reset">Reset</button>
						</div>
					</div>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
</div>
<!--end tung add-->