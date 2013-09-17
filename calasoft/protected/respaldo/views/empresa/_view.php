<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idempresa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idempresa), array('view', 'id'=>$data->idempresa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonSocial')); ?>:</b>
	<?php echo CHtml::encode($data->razonSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit')); ?>:</b>
	<?php echo CHtml::encode($data->nit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->num_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ter_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->ter_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mesCierre')); ?>:</b>
	<?php echo CHtml::encode($data->mesCierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionFiscal')); ?>:</b>
	<?php echo CHtml::encode($data->direccionFiscal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoFiscal')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoFiscal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->idResponsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividad')); ?>:</b>
	<?php echo CHtml::encode($data->actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_OfV')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_OfV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_OfV')); ?>:</b>
	<?php echo CHtml::encode($data->pass_OfV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarjeta_galileo')); ?>:</b>
	<?php echo CHtml::encode($data->tarjeta_galileo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pin_galileo')); ?>:</b>
	<?php echo CHtml::encode($data->pin_galileo); ?>
	<br />

	*/ ?>

</div>