<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	$model->idbitacora=>array('view','id'=>$model->idbitacora),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bitacora', 'url'=>array('index')),
	array('label'=>'Create Bitacora', 'url'=>array('create')),
	array('label'=>'View Bitacora', 'url'=>array('view', 'id'=>$model->idbitacora)),
	array('label'=>'Manage Bitacora', 'url'=>array('admin')),
);
?>

<h1>Update Bitacora <?php echo $model->idbitacora; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>