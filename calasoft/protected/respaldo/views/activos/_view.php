<?php
/* @var $this ActivosController */
/* @var $data Activos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idactivos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idactivos), array('view', 'id'=>$data->idactivos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idempresa')); ?>:</b>
	<?php echo CHtml::encode($data->idempresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclaActivos')); ?>:</b>
	<?php echo CHtml::encode($data->idclaActivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddistamb')); ?>:</b>
	<?php echo CHtml::encode($data->iddistamb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clase')); ?>:</b>
	<?php echo CHtml::encode($data->clase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarea')); ?>:</b>
	<?php echo CHtml::encode($data->idarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php echo CHtml::encode($data->responsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCompra')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufv')); ?>:</b>
	<?php echo CHtml::encode($data->ufv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costoTotal')); ?>:</b>
	<?php echo CHtml::encode($data->costoTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costoNeto')); ?>:</b>
	<?php echo CHtml::encode($data->costoNeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoRegistro')); ?>:</b>
	<?php echo CHtml::encode($data->tipoRegistro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garantia')); ?>:</b>
	<?php echo CHtml::encode($data->garantia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bienDepresiable')); ?>:</b>
	<?php echo CHtml::encode($data->bienDepresiable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroComponentes')); ?>:</b>
	<?php echo CHtml::encode($data->numeroComponentes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datosAdicionales')); ?>:</b>
	<?php echo CHtml::encode($data->datosAdicionales); ?>
	<br />

	*/ ?>

</div>