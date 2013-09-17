<?php
/* @var $this ClaactivosController */
/* @var $model Claactivos */

$this->breadcrumbs=array(
	'Claactivoses'=>array('index'),
	$model->idclaActivos,
);

$this->menu=array(
	array('label'=>'List Claactivos', 'url'=>array('index')),
	array('label'=>'Create Claactivos', 'url'=>array('create')),
	array('label'=>'Update Claactivos', 'url'=>array('update', 'id'=>$model->idclaActivos)),
	array('label'=>'Delete Claactivos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idclaActivos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Claactivos', 'url'=>array('admin')),
);
?>

<h1>View Claactivos #<?php echo $model->idclaActivos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idclaActivos',
		'descripcion',
		'vidaUtil',
		'coefDepreciacion',
	),
)); ?>
