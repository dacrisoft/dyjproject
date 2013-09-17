<?php
/* @var $this ActivosController */
/* @var $model Activos */

$this->breadcrumbs=array(
	'Activoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Activos', 'url'=>array('index')),
	array('label'=>'Create Activos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#activos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Activoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'activos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idactivos',
		'idempresa',
		'idclaActivos',
		'iddistamb',
		'clase',
		'codigo',
		/*
		'descripcion',
		'unidad',
		'cantidad',
		'idarea',
		'responsable',
		'fechaCompra',
		'ufv',
		'costoTotal',
		'costoNeto',
		'tipoRegistro',
		'estado',
		'garantia',
		'bienDepresiable',
		'numeroComponentes',
		'datosAdicionales',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
