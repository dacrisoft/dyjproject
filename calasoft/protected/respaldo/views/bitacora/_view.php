<?php
/* @var $this BitacoraController */
/* @var $data Bitacora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbitacora), array('view', 'id'=>$data->idbitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idresTemp')); ?>:</b>
	<?php echo CHtml::encode($data->idresTemp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idresponsable')); ?>:</b>
	<?php echo CHtml::encode($data->idresponsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddocumento')); ?>:</b>
	<?php echo CHtml::encode($data->iddocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarea')); ?>:</b>
	<?php echo CHtml::encode($data->idarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idareaAnterior')); ?>:</b>
	<?php echo CHtml::encode($data->idareaAnterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproceso')); ?>:</b>
	<?php echo CHtml::encode($data->idproceso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaRecepcion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaRecepcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAceptar')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAceptar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmacion')); ?>:</b>
	<?php echo CHtml::encode($data->confirmacion); ?>
	<br />

	*/ ?>

</div>