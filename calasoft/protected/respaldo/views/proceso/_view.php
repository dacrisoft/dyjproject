<?php
/* @var $this ProcesoController */
/* @var $data Proceso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproceso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproceso), array('view', 'id'=>$data->idproceso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreProceso')); ?>:</b>
	<?php echo CHtml::encode($data->nombreProceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>