<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbitacora'); ?>
		<?php echo $form->textField($model,'idbitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idresTemp'); ?>
		<?php echo $form->textField($model,'idresTemp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idresponsable'); ?>
		<?php echo $form->textField($model,'idresponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddocumento'); ?>
		<?php echo $form->textField($model,'iddocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idareaAnterior'); ?>
		<?php echo $form->textField($model,'idareaAnterior'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idproceso'); ?>
		<?php echo $form->textField($model,'idproceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaRecepcion'); ?>
		<?php echo $form->textField($model,'fechaRecepcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaAceptar'); ?>
		<?php echo $form->textField($model,'fechaAceptar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'confirmacion'); ?>
		<?php echo $form->textField($model,'confirmacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->