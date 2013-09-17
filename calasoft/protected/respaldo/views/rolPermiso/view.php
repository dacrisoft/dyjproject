<?php
/* @var $this RolPermisoController */
/* @var $model RolPermiso */

$this->breadcrumbs=array(
	'Rol Permisos'=>array('index'),
	$model->idrol_permiso,
);

$this->menu=array(
	array('label'=>'List RolPermiso', 'url'=>array('index')),
	array('label'=>'Create RolPermiso', 'url'=>array('create')),
	array('label'=>'Update RolPermiso', 'url'=>array('update', 'id'=>$model->idrol_permiso)),
	array('label'=>'Delete RolPermiso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idrol_permiso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolPermiso', 'url'=>array('admin')),
);
?>

<h1>View RolPermiso #<?php echo $model->idrol_permiso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idrol_permiso',
		'idRol',
		'idPermiso',
	),
)); ?>
