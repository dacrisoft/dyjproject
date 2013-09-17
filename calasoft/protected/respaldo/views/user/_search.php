<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idUser'); ?>
		<?php echo $form->textField($model,'idUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameUser'); ?>
		<?php echo $form->textField($model,'nameUser',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pastPassword'); ?>
		<?php echo $form->textField($model,'pastPassword',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'changeDate'); ?>
		<?php echo $form->textField($model,'changeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPersona'); ?>
		<?php echo $form->textField($model,'idPersona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->