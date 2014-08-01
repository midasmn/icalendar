<?php
/* @var $this YmdController */
/* @var $model Ymd */

$this->breadcrumbs=array(
	'Ymds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ymd', 'url'=>array('index')),
	array('label'=>'Create Ymd', 'url'=>array('create')),
	array('label'=>'Update Ymd', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ymd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ymd', 'url'=>array('admin')),
);
?>

<h1>View Ymd #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'calendar_id',
		'yyyy',
		'mm',
		'dd',
		'img_path',
		'img_alt',
		'order',
		'createdate',
		'updatedate',
	),
)); ?>
