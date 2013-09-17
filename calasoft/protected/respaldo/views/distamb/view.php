<?php
/* @var $this DistambController */
/* @var $model Distamb */

$this->breadcrumbs=array(
	'Distambs'=>array('index'),
	$model->intdistAmb,
);

$this->menu=array(
	array('label'=>'List Distamb', 'url'=>array('index')),
	array('label'=>'Create Distamb', 'url'=>array('create')),
	array('label'=>'Update Distamb', 'url'=>array('update', 'id'=>$model->intdistAmb)),
	array('label'=>'Delete Distamb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->intdistAmb),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Distamb', 'url'=>array('admin')),
);
?>

<h1>View Distamb #<?php echo $model->intdistAmb; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'intdistAmb',
		'idarea',
		'descripcion',
	),
)); ?>
