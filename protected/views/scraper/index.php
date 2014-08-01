<?php
/* @var $this ScraperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scrapers',
);

$this->menu=array(
	array('label'=>'Create Scraper', 'url'=>array('create')),
	array('label'=>'Manage Scraper', 'url'=>array('admin')),
);
?>

<h1>Scrapers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
