<?php
/* @var $this ScraperController */
/* @var $model Scraper */

$this->breadcrumbs=array(
	'Scrapers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Scraper', 'url'=>array('index')),
	array('label'=>'Create Scraper', 'url'=>array('create')),
	array('label'=>'Update Scraper', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scraper', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scraper', 'url'=>array('admin')),
);
?>

<h1>View Scraper #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'exm',
		'name',
		'baseurl',
		'cronname',
		'order',
		'createdate',
		'updatedate',
	),
)); ?>
