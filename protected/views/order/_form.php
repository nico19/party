<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personm_id'); ?>
		<?php echo $form->textField($model,'personm_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'personm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personw_id'); ?>
		<?php echo $form->textField($model,'personw_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'personw_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organDRATC_id'); ?>
		<?php echo $form->textField($model,'organDRATC_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'organDRATC_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ceremony'); ?>
		<?php echo $form->textField($model,'ceremony'); ?>
		<?php echo $form->error($model,'ceremony'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->