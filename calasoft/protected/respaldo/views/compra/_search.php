<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcompra'); ?>
		<?php echo $form->textField($model,'idcompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPuntoVenta'); ?>
		<?php echo $form->textField($model,'idPuntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nitProv'); ?>
		<?php echo $form->textField($model,'nitProv',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razonSocialProv'); ?>
		<?php echo $form->textField($model,'razonSocialProv',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numfact'); ?>
		<?php echo $form->textField($model,'numfact',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaProv'); ?>
		<?php echo $form->textField($model,'fechaProv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalFact'); ?>
		<?php echo $form->textField($model,'totalFact',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeIce'); ?>
		<?php echo $form->textField($model,'importeIce',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importexecto'); ?>
		<?php echo $form->textField($model,'importexecto',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeNeto'); ?>
		<?php echo $form->textField($model,'importeNeto',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creditoFiscal'); ?>
		<?php echo $form->textField($model,'creditoFiscal',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoControl'); ?>
		<?php echo $form->textField($model,'codigoControl',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mes'); ?>
		<?php echo $form->textField($model,'Mes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idrubro'); ?>
		<?php echo $form->textField($model,'idrubro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->