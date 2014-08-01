<?php
/* @var $this YmdController */
/* @var $model Ymd */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ymd-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calendar_id'); ?>
		<?php echo $form->textField($model,'calendar_id'); ?>
		<?php echo $form->error($model,'calendar_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yyyy'); ?>
		<?php echo $form->textField($model,'yyyy'); ?>
		<?php echo $form->error($model,'yyyy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mm'); ?>
		<?php echo $form->textField($model,'mm'); ?>
		<?php echo $form->error($model,'mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dd'); ?>
		<?php echo $form->textField($model,'dd'); ?>
		<?php echo $form->error($model,'dd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_path'); ?>
		<?php echo $form->textField($model,'img_path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_alt'); ?>
		<?php echo $form->textField($model,'img_alt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_alt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdate'); ?>
		<?php echo $form->textField($model,'createdate'); ?>
		<?php echo $form->error($model,'createdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedate'); ?>
		<?php echo $form->textField($model,'updatedate'); ?>
		<?php echo $form->error($model,'updatedate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->