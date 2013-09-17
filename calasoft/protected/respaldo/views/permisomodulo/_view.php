<?php
/* @var $this PermisomoduloController */
/* @var $data Permisomodulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpermisoModulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpermisoModulo), array('view', 'id'=>$data->idpermisoModulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPermiso); ?>
	<br />


</div>