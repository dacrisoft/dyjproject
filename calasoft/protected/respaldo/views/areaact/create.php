<?php
/* @var $this AreaactController */
/* @var $model Areaact */

$this->breadcrumbs=array(
	'Areaacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Areaact', 'url'=>array('index')),
	array('label'=>'Manage Areaact', 'url'=>array('admin')),
);
?>

<h1>Create Areaact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>