<?php
/* @var $this PermisoController */
/* @var $model Permiso */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	$model->idpermiso=>array('view','id'=>$model->idpermiso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Permiso', 'url'=>array('index')),
	array('label'=>'Create Permiso', 'url'=>array('create')),
	array('label'=>'View Permiso', 'url'=>array('view', 'id'=>$model->idpermiso)),
	array('label'=>'Manage Permiso', 'url'=>array('admin')),
);
?>

<h1>Update Permiso <?php echo $model->idpermiso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>