<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacora-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idresTemp'); ?>
		<?php echo $form->textField($model,'idresTemp'); ?>
		<?php echo $form->error($model,'idresTemp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idresponsable'); ?>
		<?php echo $form->textField($model,'idresponsable'); ?>
		<?php echo $form->error($model,'idresponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iddocumento'); ?>
		<?php echo $form->textField($model,'iddocumento'); ?>
		<?php echo $form->error($model,'iddocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
		<?php echo $form->error($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idareaAnterior'); ?>
		<?php echo $form->textField($model,'idareaAnterior'); ?>
		<?php echo $form->error($model,'idareaAnterior'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idproceso'); ?>
		<?php echo $form->textField($model,'idproceso'); ?>
		<?php echo $form->error($model,'idproceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaRecepcion'); ?>
		<?php echo $form->textField($model,'fechaRecepcion'); ?>
		<?php echo $form->error($model,'fechaRecepcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaAceptar'); ?>
		<?php echo $form->textField($model,'fechaAceptar'); ?>
		<?php echo $form->error($model,'fechaAceptar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmacion'); ?>
		<?php echo $form->textField($model,'confirmacion'); ?>
		<?php echo $form->error($model,'confirmacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->