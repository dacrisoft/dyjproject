<?php
/* @var $this AreaController */
/* @var $model Area */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'area-form',
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
		<?php echo $form->labelEx($model,'cod'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreArea'); ?>
		<?php echo $form->textField($model,'nombreArea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreArea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->