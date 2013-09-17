<?php
/* @var $this RolPermisoController */
/* @var $model RolPermiso */

$this->breadcrumbs=array(
	'Rol Permisos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolPermiso', 'url'=>array('index')),
	array('label'=>'Manage RolPermiso', 'url'=>array('admin')),
);
?>

<h1>Create RolPermiso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>