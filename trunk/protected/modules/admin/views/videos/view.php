
<div class="container-fluid">
	<div class="page-header" style="border-bottom: 0px solid !important">
		<h1>View <small>
	   <small><?php echo Yii::t('global', 'Videos'); ?> #<?php echo $model->id; ?></small></h1>
	</div>
	<div>
		<div class="image image-product"><!--vide form-->
		<?php
			$video       = $model->video;
				
			if($video){
				$flash = Yii::app()->params['homeUrl'].'/themes/default/plugin/jwplayer/jwplayer.swf';
				$js     = Yii::app()->params['homeUrl'].'/themes/default/plugin/jwplayer/jwplayer.js';
				if(($model->pictures) and $model->pictures !='')
				$imagesvideo      = '/uploads/video/'.$model->pictures;
				$video = Yii::app()->params['homeUrl'].'/uploads/video/'.$video;


				echo "<script type='text/javascript' src='".$js."'></script><div id='mediaspace'></div>
							<script type='text/javascript'>
							jwplayer('mediaspace').setup({
							flashplayer: '".$flash."',
							file: '".$video."',
							image: '".$imagesvideo."',
							width: '346',
							height: '195',
							autostart: 'false',
							});
					</script>";

				echo '<div class="pol-lft-txt">
					<h4 class="float-width">'.$name.'</h4>
					<h6><span><i class="fa fa-clock-o"></i>'.$date.'</span></h6>
					<p class="float-width">'.$description.'</p>
				</div>';
			}
		?>
		</div>
		<!-- <div class="image image-product">
			<a class="fancybox" <?php //echo 'href="/uploads/video/'.$model->pictures.'"'?> rel="group">
				<img class="img-polaroid" <?php// echo 'src="/uploads/video/'.$model->pictures.'"'?> style="width:125px;margin:10px;"/>
			</a>
		</div> -->
		<div style="margin:2px 10px;">
			<span class="icon-pencil"></span> 
			<a href="<?php echo $this->createUrl('/admin/videos/update',array('id'=>$model->id)); ?>">
				<?php echo Yii::t('global','Edit') ?>
			</a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="containerHeadline tableHeadline">
				<i class="icon-table"></i>
				<h2><?php echo Yii::t('global', 'Videos'); ?> </h2>
				<form class="header-tab-view not-bor">
					<div class="input-append">
						<div class="add-on add-on-middle add-on-mini minimizeTable "><i class="icon-caret-down"></i></div>
						<div class="add-on add-on-last add-on-mini removeTable"><i class="icon-remove"></i></div>
					</div>
				</form>
			</div>
			<div class="floatingBox table table-view-user">
				<div class="container-fluid">
					<?php 
					$type_video   = Videos::getTypeVideo($model->type);
					$status_video = Videos::getStatusVideo($model->is_home);
					$this->widget('zii.widgets.CDetailView', array(
					'htmlOptions' => array('class' => 'table-hover', 'style'=>'width:100% !important;'),
					'data'=>$model,
					'attributes'=>array(
					array('name'=>'id'),
					array('name'=>'title'),
					array('name'=>'grip'),
					array('name'=>'description','type'=>'html'),
					array('name'=>'type', 'value' => $type_video),
					array('name'=>'is_home', 'value' => $status_video),
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