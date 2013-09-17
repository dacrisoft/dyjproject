<?php
/* @var $this ClaactivosController */
/* @var $model Claactivos */

$this->breadcrumbs=array(
	'Claactivoses'=>array('index'),
	$model->idclaActivos=>array('view','id'=>$model->idclaActivos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Claactivos', 'url'=>array('index')),
	array('label'=>'Create Claactivos', 'url'=>array('create')),
	array('label'=>'View Claactivos', 'url'=>array('view', 'id'=>$model->idclaActivos)),
	array('label'=>'Manage Claactivos', 'url'=>array('admin')),
);
?>

<h1>Update Claactivos <?php echo $model->idclaActivos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>