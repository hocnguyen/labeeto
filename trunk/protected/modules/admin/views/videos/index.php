<div class="container-fluid">

<div class="row-fluid">
<div class="span12">

<div class="containerHeadline tableHeadline">
	<h2><?php echo Yii::t('global', 'Videos'); ?></h2>
	<form>
		<div class="input-append">
			<span class="add-on add-on-middle add-on-mini" onclick="window.location.href='<?php echo $this->createUrl('videos/create') ?>'"><i class="icon-plus-sign" title="Create videos"></i></span>
			<span class="add-on add-on-middle add-on-mini minimizeTable"><i class="icon-caret-down"></i></span>
			<span class="add-on add-on-last add-on-mini removeTable"><i class="icon-remove"></i></span>
		</div>
	</form>

</div>

<div class="floatingBox table">
<div class="container-fluid">

	<?php 
	$active_video     = Videos::getActiveVideo();
	$public_video     = Videos::getPublicVideo();
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'videos-grid',
	'htmlOptions' => array('class' => 'table table-bordered table-hover table-striped'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		// 'alias',
		// 'pictures',
		array(
			'header'=>Yii::t('global','Pictures'),
			'type' => 'raw',
			'value' => '$data->showAdminImage()',
			'htmlOptions'=>array('style'=>'width:80px;')
		),
		// 'video',
		'grip',
		// 'description',
		array(
			'name'=>'type',
			'header'=>Yii::t('global','Video Type'),
			'type' => 'raw',
			'filter'=>$public_video,
			'value' => '$data->getTypeVideo($data->type)',
		),
		array(
			'name'=>'is_home',
			'header'=>Yii::t('global','Home Video'),
			'type' => 'raw',
			'filter'=>$active_video,
			'value' => '$data->getStatusVideo($data->is_home)',
		),
		/*'created',
		'updated',
		*/
	array(
		'class'=>'ButtonColumn',
		'template'=>'{view} {update} {delete}',
		'buttons'=>array
		(

		'view' => array
		(
		'label'=>'<span class="label cyan" ><i class="icon-info-sign info" title="'.Yii::t('adminlang', 'View videos').'"></i></span>',
		'options' => array( 'class' => 'tipb view-icon-tooltip',
		'data-original-title' => Yii::t('adminlang', 'View videos'),
		'title'       => Yii::t('adminlang', 'View videos'), ),
		),
		'update' => array
		(
		'label'=>'<span class="label green" ><i class="icon-pencil edit" title="'.Yii::t('adminlang', 'Edit videos').'"></i></span>',
		'options' => array( 'class' => 'tipb update-icon-tooltip',
		'data-original-title' => Yii::t('adminlang', 'Edit videos'),
		'title'       => Yii::t('adminlang', 'Edit videos'), ),
		),
		'delete' => array
		(
		'label'=>'<span class="label red" ><i class="icon-trash delete" title="'.Yii::t('adminlang', 'Delete videos').'"></i></span>',
		'options' => array( 'class' => 'tipb delete-icon-tooltip',
		'data-original-title' => Yii::t('adminlang', 'Delete videos'),
		'title'       => Yii::t('adminlang', 'Delete videos') , ),
	),
		),
	),
	),
	)); ?>


</div>
</div>

</div>
</div>

</div>


<script>
	$('.update-icon-tooltip').tooltip({
	});
	$('.view-icon-tooltip').tooltip({
	});
	$('.delete-icon-tooltip').tooltip({
	});
</script>