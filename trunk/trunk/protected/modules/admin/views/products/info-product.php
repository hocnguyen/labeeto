<div class="span12">
	<div class="image image-product">
		<a class="fancybox" <?php echo 'href="/uploads/product/'.$model->image.'"'?> rel="group">
			<img class="img-polaroid" <?php echo 'src="/uploads/product/'.$model->image.'"'?> style="width:125px;margin:10px;"/>
		</a>
	</div>
	<div style="margin:2px 10px;">
		<span class="icon-pencil"></span> 
		<a href="<?php echo $this->createUrl('/admin/products/update',array('id'=>$model->id)); ?>">
			<?php echo Yii::t('global','Edit') ?>
		</a>
	</div>
</div>
<div class="container-fluid">
	<?php 
	$type_product 	= Products::getTypeProduct($model->type);
	$status_product 	= Products::getStatusProduct($model->type);
	$link_file = CHtml::link(CHtml::encode($model->pdf), Yii::app()->baseUrl . '/uploads/product/pdf/'.$model->pdf);

	$this->widget('zii.widgets.CDetailView', array(
	'htmlOptions' => array('class' => 'table-hover', 'style'=>'width:100% !important;'),
	'data'=>$model,
	'attributes'=>array(
	array('name'=>'id'),
	array('name'=>'name'),
	array('name'=>'type', 'value' => $type_product),
	array('name'=>'is_home', 'value' => $status_product),
	array('name'=>'grip'),
	array('name'=>'pdf','type'=>'raw','value'=>$link_file),
	array('name'=>'alias'),
	array('name'=>'created'),
	array('name'=>'updated'),
	array('name'=>'description','type'=>'html'),
	),
	)); ?>

</div>