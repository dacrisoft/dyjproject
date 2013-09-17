<?php
/* @var $this ParametroController */
/* @var $model Parametro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idparametro'); ?>
		<?php echo $form->textField($model,'idparametro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'it'); ?>
		<?php echo $form->textField($model,'it',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->