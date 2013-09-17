<?php
/* @var $this AreaController */
/* @var $data Area */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarea')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idarea), array('view', 'id'=>$data->idarea)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idempresa')); ?>:</b>
	<?php echo CHtml::encode($data->idempresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod')); ?>:</b>
	<?php echo CHtml::encode($data->cod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreArea')); ?>:</b>
	<?php echo CHtml::encode($data->nombreArea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php echo CHtml::encode($data->responsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>