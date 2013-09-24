<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">

    <div class="well">

          <!-- <i style="font-size: 200px" class="icon-credit-card icon-4x"></i> -->
          <img src="themes/classic/img/logo.png">
          <br>
          <br>
          <h2>Consultora Contable DyJ</h2>

    <div class="fluid">
            <div class="span4" style="text-align:center;">
              
          </div>
      </div>
    </div>
</div><!-- /.span4 -->

<div class="span4">
  <div class="well">

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'login-form',
  'enableClientValidation'=>true,
  'clientOptions'=>array(
    'validateOnSubmit'=>true,
  ),
)); ?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <div>
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username'); ?>
    <?php echo $form->error($model,'username'); ?>
  </div>

  <div>
    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password'); ?>
    <?php echo $form->error($model,'password'); ?>
    <p class="hint">
      Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
    </p>
  </div>

  <div class="rememberMe">
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>
  </div>

  <div class="buttons">
    <?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary btn-large")); ?>
  </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
    
 <!--  <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login-form',
      'action'=>$this->createUrl("site/login"),
      'htmlOptions'=>array("style"=>"text-align: left"),
      'enableClientValidation'=>true,
      'clientOptions'=>array(
        'validateOnSubmit'=>true,
      ),
    )); ?>
      
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username',array("class"=>"input-block-level","placeholder"=>"Username")); ?>
    <?php echo $form->error($model,'username'); ?>

    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password',array("class"=>"input-block-level","placeholder"=>"Password")); ?>
    <?php echo $form->error($model,'password'); ?>
  <br>
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>

    <?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary pull-right")); ?>
<?php $this->endWidget(); ?>
 -->
  </div>

 

    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>


