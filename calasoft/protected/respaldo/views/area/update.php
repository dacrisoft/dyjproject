<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->idarea=>array('view','id'=>$model->idarea),
	'Update',
);

$this->menu=array(
	array('label'=>'List Area', 'url'=>array('index')),
	array('label'=>'Create Area', 'url'=>array('create')),
	array('label'=>'View Area', 'url'=>array('view', 'id'=>$model->idarea)),
	array('label'=>'Manage Area', 'url'=>array('admin')),
);
?>

<h1>Update Area <?php echo $model->idarea; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>