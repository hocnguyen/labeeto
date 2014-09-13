<div class="container-fluid">

<div class="row-fluid">
<div class="span12">

<div class="containerHeadline tableHeadline">
    <h2><?php echo Yii::t('global', 'Presses'); ?></h2>
    <form>
        <div class="input-append">
            <span class="add-on add-on-middle add-on-mini" onclick="window.location.href='<?php echo $this->createUrl('press/create') ?>'"><i class="icon-plus-sign" title="Create press"></i></span>
            <span class="add-on add-on-middle add-on-mini minimizeTable"><i class="icon-caret-down"></i></span>
            <span class="add-on add-on-last add-on-mini removeTable"><i class="icon-remove"></i></span>
        </div>
    </form>

</div>

<div class="floatingBox table">
<div class="container-fluid">

    <?php
    $active_press           = Press::model()->getActivePress();
    $catNewspaperTitle   	= NewspapersTitles::getAllNewspaper();
    $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'press-grid',
    'htmlOptions' => array('class' => 'table table-bordered table-hover table-striped'),
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'afterAjaxUpdate' => 'reinstallDatePicker',
    'columns'=>array(
        array(
            'name'=>'id',
            'value'=>'$data->id',
            'htmlOptions'=>array('style'=>'width:35px;')
        ),
		'name',
		'corporate_name',
        array(
            'name'=>'newspaper',
            'header'=>Yii::t('global', 'Newspapers Title'),
            'type' => 'raw',
            'filter'=>'',
            'value' => '$data->getNewspapersTitle($data->id)',
            'htmlOptions'=>array('style'=>'width:180px;')
        ),
		//'newspapersTitles.title',
        array(
            'name'=>'advertisers',
            'type' => 'raw',
            'filter'=>$active_press,
            'value' => '$data->getStatusPress($data->advertisers)',
            'htmlOptions'=>array('style'=>'width:90px;')
        ),
        array(
            'name' => 'created',
            'header'=>Yii::t('global', 'Created'),
            'htmlOptions'=> array('style' => 'text-align: center; width:135px;'),
            'filter' => $this->widget('CJuiDateTimePicker', array(
                        'model'=>$model,
                        'attribute'=>'created',
                        'mode'=>'date',
                        'options'=>array("dateFormat"=>Yii::app()->locale->getDateFormat('medium_js'), 'ampm' => false),
                        'language' => Yii::app()->language=='en'?'':Yii::app()->language,
                        'htmlOptions' => array(
                            'id' => 'datepicker_for_due_date',
                            'size' => '10',
                            'style' => 'text-align: center'
                        ),
                    ),
                    true)
        ),
		/*
		'image',
		'address',
		'additional_address',
		'city',
		'zip',
		'po_box',
		'zip_cedex',
		'city_cedex',
		'country',
		'phone',
		'fax',
		'email',
		'website',
		'phone_2',
		'email_2',
		'website_2',
		'delFlg',
		'created',
		'updated',
		*/
    array(
        'class'=>'ButtonColumn',
        'template'=>'{view} {update} {delete}',
        'buttons'=>array
        (

        'view' => array
        (
        'label'=>'<span class="label cyan" ><i class="icon-info-sign info" title="'.Yii::t('adminlang', 'View press').'"></i></span>',
        'options' => array( 'class' => 'tipb view-icon-tooltip',
        'data-original-title' => Yii::t('adminlang', 'View press'),
        'title'       => Yii::t('adminlang', 'View press'), ),
        ),
        'update' => array
        (
        'label'=>'<span class="label green" ><i class="icon-pencil edit" title="'.Yii::t('adminlang', 'Edit press').'"></i></span>',
        'options' => array( 'class' => 'tipb update-icon-tooltip',
        'data-original-title' => Yii::t('adminlang', 'Edit press'),
        'title'       => Yii::t('adminlang', 'Edit press'), ),
        ),
        'delete' => array
        (
        'label'=>'<span class="label red" ><i class="icon-trash delete" title="'.Yii::t('adminlang', 'Delete press').'"></i></span>',
        'options' => array( 'class' => 'tipb delete-icon-tooltip',
        'data-original-title' => Yii::t('adminlang', 'Delete press'),
        'title'       => Yii::t('adminlang', 'Delete press') , ),
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
<style>
    select{
        width: 110px !important;
    }
</style>