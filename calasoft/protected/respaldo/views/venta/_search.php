<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idventa'); ?>
		<?php echo $form->textField($model,'idventa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpuntoVenta'); ?>
		<?php echo $form->textField($model,'idpuntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nitCliente'); ?>
		<?php echo $form->textField($model,'nitCliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numFact'); ?>
		<?php echo $form->textField($model,'numFact',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numAut'); ?>
		<?php echo $form->textField($model,'numAut',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCliente'); ?>
		<?php echo $form->textField($model,'fechaCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalFact'); ?>
		<?php echo $form->textField($model,'totalFact',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeIce'); ?>
		<?php echo $form->textField($model,'importeIce',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeExento'); ?>
		<?php echo $form->textField($model,'importeExento',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeNeto'); ?>
		<?php echo $form->textField($model,'importeNeto',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debitoFiscal'); ?>
		<?php echo $form->textField($model,'debitoFiscal',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoFact'); ?>
		<?php echo $form->textField($model,'estadoFact',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoControl'); ?>
		<?php echo $form->textField($model,'codigoControl',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idrubro'); ?>
		<?php echo $form->textField($model,'idrubro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->