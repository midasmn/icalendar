<?php
/* @var $this ScraperController */
/* @var $model Scraper */

$this->breadcrumbs=array(
	'Scrapers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scraper', 'url'=>array('index')),
	array('label'=>'Create Scraper', 'url'=>array('create')),
	array('label'=>'View Scraper', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scraper', 'url'=>array('admin')),
);
?>

<h1>Update Scraper <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>