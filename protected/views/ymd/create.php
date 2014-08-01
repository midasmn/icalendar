<?php
/* @var $this YmdController */
/* @var $model Ymd */

$this->breadcrumbs=array(
	'Ymds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ymd', 'url'=>array('index')),
	array('label'=>'Manage Ymd', 'url'=>array('admin')),
);
?>

<h1>Create Ymd</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>