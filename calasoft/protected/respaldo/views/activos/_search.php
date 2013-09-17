<?php
/* @var $this ActivosController */
/* @var $model Activos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idactivos'); ?>
		<?php echo $form->textField($model,'idactivos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idempresa'); ?>
		<?php echo $form->textField($model,'idempresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idclaActivos'); ?>
		<?php echo $form->textField($model,'idclaActivos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddistamb'); ?>
		<?php echo $form->textField($model,'iddistamb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clase'); ?>
		<?php echo $form->textField($model,'clase',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCompra'); ?>
		<?php echo $form->textField($model,'fechaCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ufv'); ?>
		<?php echo $form->textField($model,'ufv',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costoTotal'); ?>
		<?php echo $form->textField($model,'costoTotal',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costoNeto'); ?>
		<?php echo $form->textField($model,'costoNeto',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoRegistro'); ?>
		<?php echo $form->textField($model,'tipoRegistro',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garantia'); ?>
		<?php echo $form->textField($model,'garantia',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bienDepresiable'); ?>
		<?php echo $form->textField($model,'bienDepresiable',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroComponentes'); ?>
		<?php echo $form->textField($model,'numeroComponentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datosAdicionales'); ?>
		<?php echo $form->textArea($model,'datosAdicionales',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->