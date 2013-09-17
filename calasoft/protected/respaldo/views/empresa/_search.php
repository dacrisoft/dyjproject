<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idempresa'); ?>
		<?php echo $form->textField($model,'idempresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nit'); ?>
		<?php echo $form->textField($model,'nit',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_empresa'); ?>
		<?php echo $form->textField($model,'num_empresa',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ter_cliente'); ?>
		<?php echo $form->textField($model,'ter_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mesCierre'); ?>
		<?php echo $form->textField($model,'mesCierre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccionFiscal'); ?>
		<?php echo $form->textField($model,'direccionFiscal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoFiscal'); ?>
		<?php echo $form->textField($model,'telefonoFiscal',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idResponsable'); ?>
		<?php echo $form->textField($model,'idResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividad'); ?>
		<?php echo $form->textField($model,'actividad',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_OfV'); ?>
		<?php echo $form->textField($model,'usuario_OfV',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pass_OfV'); ?>
		<?php echo $form->textField($model,'pass_OfV',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarjeta_galileo'); ?>
		<?php echo $form->textField($model,'tarjeta_galileo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pin_galileo'); ?>
		<?php echo $form->textField($model,'pin_galileo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->