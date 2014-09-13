<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.gears.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.silverlight.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.flash.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.browserplus.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.html5.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/plupload.js' ); ?>
<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js' ); ?>
    <div class="row-fluid">
<div class="span12">
    <div class="containerHeadline">
        <i class="icon-ok-sign"></i><h2><?php echo Yii::t('global','Supplier Products'); ?></h2>
        <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
        <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
    </div>

    <div class="floatingBox" style="display: block;">
        <div class="container-fluid">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'supplier-products-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions'=>array(
                                'enctype' => 'multipart/form-data',
                                'class'=>'form-horizontal contentForm',
                                'data-validate'=>'parsley',
                                )
                )); ?>

            <?php echo $form->errorSummary($model); ?>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'name'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>'span10', 'data-required'=>'true')); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'supplier_id'); ?>
</label>
                    <div class="controls">
                            <?php $suppliers = Suppliers::model()->findAll();
                            foreach ($suppliers as $key=>$name){
                                $range_name1[$name['id']] =  $name['corporate_name'];
                            } ?>


                            <?php echo $form->dropDownList($model,'supplier_id',$range_name1); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_activity'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->dropDownList($model,'is_activity',Utils::getStatusCommon() ); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_brand'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->dropDownList($model,'is_brand',Utils::getStatusCommon() ); ?>
                    </div>
                </div>
            <div class="control-group">
                <label for="fullname" class="control-label"><?php echo Yii::t('global','Image Files'); ?>
                </label>
                <div class="controls">
                    <?php if ($model->id):?>
                        <div class="block-fluid table-sorting">

                            <?php
                            $gallery=new SupplierProductsFile();
                            $gallery->unsetAttributes();  // clear any default values
                            $gallery->attributes=$_GET['ProductGalleries'];
                            $this->widget('zii.widgets.grid.CGridView', array(
                                'id'=>'image-supplier-product-galleries-grid',
                                'htmlOptions' => array('class' => 'table table-bordered table-hover table-striped'),
                                'dataProvider'=>$gallery->search($model->id),
                                'columns'=>array(
                                    array(
                                        'name'=>'list_file',
                                        'header'=>Yii::t('global', 'Uploaded Image'),
                                        'value' => '$data->showAdminImage()',
                                        'type' => 'html'
                                    ),
                                    array(
                                        'class'=>'CButtonColumn',
                                        'template'=>'{delete}',
                                        'buttons'=>array(
                                            'delete'=>array(
                                                'label'=>'<span class="label red" ><i class="icon-trash delete" title="'.Yii::t('adminlang', 'Delete').'"></i></span>',
                                                'options' => array( 'class' => 'tipb delete-icon-tooltip',
                                                    'data-original-title' => Yii::t('adminlang', 'Delete'),
                                                    'title'       => Yii::t('adminlang', 'Delete') , ),

                                            ),
                                        ),
                                    ),
                                ),
                            )); ?>
                        </div>
                    <?php endif;?>
                    <div id="uploader"><center><?php echo Yii::t('global','Browser don\'t support a HTML5') ?></center></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function(){
                            var uploader = $("#uploader").pluploadQueue({
                                runtimes : 'html5', // html5 uploader
                                url : '<?php echo $this->createUrl('supplierProducts/uploadImg/')?>', // server uploader
                                max_file_size : '6mb',
                                chunk_size : '6mb',
                                unique_names : true,
                                dragdrop : true,
                                //resize : {width : 320, height : 240, quality : 100},
                                filters : [
                                    {title : "Image files", extensions : "jpg,gif,png"}
                                ]
                                ,
                                init : {
                                    FilesAdded: function(up, files) {
                                        up.start();
                                    },
                                    UploadComplete: function(up, files) {
                                    }
                                }
                            });

                        });
                    </script>
                </div>
            </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'Reference'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'Reference',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>
            <div class="control-group">
                <label for="fullname" class="control-label"><?php echo Yii::t('global','Pdf Files'); ?>
                </label>
                <div class="controls">
                    <?php if ($model->id):?>
                        <div class="block-fluid table-sorting">

                            <?php
                            $gallery=new SupplierProductsFile();
                            $gallery->unsetAttributes();  // clear any default values
                            $_GET['ProductGalleries']['product_id'] = $model->id;
                            $gallery->attributes=$_GET['ProductGalleries'];
                            $this->widget('zii.widgets.grid.CGridView', array(
                                'id'=>'pdf-supplier-product-galleries-grid',
                                'htmlOptions' => array('class' => 'table table-bordered table-hover table-striped'),
                                'dataProvider'=>$gallery->search( $model->id, SupplierProductsFile::TYPE_PDF ),
                                'columns'=>array(
                                    array(
                                        'name'=>'list_file',
                                        'header'=>Yii::t('global', 'Uploaded pdf'),
                                        'value' => '$data->list_file',
                                        'type' => 'html'
                                    ),
                                    array(
                                        'class'=>'CButtonColumn',
                                        'template'=>'{delete}',
                                        'buttons'=>array(
                                            'delete'=>array(
                                                'label'=>'<span class="label red" ><i class="icon-trash delete" title="'.Yii::t('adminlang', 'Delete').'"></i></span>',
                                                'options' => array( 'class' => 'tipb delete-icon-tooltip',
                                                    'data-original-title' => Yii::t('adminlang', 'Delete'),
                                                    'title'       => Yii::t('adminlang', 'Delete') , ),

                                            ),
                                        ),
                                    ),
                                ),
                            )); ?>
                        </div>
                    <?php endif;?>
                    <div id="uploader_pdf"><center><?php echo Yii::t('global','Browser don\'t support a HTML5') ?></center></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function(){
                            var uploader = $("#uploader_pdf").pluploadQueue({
                                runtimes : 'html5', // html5 uploader
                                url : '<?php echo $this->createUrl('supplierProducts/uploadPdf/')?>', // server uploader
                                max_file_size : '6mb',
                                chunk_size : '6mb',
                                unique_names : true,
                                dragdrop : true,
                                //resize : {width : 320, height : 240, quality : 100},
                                filters : [
                                    {title : "Pdf files", extensions : "pdf"}
                                ]
                                ,
                                init : {
                                    FilesAdded: function(up, files) {
                                        up.start();
                                    },
                                    UploadComplete: function(up, files) {
                                    }
                                }
                            });

                        });
                    </script>
                </div>
            </div>

            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'description'); ?>
</label>
                    <div class="controls">
                        <?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'SupplierProducts[description]', 'value' => isset($model->description) ? $model->description : '', 'editorTemplate' => 'full' )); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_new_product'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'is_new_product'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_best_sale'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'is_best_sale'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_promotion'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'is_promotion'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_highlighted'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'is_highlighted'); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'is_disable_hightlight'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->checkBox($model,'is_disable_hightlight'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'chip_id'); ?>
                    </label>
                    <div class="controls">
                        <?php $listChip  = CHtml::listData(Chips::model()->findAll('id != 0'),'id','name'); ?>
                        <?php echo $form->dropDownList( $model,'chip_id', $listChip ); ?>
                    </div>
                </div>
                            <div class="control-group">
                    <label for="fullname" class="control-label"><?php echo $form->labelEx($model,'link_hearingtv'); ?>
</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'link_hearingtv',array('size'=>60,'maxlength'=>255, 'class'=>'span10')); ?>
                    </div>
                </div>

                            <div class="control-group">
                    <div class="controls">
                        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn btn-primary')); ?>
                        <button class="btn" type="reset">Reset</button>
                    </div>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>

</div>
    </div>