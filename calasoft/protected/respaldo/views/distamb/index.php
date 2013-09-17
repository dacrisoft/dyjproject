<?php
/* @var $this DistambController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Distambs',
);

$this->menu=array(
	array('label'=>'Create Distamb', 'url'=>array('create')),
	array('label'=>'Manage Distamb', 'url'=>array('admin')),
);
?>

<h1>Distambs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
