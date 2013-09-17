<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'razonSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_empresa'); ?>
		<?php echo $form->textField($model,'num_empresa',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'num_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ter_cliente'); ?>
		<?php echo $form->textField($model,'ter_cliente'); ?>
		<?php echo $form->error($model,'ter_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mesCierre'); ?>
		<?php echo $form->textField($model,'mesCierre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mesCierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccionFiscal'); ?>
		<?php echo $form->textField($model,'direccionFiscal',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccionFiscal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoFiscal'); ?>
		<?php echo $form->textField($model,'telefonoFiscal',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefonoFiscal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idResponsable'); ?>
		<?php echo $form->textField($model,'idResponsable'); ?>
		<?php echo $form->error($model,'idResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actividad'); ?>
		<?php echo $form->textField($model,'actividad',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_OfV'); ?>
		<?php echo $form->textField($model,'usuario_OfV',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario_OfV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass_OfV'); ?>
		<?php echo $form->textField($model,'pass_OfV',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pass_OfV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarjeta_galileo'); ?>
		<?php echo $form->textField($model,'tarjeta_galileo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tarjeta_galileo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pin_galileo'); ?>
		<?php echo $form->textField($model,'pin_galileo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pin_galileo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->