<?php
/* @var $this ActivosController */
/* @var $model Activos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'activos-form',
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
		<?php echo $form->labelEx($model,'idclaActivos'); ?>
		<?php echo $form->textField($model,'idclaActivos'); ?>
		<?php echo $form->error($model,'idclaActivos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iddistamb'); ?>
		<?php echo $form->textField($model,'iddistamb'); ?>
		<?php echo $form->error($model,'iddistamb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clase'); ?>
		<?php echo $form->textField($model,'clase',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'clase'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
		<?php echo $form->error($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCompra'); ?>
		<?php echo $form->textField($model,'fechaCompra'); ?>
		<?php echo $form->error($model,'fechaCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ufv'); ?>
		<?php echo $form->textField($model,'ufv',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ufv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costoTotal'); ?>
		<?php echo $form->textField($model,'costoTotal',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'costoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costoNeto'); ?>
		<?php echo $form->textField($model,'costoNeto',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'costoNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoRegistro'); ?>
		<?php echo $form->textField($model,'tipoRegistro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipoRegistro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garantia'); ?>
		<?php echo $form->textField($model,'garantia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'garantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bienDepresiable'); ?>
		<?php echo $form->textField($model,'bienDepresiable',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bienDepresiable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroComponentes'); ?>
		<?php echo $form->textField($model,'numeroComponentes'); ?>
		<?php echo $form->error($model,'numeroComponentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datosAdicionales'); ?>
		<?php echo $form->textArea($model,'datosAdicionales',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'datosAdicionales'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->