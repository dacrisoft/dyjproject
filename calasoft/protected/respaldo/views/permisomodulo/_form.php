<?php
/* @var $this PermisomoduloController */
/* @var $model Permisomodulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permisomodulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idpermisoModulo'); ?>
		<?php echo $form->textField($model,'idpermisoModulo'); ?>
		<?php echo $form->error($model,'idpermisoModulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPermiso'); ?>
		<?php echo $form->textField($model,'tipoPermiso',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipoPermiso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->