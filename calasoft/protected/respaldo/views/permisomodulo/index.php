<?php
/* @var $this PermisomoduloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Permisomodulos',
);

$this->menu=array(
	array('label'=>'Create Permisomodulo', 'url'=>array('create')),
	array('label'=>'Manage Permisomodulo', 'url'=>array('admin')),
);
?>

<h1>Permisomodulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
