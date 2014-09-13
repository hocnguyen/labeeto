
<div class="container-fluid">
    <div class="page-header" style="border-bottom: 0px solid !important">
        <h1><?php  echo Yii::t('global','View'); ?> <small>
       <small><?php echo Yii::t('global', 'Doctors'); ?> #<?php echo $model->id; ?></small></h1>
    </div>
    <div class="row-fluid">
        <div class="span12 contentDivider"></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="containerHeadline tableHeadline">
                <i class="icon-table"></i>
                <h2><?php echo Yii::t('global', 'Doctors'); ?> </h2>
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
                        array('name'=>'title'),
                        array('name'=>'name'),
                        array('name'=>'first_name'),
                        array('name'=>'ent', 'value'=>Doctors::model()->getStatus( $model->ent ), 'type'=>'raw'),
                        array('name'=>'department', 'value'=>$model->department0->name, 'type'=>'raw' ),
                        array('name'=>'phoniatricians', 'value'=>Doctors::model()->getStatus( $model->phoniatricians ), 'type'=>'raw'),
                        array('name'=>'free_field'),
                        array('name'=>'degrees','type'=>'raw'),
                        array('name'=>'status_grade','type'=>'raw'),
                        array('name'=>'specialty', 'value'=>CHtml::link( $model->services->name, array( '/admin/services/view?id='.$model->specialty ) ), 'type'=>'raw'),
                        array('name'=>'audiometry', 'value'=>Doctors::model()->getStatus( $model->audiometry ), 'type'=>'raw'),
                        array('name'=>'audiometry_ff'),
                        array('name'=>'phoniatry', 'value'=>Doctors::model()->getStatus( $model->phoniatry ), 'type'=>'raw'),
                        array('name'=>'phoniatry_ff'),
                        array('name'=>'speech_therapy', 'value'=>CHtml::link($model->speechTherapist->name, array('/admin/speechTherapist/view?id='.$model->speech_therapy)), 'type'=>'raw'),
                        array('name'=>'specific_phone_number'),
                        array('name'=>'specific_fax'),
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