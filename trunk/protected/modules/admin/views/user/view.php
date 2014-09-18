
<div class="container-fluid">
    <div class="page-header" style="border-bottom: 0px solid !important">
        <h1><?php  echo Yii::t('global','View'); ?> <small>
       <small><?php echo Yii::t('global', 'User'); ?> #<?php echo $model->id; ?></small></h1>
    </div>
    <div class="row-fluid">
        <div class="span12 contentDivider"></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="containerHeadline tableHeadline">
                <i class="icon-table"></i>
                <h2><?php echo Yii::t('global', 'User'); ?> </h2>
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
                    array('name'=>'id'),
array('name'=>'username'),
array('name'=>'gender'),
array('name'=>'career'),
array('name'=>'email'),
array('name'=>'password'),
array('name'=>'joined'),
array('name'=>'role'),
array('name'=>'ehtnicity'),
array('name'=>'fname'),
array('name'=>'lname'),
array('name'=>'birthday'),
array('name'=>'photo'),
array('name'=>'address'),
array('name'=>'education'),
array('name'=>'religion'),
array('name'=>'height'),
array('name'=>'excercise'),
array('name'=>'passion'),
array('name'=>'goal'),
array('name'=>'smoke'),
array('name'=>'relations'),
array('name'=>'zipcode'),
array('name'=>'latitude'),
array('name'=>'longtitude'),
array('name'=>'drink'),
array('name'=>'status'),
array('name'=>'last_logged'),
array('name'=>'language'),
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