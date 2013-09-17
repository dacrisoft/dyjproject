<?php
/* @var $this RolPermisoController */
/* @var $model RolPermiso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idrol_permiso'); ?>
		<?php echo $form->textField($model,'idrol_permiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idRol'); ?>
		<?php echo $form->textField($model,'idRol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPermiso'); ?>
		<?php echo $form->textField($model,'idPermiso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->