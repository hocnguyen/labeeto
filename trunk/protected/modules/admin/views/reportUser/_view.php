<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reported_user')); ?>:</b>
	<?php echo CHtml::encode($data->reported_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blocked_user')); ?>:</b>
	<?php echo CHtml::encode($data->blocked_user); ?>
	<br />


</div>