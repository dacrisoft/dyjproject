<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rolName'); ?>
		<?php echo $form->textField($model,'rolName',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'rolName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUser'); ?>
		<?php echo $form->textField($model,'idUser'); ?>
		<?php echo $form->error($model,'idUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->