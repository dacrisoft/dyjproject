<?php
/* @var $this PuntoventaController */
/* @var $model Puntoventa */

$this->breadcrumbs=array(
	'Puntoventas'=>array('index'),
	$model->idPuntoVenta,
);

$this->menu=array(
	array('label'=>'List Puntoventa', 'url'=>array('index')),
	array('label'=>'Create Puntoventa', 'url'=>array('create')),
	array('label'=>'Update Puntoventa', 'url'=>array('update', 'id'=>$model->idPuntoVenta)),
	array('label'=>'Delete Puntoventa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPuntoVenta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Puntoventa', 'url'=>array('admin')),
);
?>

<h1>View Puntoventa #<?php echo $model->idPuntoVenta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPuntoVenta',
		'idEmpresa',
		'num_sucursall',
		'direccion_suc',
	),
)); ?>
