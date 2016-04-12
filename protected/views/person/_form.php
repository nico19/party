<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pipd'); ?>
		<?php echo $form->textField($model,'pipd',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pipd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pipp'); ?>
		<?php echo $form->textField($model,'pipp',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pipp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_home'); ?>
		<?php echo $form->textField($model,'place_home',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'place_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_birth'); ?>
		<?php echo $form->textField($model,'place_birth',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'place_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_passport'); ?>
		<?php echo $form->textField($model,'number_passport',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'number_passport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'who_gave'); ?>
		<?php echo $form->textField($model,'who_gave',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'who_gave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcode'); ?>
		<?php echo $form->textField($model,'idcode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'idcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marital_status'); ?>
		<?php echo $form->textField($model,'marital_status'); ?>
		<?php echo $form->error($model,'marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->