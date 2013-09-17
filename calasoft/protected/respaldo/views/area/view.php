<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->idarea,
);

$this->menu=array(
	array('label'=>'List Area', 'url'=>array('index')),
	array('label'=>'Create Area', 'url'=>array('create')),
	array('label'=>'Update Area', 'url'=>array('update', 'id'=>$model->idarea)),
	array('label'=>'Delete Area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idarea),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Area', 'url'=>array('admin')),
);
?>

<h1>View Area #<?php echo $model->idarea; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idarea',
		'idempresa',
		'cod',
		'nombreArea',
		'responsable',
		'descripcion',
	),
)); ?>
