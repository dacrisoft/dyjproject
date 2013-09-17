<?php
/* @var $this DistambController */
/* @var $model Distamb */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'intdistAmb'); ?>
		<?php echo $form->textField($model,'intdistAmb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->