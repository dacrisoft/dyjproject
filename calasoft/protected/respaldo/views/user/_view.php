<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUser')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUser), array('view', 'id'=>$data->idUser)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameUser')); ?>:</b>
	<?php echo CHtml::encode($data->nameUser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pastPassword')); ?>:</b>
	<?php echo CHtml::encode($data->pastPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('changeDate')); ?>:</b>
	<?php echo CHtml::encode($data->changeDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->idPersona); ?>
	<br />


</div>