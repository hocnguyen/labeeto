
<div class="container-fluid">
    <div class="page-header" style="border-bottom: 0px solid !important">
        <h1><?php  echo Yii::t('global','View'); ?> <small>
       <small><?php echo Yii::t('global', 'Networks'); ?> #<?php echo $model->id; ?></small></h1>
    </div>
    <div class="row-fluid">
        <div class="span12 contentDivider"></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="containerHeadline tableHeadline">
                <i class="icon-table"></i>
                <h2><?php echo Yii::t('global', 'Networks'); ?> </h2>
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
                            array('name'=>'grip'),
                            array('name'=>'description'),
                            array('name'=>'grip_related_centers'),
                            array('name'=>'description_related_centers'),
                            array('name'=>'advertiser', 'value'=>Networks::model()->getStatusNetwork( $model->advertiser ), 'type'=>'raw' ),
                            array('name'=>'address_1'),
                            array('name'=>'additional_address'),
                            array('name'=>'po_box'),
                            array('name'=>'zip_cedex_address_1'),
                            array('name'=>'city_cedex_address_1'),
                            array('name'=>'city_1'),
                            array('name'=>'zip_1'),
                            array('name'=>'phone_number_1a'),
                            array('name'=>'phone_1b'),
                            array('name'=>'fax_1a'),
                            array('name'=>'fax_1b'),
                            array('name'=>'a_email_1a'),
                            array('name'=>'email_1b'),
                            array('name'=>'website_1a'),
                            array('name'=>'website_1b'),
                            array('name'=>'address_2'),
                            array('name'=>'additional_address_2'),
                            array('name'=>'po_box_address_2'),
                            array('name'=>'zip_cedes_address_2'),
                            array('name'=>'city_cedex_address'),
                            array('name'=>'city_2'),
                            array('name'=>'zip_2'),
                            array('name'=>'phone_2a'),
                            array('name'=>'phone_2b'),
                            array('name'=>'fax_2a'),
                            array('name'=>'fax_2b'),
                            array('name'=>'email_2a'),
                            array('name'=>'email_2b'),
                            array('name'=>'website_2a'),
                            array('name'=>'website_2b'),
                            array('name'=>'logo', 'value'=>$model->showAdminImage(), 'type'=>'raw' ),
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