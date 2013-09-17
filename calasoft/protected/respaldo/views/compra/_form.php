<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idPuntoVenta'); ?>
		<?php echo $form->textField($model,'idPuntoVenta'); ?>
		<?php echo $form->error($model,'idPuntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nitProv'); ?>
		<?php echo $form->textField($model,'nitProv',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nitProv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razonSocialProv'); ?>
		<?php echo $form->textField($model,'razonSocialProv',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'razonSocialProv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numfact'); ?>
		<?php echo $form->textField($model,'numfact',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numfact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaProv'); ?>
		<?php echo $form->textField($model,'fechaProv'); ?>
		<?php echo $form->error($model,'fechaProv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalFact'); ?>
		<?php echo $form->textField($model,'totalFact',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'totalFact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeIce'); ?>
		<?php echo $form->textField($model,'importeIce',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'importeIce'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importexecto'); ?>
		<?php echo $form->textField($model,'importexecto',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'importexecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeNeto'); ?>
		<?php echo $form->textField($model,'importeNeto',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'importeNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditoFiscal'); ?>
		<?php echo $form->textField($model,'creditoFiscal',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'creditoFiscal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoControl'); ?>
		<?php echo $form->textField($model,'codigoControl',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigoControl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mes'); ?>
		<?php echo $form->textField($model,'Mes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Mes'); ?>
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