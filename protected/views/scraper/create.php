<?php
/* @var $this ScraperController */
/* @var $model Scraper */

$this->breadcrumbs=array(
	'Scrapers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scraper', 'url'=>array('index')),
	array('label'=>'Manage Scraper', 'url'=>array('admin')),
);
?>

<h1>Create Scraper</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>