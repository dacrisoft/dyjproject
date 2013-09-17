<?php
/* @var $this ActivosController */
/* @var $model Activos */

$this->breadcrumbs=array(
	'Activoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Activos', 'url'=>array('index')),
	array('label'=>'Manage Activos', 'url'=>array('admin')),
);
?>

<h1>Create Activos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>