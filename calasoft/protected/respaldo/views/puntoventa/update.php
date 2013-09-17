<?php
/* @var $this PuntoventaController */
/* @var $model Puntoventa */

$this->breadcrumbs=array(
	'Puntoventas'=>array('index'),
	$model->idPuntoVenta=>array('view','id'=>$model->idPuntoVenta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Puntoventa', 'url'=>array('index')),
	array('label'=>'Create Puntoventa', 'url'=>array('create')),
	array('label'=>'View Puntoventa', 'url'=>array('view', 'id'=>$model->idPuntoVenta)),
	array('label'=>'Manage Puntoventa', 'url'=>array('admin')),
);
?>

<h1>Update Puntoventa <?php echo $model->idPuntoVenta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>