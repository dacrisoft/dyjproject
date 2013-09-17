<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paterno'); ?>
		<?php echo $form->textField($model,'paterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materno'); ?>
		<?php echo $form->textField($model,'materno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ci'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->