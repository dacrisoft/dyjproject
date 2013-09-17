<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nameUser'); ?>
		<?php echo $form->textField($model,'nameUser',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nameUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pastPassword'); ?>
		<?php echo $form->textField($model,'pastPassword',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'pastPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'changeDate'); ?>
		<?php echo $form->textField($model,'changeDate'); ?>
		<?php echo $form->error($model,'changeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPersona'); ?>
		<?php echo $form->textField($model,'idPersona'); ?>
		<?php echo $form->error($model,'idPersona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->