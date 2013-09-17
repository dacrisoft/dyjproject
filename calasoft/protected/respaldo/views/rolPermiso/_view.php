<?php
/* @var $this RolPermisoController */
/* @var $data RolPermiso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrol_permiso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idrol_permiso), array('view', 'id'=>$data->idrol_permiso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRol')); ?>:</b>
	<?php echo CHtml::encode($data->idRol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->idPermiso); ?>
	<br />


</div>