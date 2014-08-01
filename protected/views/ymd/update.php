<?php
/* @var $this YmdController */
/* @var $model Ymd */

$this->breadcrumbs=array(
	'Ymds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ymd', 'url'=>array('index')),
	array('label'=>'Create Ymd', 'url'=>array('create')),
	array('label'=>'View Ymd', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ymd', 'url'=>array('admin')),
);
?>

<h1>Update Ymd <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>