<?php
/* @var $this PermisomoduloController */
/* @var $model Permisomodulo */

$this->breadcrumbs=array(
	'Permisomodulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Permisomodulo', 'url'=>array('index')),
	array('label'=>'Manage Permisomodulo', 'url'=>array('admin')),
);
?>

<h1>Create Permisomodulo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>