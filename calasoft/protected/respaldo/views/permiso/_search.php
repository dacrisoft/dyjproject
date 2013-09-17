<?php
/* @var $this PermisoController */
/* @var $model Permiso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpermiso'); ?>
		<?php echo $form->textField($model,'idpermiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPermiso'); ?>
		<?php echo $form->textField($model,'tipoPermiso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->