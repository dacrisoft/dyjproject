<?php
/* @var $this PermisoController */
/* @var $data Permiso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpermiso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpermiso), array('view', 'id'=>$data->idpermiso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPermiso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>