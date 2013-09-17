<?php
/* @var $this PuntoventaController */
/* @var $model Puntoventa */

$this->breadcrumbs=array(
	'Puntoventas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Puntoventa', 'url'=>array('index')),
	array('label'=>'Manage Puntoventa', 'url'=>array('admin')),
);
?>

<h1>Create Puntoventa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>