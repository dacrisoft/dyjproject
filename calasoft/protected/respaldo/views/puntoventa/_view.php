<?php
/* @var $this PuntoventaController */
/* @var $data Puntoventa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPuntoVenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPuntoVenta), array('view', 'id'=>$data->idPuntoVenta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->idEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_sucursall')); ?>:</b>
	<?php echo CHtml::encode($data->num_sucursall); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_suc')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_suc); ?>
	<br />


</div>