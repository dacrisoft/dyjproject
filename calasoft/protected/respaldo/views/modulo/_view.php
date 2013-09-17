<?php
/* @var $this ModuloController */
/* @var $data Modulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmodulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmodulo), array('view', 'id'=>$data->idmodulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaModulo')); ?>:</b>
	<?php echo CHtml::encode($data->rutaModulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>