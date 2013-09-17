<?php
/* @var $this ParametroController */
/* @var $data Parametro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idparametro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idparametro), array('view', 'id'=>$data->idparametro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('it')); ?>:</b>
	<?php echo CHtml::encode($data->it); ?>
	<br />


</div>