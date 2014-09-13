<div class="page-header">
    <h1><?php echo Yii::t('global', 'Manage'); ?> 
    <small><?php echo Yii::t('global', 'Coupons'); ?></small></h1>
</div>

<div class="row-fluid"><div class="span12">
<div class="head clearfix">
    <div class="isw-grid"></div>
    <h1><?php echo Yii::t('global', 'Coupons'); ?></h1>      
    <ul class="buttons">
        <li><a class="isw-plus tipb" href="<?php echo $this->createUrl('coupons/create') ?>" data-original-title="<?php echo Yii::t('global', 'Create'); ?> <?php echo Yii::t('global', 'Coupons'); ?>"></a></li>
    </ul>                        
</div>
<div class="block-fluid table-sorting">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'coupons-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'type',
		'status',
		'value',
		'total',
		/*
		'used',
		'created',
		'from_date',
		'to_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div></div>