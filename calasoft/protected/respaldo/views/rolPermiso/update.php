<?php
/* @var $this RolPermisoController */
/* @var $model RolPermiso */

$this->breadcrumbs=array(
	'Rol Permisos'=>array('index'),
	$model->idrol_permiso=>array('view','id'=>$model->idrol_permiso),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolPermiso', 'url'=>array('index')),
	array('label'=>'Create RolPermiso', 'url'=>array('create')),
	array('label'=>'View RolPermiso', 'url'=>array('view', 'id'=>$model->idrol_permiso)),
	array('label'=>'Manage RolPermiso', 'url'=>array('admin')),
);
?>

<h1>Update RolPermiso <?php echo $model->idrol_permiso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>