<?php
/* @var $this AreaactController */
/* @var $model Areaact */

$this->breadcrumbs=array(
	'Areaacts'=>array('index'),
	$model->idareaAct=>array('view','id'=>$model->idareaAct),
	'Update',
);

$this->menu=array(
	array('label'=>'List Areaact', 'url'=>array('index')),
	array('label'=>'Create Areaact', 'url'=>array('create')),
	array('label'=>'View Areaact', 'url'=>array('view', 'id'=>$model->idareaAct)),
	array('label'=>'Manage Areaact', 'url'=>array('admin')),
);
?>

<h1>Update Areaact <?php echo $model->idareaAct; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>