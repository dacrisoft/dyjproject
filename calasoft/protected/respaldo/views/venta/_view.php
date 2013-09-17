<?php
/* @var $this VentaController */
/* @var $data Venta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idventa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idventa), array('view', 'id'=>$data->idventa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpuntoVenta')); ?>:</b>
	<?php echo CHtml::encode($data->idpuntoVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nitCliente')); ?>:</b>
	<?php echo CHtml::encode($data->nitCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonSocial')); ?>:</b>
	<?php echo CHtml::encode($data->razonSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numFact')); ?>:</b>
	<?php echo CHtml::encode($data->numFact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numAut')); ?>:</b>
	<?php echo CHtml::encode($data->numAut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCliente')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCliente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('totalFact')); ?>:</b>
	<?php echo CHtml::encode($data->totalFact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeIce')); ?>:</b>
	<?php echo CHtml::encode($data->importeIce); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeExento')); ?>:</b>
	<?php echo CHtml::encode($data->importeExento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeNeto')); ?>:</b>
	<?php echo CHtml::encode($data->importeNeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debitoFiscal')); ?>:</b>
	<?php echo CHtml::encode($data->debitoFiscal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoFact')); ?>:</b>
	<?php echo CHtml::encode($data->estadoFact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoControl')); ?>:</b>
	<?php echo CHtml::encode($data->codigoControl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrubro')); ?>:</b>
	<?php echo CHtml::encode($data->idrubro); ?>
	<br />

	*/ ?>

</div>