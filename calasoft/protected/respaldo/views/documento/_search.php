<?php
/* @var $this DocumentoController */
/* @var $model Documento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iddocumento'); ?>
		<?php echo $form->textField($model,'iddocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idempresa'); ?>
		<?php echo $form->textField($model,'idempresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idresponsable'); ?>
		<?php echo $form->textField($model,'idresponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idbitacora'); ?>
		<?php echo $form->textField($model,'idbitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta'); ?>
		<?php echo $form->textField($model,'ruta',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->