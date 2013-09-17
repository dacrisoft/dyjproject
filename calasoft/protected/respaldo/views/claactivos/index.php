<?php
/* @var $this ClaactivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Claactivoses',
);

$this->menu=array(
	array('label'=>'Create Claactivos', 'url'=>array('create')),
	array('label'=>'Manage Claactivos', 'url'=>array('admin')),
);
?>

<h1>Claactivoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
