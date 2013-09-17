<?php
/* @var $this PuntoventaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puntoventas',
);

$this->menu=array(
	array('label'=>'Create Puntoventa', 'url'=>array('create')),
	array('label'=>'Manage Puntoventa', 'url'=>array('admin')),
);
?>

<h1>Puntoventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
