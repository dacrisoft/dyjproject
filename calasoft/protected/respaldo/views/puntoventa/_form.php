<?php
/* @var $this PuntoventaController */
/* @var $model Puntoventa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'puntoventa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmpresa'); ?>
		<?php echo $form->textField($model,'idEmpresa'); ?>
		<?php echo $form->error($model,'idEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_sucursall'); ?>
		<?php echo $form->textField($model,'num_sucursall'); ?>
		<?php echo $form->error($model,'num_sucursall'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_suc'); ?>
		<?php echo $form->textField($model,'direccion_suc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion_suc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->