<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->idempresa,
);

$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->idempresa)),
	array('label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idempresa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>View Empresa #<?php echo $model->idempresa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idempresa',
		'razonSocial',
		'nit',
		'num_empresa',
		'ter_cliente',
		'mesCierre',
		'direccionFiscal',
		'telefonoFiscal',
		'idResponsable',
		'actividad',
		'usuario_OfV',
		'pass_OfV',
		'tarjeta_galileo',
		'pin_galileo',
	),
)); ?>
