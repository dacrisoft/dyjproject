<?php
/* @var $this ActivosController */
/* @var $model Activos */

$this->breadcrumbs=array(
	'Activoses'=>array('index'),
	$model->idactivos,
);

$this->menu=array(
	array('label'=>'List Activos', 'url'=>array('index')),
	array('label'=>'Create Activos', 'url'=>array('create')),
	array('label'=>'Update Activos', 'url'=>array('update', 'id'=>$model->idactivos)),
	array('label'=>'Delete Activos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idactivos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Activos', 'url'=>array('admin')),
);
?>

<h1>View Activos #<?php echo $model->idactivos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idactivos',
		'idempresa',
		'idclaActivos',
		'iddistamb',
		'clase',
		'codigo',
		'descripcion',
		'unidad',
		'cantidad',
		'idarea',
		'responsable',
		'fechaCompra',
		'ufv',
		'costoTotal',
		'costoNeto',
		'tipoRegistro',
		'estado',
		'garantia',
		'bienDepresiable',
		'numeroComponentes',
		'datosAdicionales',
	),
)); ?>
