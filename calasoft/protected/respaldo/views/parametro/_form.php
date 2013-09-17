<?php
/* @var $this ParametroController */
/* @var $model Parametro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parametro-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'it'); ?>
		<?php echo $form->textField($model,'it',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'it'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->