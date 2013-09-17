<?php
/* @var $this DistambController */
/* @var $data Distamb */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('intdistAmb')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->intdistAmb), array('view', 'id'=>$data->intdistAmb)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarea')); ?>:</b>
	<?php echo CHtml::encode($data->idarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>