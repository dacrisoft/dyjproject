<?php
/* @var $this ActivosController */
/* @var $model Activos */

$this->breadcrumbs=array(
	'Activoses'=>array('index'),
	$model->idactivos=>array('view','id'=>$model->idactivos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Activos', 'url'=>array('index')),
	array('label'=>'Create Activos', 'url'=>array('create')),
	array('label'=>'View Activos', 'url'=>array('view', 'id'=>$model->idactivos)),
	array('label'=>'Manage Activos', 'url'=>array('admin')),
);
?>

<h1>Update Activos <?php echo $model->idactivos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>