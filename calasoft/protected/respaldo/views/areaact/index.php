<?php
/* @var $this AreaactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Areaacts',
);

$this->menu=array(
	array('label'=>'Create Areaact', 'url'=>array('create')),
	array('label'=>'Manage Areaact', 'url'=>array('admin')),
);
?>

<h1>Areaacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
