<?php
/* @var $this AreaactController */
/* @var $model Areaact */

$this->breadcrumbs=array(
	'Areaacts'=>array('index'),
	$model->idareaAct,
);

$this->menu=array(
	array('label'=>'List Areaact', 'url'=>array('index')),
	array('label'=>'Create Areaact', 'url'=>array('create')),
	array('label'=>'Update Areaact', 'url'=>array('update', 'id'=>$model->idareaAct)),
	array('label'=>'Delete Areaact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idareaAct),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Areaact', 'url'=>array('admin')),
);
?>

<h1>View Areaact #<?php echo $model->idareaAct; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idareaAct',
		'codArea',
		'descripcion',
	),
)); ?>
