<?php
/* @var $this ClaactivosController */
/* @var $data Claactivos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclaActivos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclaActivos), array('view', 'id'=>$data->idclaActivos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vidaUtil')); ?>:</b>
	<?php echo CHtml::encode($data->vidaUtil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coefDepreciacion')); ?>:</b>
	<?php echo CHtml::encode($data->coefDepreciacion); ?>
	<br />


</div>