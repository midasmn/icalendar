<?php
/* @var $this YmdController */
/* @var $model Ymd */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calendar_id'); ?>
		<?php echo $form->textField($model,'calendar_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yyyy'); ?>
		<?php echo $form->textField($model,'yyyy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mm'); ?>
		<?php echo $form->textField($model,'mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dd'); ?>
		<?php echo $form->textField($model,'dd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_path'); ?>
		<?php echo $form->textField($model,'img_path',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_alt'); ?>
		<?php echo $form->textField($model,'img_alt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdate'); ?>
		<?php echo $form->textField($model,'createdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedate'); ?>
		<?php echo $form->textField($model,'updatedate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->