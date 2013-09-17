<?php
/* @var $this ClaactivosController */
/* @var $model Claactivos */

$this->breadcrumbs=array(
	'Claactivoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Claactivos', 'url'=>array('index')),
	array('label'=>'Manage Claactivos', 'url'=>array('admin')),
);
?>

<h1>Create Claactivos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>