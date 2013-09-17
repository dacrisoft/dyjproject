<?php
/* @var $this DistambController */
/* @var $model Distamb */

$this->breadcrumbs=array(
	'Distambs'=>array('index'),
	$model->intdistAmb=>array('view','id'=>$model->intdistAmb),
	'Update',
);

$this->menu=array(
	array('label'=>'List Distamb', 'url'=>array('index')),
	array('label'=>'Create Distamb', 'url'=>array('create')),
	array('label'=>'View Distamb', 'url'=>array('view', 'id'=>$model->intdistAmb)),
	array('label'=>'Manage Distamb', 'url'=>array('admin')),
);
?>

<h1>Update Distamb <?php echo $model->intdistAmb; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>