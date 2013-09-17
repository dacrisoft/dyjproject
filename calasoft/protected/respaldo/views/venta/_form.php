<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idpuntoVenta'); ?>
		<?php echo $form->textField($model,'idpuntoVenta'); ?>
		<?php echo $form->error($model,'idpuntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nitCliente'); ?>
		<?php echo $form->textField($model,'nitCliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nitCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'razonSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numFact'); ?>
		<?php echo $form->textField($model,'numFact',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numFact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numAut'); ?>
		<?php echo $form->textField($model,'numAut',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'numAut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCliente'); ?>
		<?php echo $form->textField($model,'fechaCliente'); ?>
		<?php echo $form->error($model,'fechaCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalFact'); ?>
		<?php echo $form->textField($model,'totalFact',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'totalFact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeIce'); ?>
		<?php echo $form->textField($model,'importeIce',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'importeIce'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeExento'); ?>
		<?php echo $form->textField($model,'importeExento',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'importeExento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeNeto'); ?>
		<?php echo $form->textField($model,'importeNeto',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'importeNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debitoFiscal'); ?>
		<?php echo $form->textField($model,'debitoFiscal',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'debitoFiscal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoFact'); ?>
		<?php echo $form->textField($model,'estadoFact',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estadoFact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoControl'); ?>
		<?php echo $form->textField($model,'codigoControl',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigoControl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idrubro'); ?>
		<?php echo $form->textField($model,'idrubro'); ?>
		<?php echo $form->error($model,'idrubro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->