<?php
/* @var $this AreaactController */
/* @var $data Areaact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idareaAct')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idareaAct), array('view', 'id'=>$data->idareaAct)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codArea')); ?>:</b>
	<?php echo CHtml::encode($data->codArea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>