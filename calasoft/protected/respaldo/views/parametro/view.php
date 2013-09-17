<?php
/* @var $this ParametroController */
/* @var $model Parametro */

$this->breadcrumbs=array(
	'Parametros'=>array('index'),
	$model->idparametro,
);

$this->menu=array(
	array('label'=>'List Parametro', 'url'=>array('index')),
	array('label'=>'Create Parametro', 'url'=>array('create')),
	array('label'=>'Update Parametro', 'url'=>array('update', 'id'=>$model->idparametro)),
	array('label'=>'Delete Parametro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idparametro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parametro', 'url'=>array('admin')),
);
?>

<h1>View Parametro #<?php echo $model->idparametro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idparametro',
		'ano',
		'mes',
		'iva',
		'it',
	),
)); ?>
