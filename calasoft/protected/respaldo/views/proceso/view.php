<?php
/* @var $this ProcesoController */
/* @var $model Proceso */

$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	$model->idproceso,
);

$this->menu=array(
	array('label'=>'List Proceso', 'url'=>array('index')),
	array('label'=>'Create Proceso', 'url'=>array('create')),
	array('label'=>'Update Proceso', 'url'=>array('update', 'id'=>$model->idproceso)),
	array('label'=>'Delete Proceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproceso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proceso', 'url'=>array('admin')),
);
?>

<h1>View Proceso #<?php echo $model->idproceso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproceso',
		'nombreProceso',
		'descripcion',
	),
)); ?>
