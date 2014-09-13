<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="containerHeadline tableHeadline">
				<h2><?php echo Yii::t('global', 'Articles'); ?></h2>
				<form>
					<div class="input-append">
						<span class="add-on add-on-middle add-on-mini" onclick="window.location.href='<?php echo $this->createUrl('products/create') ?>'"><i class="icon-plus-sign"></i></span>
						<span class="add-on add-on-middle add-on-mini minimizeTable"><i class="icon-caret-down"></i></span>
						<span class="add-on add-on-last add-on-mini removeTable"><i class="icon-remove"></i></span>
					</div>
				</form>
			</div>
			<div class="floatingBox table">
				<div class="container-fluid">
					<?php 
					//tungadd
					$catProducts    	= Categories::getAllCategory();
					$active_product 	= Products::getActiveProduct();
					$public_product 	= Products::getPublicProduct();

					$this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'products-grid',
					'htmlOptions' 		=> array('class' => 'table table-bordered table-hover table-striped image-product'),
					'dataProvider'		=>$model->search(),
					'afterAjaxUpdate' 	=> 'reinstalltoltipactions',
					'filter'=>$model,
					'columns'=>array(
						array(
							'name'=>'id',
							'header'=>Yii::t('global','ID'),
							'type' => 'raw',
							'value' => '$data->id',
							'htmlOptions'=>array('style'=>'width:30px;')
						),
						array(
							'header'=>Yii::t('global','Image'),
							'type' => 'raw',
							'value' => '$data->showAdminImage()',
							'htmlOptions'=>array('style'=>'width:80px;')
						),
						array(
							'name'=>'name',
							'header'=>Yii::t('global','Article name'),
							'type' => 'raw',
							'value' => '$data->name',
							'htmlOptions'=>array('style'=>'width:150px;')
						),
						array(
							'name'=>'category',
							'header'=>Yii::t('global', 'Category'),
							'type' => 'raw',
							'filter'=>$catProducts,
							'value' => '$data->getProductCategory($data->id)',
							'htmlOptions'=>array('style'=>'width:100px;')
						),
						array(
							'name'=>'type',
							'header'=>Yii::t('global','Article Type'),
							'type' => 'raw',
							'filter'=>$public_product,
							'value' => '$data->getTypeProduct($data->type)',
							'htmlOptions'=>array('style'=>'width:150px;')
						),
						array(
							'name'=>'grip',
							'header'=>Yii::t('global','Article Grip'),
							'type' => 'raw',
							'value' => '$data->grip'
						),
						array(
							'name'=>'pdf',
							'header'=>Yii::t('global','Article Pdf'),
							'type' => 'raw',
							'value' => '$data->pdf',
						),
						// array(
						// 	'name'=>'description',
						// 	'header'=>Yii::t('global','Product Description'),
						// 	'type' => 'raw',
						// 	'value' => '$data->description'
						// ),
						array(
							'name'=>'is_home',
							'header'=>Yii::t('global','Home  Article'),
							'type' => 'raw',
							'filter'=>$active_product,
							'value' => '$data->getStatusProduct($data->is_home)',
							'htmlOptions'=>array('style'=>'width:30px;')
						),
						array(
							'class'=>'ButtonColumn',
							'htmlOptions'=>array('style'=>'width:125px;'),
							'header' => 'Actions',
							'template'=>'{view} {update} {delete}',
							'buttons'=>array(
								'view' => array(
										'label'=>'<span class="label cyan" ><i class="icon-info-sign info"></i></span>',
										'options' => array( 
													'class' => 'tipb view-icon-tooltip',
													'data-original-title' => 'View products',
													'title'       => 'View products', ),
								),
								'update' => array(
										'label'=>'<span class="label green" ><i class="icon-pencil edit"></i></span>',
										'options' => array( 
													'class' => 'tipb update-icon-tooltip',
													'data-original-title' => 'Edit products',
													'title'       => 'Edit products', ),
								),
								'delete' => array(
										'label'=>'<span class="label red" ><i class="icon-trash delete"></i></span>',
										'options' => array( 
													'class' => 'tipb delete-icon-tooltip',
													'data-original-title' => 'Delete products',
													'title'       => 'Delete products', ),
								),

							),//end array buttons
						),//end class ButtonColumn
					),//end array columns
					)); ?>
				</div><!--end div container-fluid -->
			</div><!--end div floatingBox table -->
		</div><!--end div span12 -->
	</div><!--end div row-fluid -->
</div><!--end div container-fluid -->
<?php
	//register script toltip actions
	Yii::app()->clientScript->registerScript('re-install-toltip-actions', "

		reinstalltoltipactions();
		
		function reinstalltoltipactions(){
			jQuery('.update-icon-tooltip').tooltip({
				title: 'Edit products'
			});
			jQuery('.view-icon-tooltip').tooltip({
				title: 'View products'
			});
			jQuery('.delete-icon-tooltip').tooltip({
				title: 'Delete products'
			});
		}
	");
?>