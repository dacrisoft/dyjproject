<?php
/* @var $this DocumentoController */
/* @var $model Documento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idempresa'); ?>
		<?php echo $form->textField($model,'idempresa'); ?>
		<?php echo $form->error($model,'idempresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idresponsable'); ?>
		<?php echo $form->textField($model,'idresponsable'); ?>
		<?php echo $form->error($model,'idresponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idbitacora'); ?>
		<?php echo $form->textField($model,'idbitacora'); ?>
		<?php echo $form->error($model,'idbitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta'); ?>
		<?php echo $form->textField($model,'ruta',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ruta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->