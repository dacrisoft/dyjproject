<?php
/* @var $this ActivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Activoses',
);

$this->menu=array(
	array('label'=>'Create Activos', 'url'=>array('create')),
	array('label'=>'Manage Activos', 'url'=>array('admin')),
);
?>

<h1>Activoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
