<?php
/* @var $this CalendarController */
/* @var $model Calendar */

$this->breadcrumbs=array(
	'Calendars'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Calendar', 'url'=>array('index')),
	array('label'=>'Create Calendar', 'url'=>array('create')),
	array('label'=>'Update Calendar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Calendar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Calendar', 'url'=>array('admin')),
);
?>

<h1>View Calendar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'tags',
		'description',
		'sc_url',
		'sc_tag',
		'img_url',
		'img_tag',
		'status',
		'createdate',
		'updatedate',
		'author_id',
	),
)); ?>
