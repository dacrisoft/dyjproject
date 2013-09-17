<?php
/* @var $this PermisomoduloController */
/* @var $model Permisomodulo */

$this->breadcrumbs=array(
	'Permisomodulos'=>array('index'),
	$model->idpermisoModulo=>array('view','id'=>$model->idpermisoModulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Permisomodulo', 'url'=>array('index')),
	array('label'=>'Create Permisomodulo', 'url'=>array('create')),
	array('label'=>'View Permisomodulo', 'url'=>array('view', 'id'=>$model->idpermisoModulo)),
	array('label'=>'Manage Permisomodulo', 'url'=>array('admin')),
);
?>

<h1>Update Permisomodulo <?php echo $model->idpermisoModulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>