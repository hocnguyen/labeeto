
<div class="container-fluid">
    <div class="page-header" style="border-bottom: 0px solid !important">
        <h1><?php  echo Yii::t('global','View'); ?> <small>
       <small><?php echo Yii::t('global', 'Hospitals'); ?> #<?php echo $model->id; ?></small></h1>
    </div>
    <div class="row-fluid">
        <div class="span12 contentDivider"></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="containerHeadline tableHeadline">
                <i class="icon-table"></i>
                <h2><?php echo Yii::t('global', 'Hospitals'); ?> </h2>
                <form class="header-tab-view not-bor">
                    <div class="input-append">
                        <div class="add-on add-on-middle add-on-mini minimizeTable "><i class="icon-caret-down"></i></div>
                        <div class="add-on add-on-last add-on-mini removeTable"><i class="icon-remove"></i></div>
                    </div>
                </form>
            </div>
            <div class="floatingBox table table-view-user">
                <div class="container-fluid">
                    <?php $this->widget('zii.widgets.CDetailView', array(
                    'htmlOptions' => array('class' => 'table-hover', 'style'=>'width:100% !important;'),
                    'data'=>$model,
                    'attributes'=>array(
                            array('name'=>'corporate_name'),
                            array('name'=>'department', 'value'=>$model->department0->name, 'type'=>'raw'),
                            array('name'=>'corporate_name_2'),
                            array('name'=>'description'),
                            array('name'=>'link','value'=>CHtml::link(CHtml::encode($model->link),$model->link) ,'type'=>'raw'),
                            array('name'=>'address'),
                            array('name'=>'additional_address'),
                            array('name'=>'po_box'),
                            array('name'=>'cedex'),
                            array('name'=>'city_cedex'),
                            array('name'=>'zip'),
                            array('name'=>'city'),
                            array('name'=>'country','value'=>Countries::model()->getCountryById( $model->country ), 'type'=>'raw'),
                            array('name'=>'website','value'=>CHtml::link(CHtml::encode($model->website),$model->website) ,'type'=>'raw'),
                            array('name'=>'phone'),
                            array('name'=>'fax'),
                            array('name'=>'email'),
                            array('name'=>'center_for_laryngectomy', 'value'=> Press::getStatusPress($model->center_for_laryngectomy), 'type'=>'raw'),
                            array('name'=>'created'),
                            array('name'=>'updated'),
                    ),
                    )); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .content{
        font-size: 14px !important;
    }
</style>