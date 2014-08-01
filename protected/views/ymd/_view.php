<?php
/* @var $this YmdController */
/* @var $data Ymd */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calendar_id')); ?>:</b>
	<?php echo CHtml::encode($data->calendar_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yyyy')); ?>:</b>
	<?php echo CHtml::encode($data->yyyy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mm')); ?>:</b>
	<?php echo CHtml::encode($data->mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dd')); ?>:</b>
	<?php echo CHtml::encode($data->dd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_path')); ?>:</b>
	<?php echo CHtml::encode($data->img_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_alt')); ?>:</b>
	<?php echo CHtml::encode($data->img_alt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdate')); ?>:</b>
	<?php echo CHtml::encode($data->createdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($data->updatedate); ?>
	<br />

	*/ ?>

</div>