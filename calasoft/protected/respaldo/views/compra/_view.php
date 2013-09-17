<?php
/* @var $this CompraController */
/* @var $data Compra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcompra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcompra), array('view', 'id'=>$data->idcompra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPuntoVenta')); ?>:</b>
	<?php echo CHtml::encode($data->idPuntoVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nitProv')); ?>:</b>
	<?php echo CHtml::encode($data->nitProv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonSocialProv')); ?>:</b>
	<?php echo CHtml::encode($data->razonSocialProv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numfact')); ?>:</b>
	<?php echo CHtml::encode($data->numfact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaProv')); ?>:</b>
	<?php echo CHtml::encode($data->fechaProv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalFact')); ?>:</b>
	<?php echo CHtml::encode($data->totalFact); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('importeIce')); ?>:</b>
	<?php echo CHtml::encode($data->importeIce); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importexecto')); ?>:</b>
	<?php echo CHtml::encode($data->importexecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeNeto')); ?>:</b>
	<?php echo CHtml::encode($data->importeNeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditoFiscal')); ?>:</b>
	<?php echo CHtml::encode($data->creditoFiscal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoControl')); ?>:</b>
	<?php echo CHtml::encode($data->codigoControl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mes')); ?>:</b>
	<?php echo CHtml::encode($data->Mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrubro')); ?>:</b>
	<?php echo CHtml::encode($data->idrubro); ?>
	<br />

	*/ ?>

</div>