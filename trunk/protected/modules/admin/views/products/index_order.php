<?php error_reporting(0); ?>
<div class="page-header">
    <h1><?php echo Yii::t('global', 'Manage'); ?> 
    <small><?php echo Yii::t('global', 'Products'); ?></small></h1>
</div>

<div class="row-fluid"><div class="span12">
<div class="head clearfix">
    <div class="isw-grid"></div>
    <h1><?php echo Yii::t('global', 'Products'); ?></h1>      
    <ul class="buttons">
        <li><a class="isw-plus tipb" href="<?php echo $this->createUrl('products/create') ?>" data-original-title="<?php echo Yii::t('global', 'Create'); ?> <?php echo Yii::t('global', 'Products'); ?>"></a></li>
    </ul>                        
</div>
<div class="block-fluid table-sorting">
<?php 
    $checkType = isset( $type )? $type: 0;
    if( $checkType == Products::STATUS_BEST_SELLER_ACTIVE ){
?>
      <form action="" method="get"><br />
                <table style=" padding: 10px;" align="center">
                    <td class="label-filter"><?php echo Yii::t('global', 'Option View')?></td>
                    <td class="online">
                        <select name="bestseller">
                            <?php
                            if( $bestseller == 1 ){ ?>
                                <option value="0" ><?php echo Yii::t('global','Mark as Best Seller') ?></option>
                                <option value="1" selected="selected" ><?php echo Yii::t('global','Order the list') ?></option>
                            <?php } else { ?>
                                <option value="0" selected="selected" ><?php echo Yii::t('global','Mark as Best Seller') ?></option>
                                <option value="1"><?php echo Yii::t('global','Order the list') ?></option>
                            <?php }
                            ?>
                        </select>
                    </td>
                    <td align="right"><input type="submit" class="btn" value="<?php echo Yii::t('global', 'View')?>" /></td>
                </table>
            </form>
<?php
    } 
    $active_product = Products::getActiveProduct();
    $best_seller    = Products::getBestSeller();
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid-new',
	'dataProvider'=>$model->getListProductOrder(),

	//'filter'=>$model,
	'columns'=>array(
		array(
            'header'=>Yii::t('global','Image'),
            'type' => 'raw',
            'value' => 'Products::showAdminImageNew( $data["image"] )',
            'htmlOptions'=>array('style'=>'width:80px;'),
            'name'=>'image',
        ),
        array(
            'name'=>'is_home',
            'header'=>Yii::t('global','Active Product'),
            'type' => 'raw',
            //'filter'=>$active_product,
            'value' => 'Products::getStatusProduct($data["is_home"])',
            'htmlOptions'=>array('style'=>'width:70px;')
        ),
        array(
            'name'=>'best_seller',
            'header'=>Yii::t('global','Best Seller'),
            'type' => 'raw',
            //'filter'=>$best_seller,
            'value' => 'Products::getStatusBestSeller( $data["best_seller"] )',
            'htmlOptions'=>array('style'=>'width:70px;')
        ),
        array(
            'name'=>'id',
            'header'=>Yii::t('global','Product number'),
            'type' => 'raw',
            'value' => '$data["id"]',
            'htmlOptions'=>array('style'=>'width:30px;')
        ),

        array(
            'name'=>'name',
            'header'=>Yii::t('global','Product name'),
            'type' => 'raw',
            'value' => '$data["name"]',
            'htmlOptions'=>array('style'=>'width:150px;')
        ),
        array(
            'header'=>Yii::t('global','Total Sales'),
            'name'=>'total',
            'type' => 'raw',
            'value' => '$data["total"]',
            'htmlOptions'=>array('style'=>'width:86px;')
        ),
        array(
            'name'=>'price',
            'type' => 'raw',
            'value' => '$data["price"]." USD"',
            'htmlOptions'=>array('style'=>'width:50px;')
        ),
        array(
            'name'=>'created',
            'type' => 'raw',
            'value' => '$data["created"]',
            'htmlOptions'=>array('style'=>'width:90px;')
        ),
        
//        array(
//            'name'=>'category',
//            'header'=>Yii::t('global', 'Category'),
//            'type' => 'raw',
//            'filter'=>$catProducts,
//            'value' => '$data->getProductCategory($data->id)',
//            'htmlOptions'=>array('style'=>'width:100px;')
//        ),
//        array(
//            'name'=>'group',
//            'header'=>Yii::t('global', 'Group'),
//            'type' => 'raw',
//            'filter'=>$Groups,
//            'value' => '$data->getProductGroup($data->id)',
//            'htmlOptions'=>array('style'=>'width:100px;')
//        ),
		array(
			'class'=>'CButtonColumn',
            'htmlOptions'=>array('style'=>'width:30px;'),
            'template'=>'{view}{update}{delete}',
            'buttons'=>array (
                 'view'=>array(
                        'url'=>'Yii::app()->createUrl("/admin/products/view", array("id"=>$data["id"]))',
                 ),
                 'update'=>array(
                        'url'=>'Yii::app()->createUrl("/admin/products/update", array("id"=>$data["id"]))',
                 ),
                 'delete'=>array(
                        'url'=>'Yii::app()->createUrl("/admin/products/delete", array("id"=>$data["id"]))',
                 ),
            ),
		),
	),
)); ?>
</div>
</div></div>

<script type="text/javascript">$(document).ready(function(){$('.filters select').css('width', '100px')})</script>