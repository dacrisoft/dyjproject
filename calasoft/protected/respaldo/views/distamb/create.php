<?php
/* @var $this DistambController */
/* @var $model Distamb */

$this->breadcrumbs=array(
	'Distambs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Distamb', 'url'=>array('index')),
	array('label'=>'Manage Distamb', 'url'=>array('admin')),
);
?>

<h1>Create Distamb</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>