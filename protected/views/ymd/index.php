<?php
/* @var $this YmdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ymds',
);

$this->menu=array(
	array('label'=>'Create Ymd', 'url'=>array('create')),
	array('label'=>'Manage Ymd', 'url'=>array('admin')),
);
?>

<h1>Ymds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
