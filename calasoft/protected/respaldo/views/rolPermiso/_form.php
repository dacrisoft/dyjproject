<?php
/* @var $this RolPermisoController */
/* @var $model RolPermiso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-permiso-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idRol'); ?>
		<?php echo $form->textField($model,'idRol'); ?>
		<?php echo $form->error($model,'idRol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPermiso'); ?>
		<?php echo $form->textField($model,'idPermiso'); ?>
		<?php echo $form->error($model,'idPermiso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->