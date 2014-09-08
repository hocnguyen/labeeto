
<!--<div class="page-header">
	<h1><?php /*echo Yii::t('global', 'Configure')*/?> <small><?php /*echo Yii::t('global', 'Settings')*/?></small></h1>
</div>-->

<!-- Start .notifications -->
<?php $this->widget('widgets.admin.notifications'); ?>
<!-- End .notifications -->

<?php //echo CHtml::form(); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'settings-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

<div class="row-fluid">
	<div class="col-lg-12">
		<div class="head clearfix">
			<div class="isw-settings"></div>
			<h1><?php echo Yii::t('global', 'General Settings')?></h1>                   
		</div>
		<div class="block-fluid">			
				<?php if( count($cat1) ): ?>
					<?php foreach ($cat1 as $row): ?>
						<div class="row-form clearfix">
							<div class="col-lg-4">
								<span<?php if( CHtml::encode($row->description) ): ?> class="tipb" data-original-title='<?php echo Yii::t('global', $row->description); ?>'<?php endif; ?>>
									<?php echo Yii::t('global', $row->title); ?>
								</span>
								<?php if( $row->value && $row->default_value != $row->value ): ?><span style='color:red;'><?php echo Yii::t('adminsettings', '(Setting Changed)'); ?></span><?php endif; ?>
							</div>
							<div class="col-lg-6">
								<?php $this->parseSetting( $row ); ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td style='text-align:center;'><?php echo Yii::t('adminsetings', 'No Settings Added Yet.'); ?></td>
					</tr>
				<?php endif; ?>
			<?php if( count($cat1) ): ?>
			<div class="footer tar">
				
			</div>
			<?php endif; ?>
			
		</div>
	</div>                                
</div>

<div class="row-fluid">
	<div class="col-lg-12">
		<div class="head clearfix">
			<div class="isw-settings"></div>
			<h1><?php echo Yii::t('global', 'System Settings')?></h1>                   
		</div>
		<div class="block-fluid">
			
				<?php if( count($cat3) ): ?>
					<?php foreach ($cat3 as $row): ?>
						<div class="row-form clearfix">
							<div class="col-lg-4">
								<span<?php if( CHtml::encode($row->description)): ?> class="tipb" data-original-title='<?php echo CHtml::encode($row->description); ?>'<?php endif; ?>>
									<?php echo Yii::t('global', $row->title); ?>
								</span>
								<?php if( $row->value && $row->default_value != $row->value ): ?><span style='color:red;'><?php echo Yii::t('adminsettings', '(Setting Changed)'); ?></span><?php endif; ?>
							</div>
							<div class="col-lg-6">
								<?php $this->parseSetting( $row ); ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td style='text-align:center;'><?php echo Yii::t('adminsetings', 'No Settings Added Yet.'); ?></td>
					</tr>
				<?php endif; ?>
			<?php if( count($cat1) ): ?>
			<div class="footer tar">
				
			</div>
			<?php endif; ?>
			
		</div>
	</div>                                
</div>



<?php echo CHtml::submitButton(Yii::t('adminglobal', 'Save'), array( 'name' => 'submit', 'class'=>'btn')); ?>
<?php $this->endWidget(); ?>
<?php //echo CHtml::endForm(); ?>