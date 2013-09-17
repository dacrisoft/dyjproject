<?php
/* @var $this PuntoventaController */
/* @var $model Puntoventa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPuntoVenta'); ?>
		<?php echo $form->textField($model,'idPuntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEmpresa'); ?>
		<?php echo $form->textField($model,'idEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_sucursall'); ?>
		<?php echo $form->textField($model,'num_sucursall'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_suc'); ?>
		<?php echo $form->textField($model,'direccion_suc',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->