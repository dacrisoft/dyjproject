<?php
/* @var $this PermisomoduloController */
/* @var $model Permisomodulo */

$this->breadcrumbs=array(
	'Permisomodulos'=>array('index'),
	$model->idpermisoModulo,
);

$this->menu=array(
	array('label'=>'List Permisomodulo', 'url'=>array('index')),
	array('label'=>'Create Permisomodulo', 'url'=>array('create')),
	array('label'=>'Update Permisomodulo', 'url'=>array('update', 'id'=>$model->idpermisoModulo)),
	array('label'=>'Delete Permisomodulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpermisoModulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Permisomodulo', 'url'=>array('admin')),
);
?>

<h1>View Permisomodulo #<?php echo $model->idpermisoModulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpermisoModulo',
		'estado',
		'tipoPermiso',
	),
)); ?>
