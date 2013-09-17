<?php
/* @var $this RolPermisoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rol Permisos',
);

$this->menu=array(
	array('label'=>'Create RolPermiso', 'url'=>array('create')),
	array('label'=>'Manage RolPermiso', 'url'=>array('admin')),
);
?>

<h1>Rol Permisos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
