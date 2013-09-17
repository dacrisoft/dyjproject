<?php
/* @var $this ProcesoController */
/* @var $model Proceso */

$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	$model->idproceso=>array('view','id'=>$model->idproceso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proceso', 'url'=>array('index')),
	array('label'=>'Create Proceso', 'url'=>array('create')),
	array('label'=>'View Proceso', 'url'=>array('view', 'id'=>$model->idproceso)),
	array('label'=>'Manage Proceso', 'url'=>array('admin')),
);
?>

<h1>Update Proceso <?php echo $model->idproceso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>