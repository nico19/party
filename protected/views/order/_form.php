<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">


<script>
	$(function() {
		$( ".datepicker" ).datepicker({dateFormat: 'dd-mm-yy' });
		$( ".datepickerTime" ).datepicker({dateFormat: 'dd-mm-yy', showTime:true });
	});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
	<hr>
	<p>Інформація про чоловіка</p>
	<div class="row">
		<?php echo $form->labelEx($model,'ПІП до одруження'); ?>
		<?php echo $form->textField($model,'pipd_m',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pipd_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ПІП після одруження'); ?>
		<?php echo $form->textField($model,'pipp_m',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pipp_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Місце народження'); ?>
		<?php echo $form->textField($model,'place_birth_m',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'place_birth_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Місце проживання'); ?>
		<?php echo $form->textField($model,'place_home_m',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'place_home_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Номер паспорту'); ?>
		<?php echo $form->textField($model,'number_passport_m',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'number_passport_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Хто видав?'); ?>
		<?php echo $form->textField($model,'who_gave_m',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'who_gave_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Дата видачі'); ?>
		<?php echo $form->textField($model,'date_gave_m', array ( 'class' =>'datepicker' ));?>
		<?php echo $form->error($model,'date_gave_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Сімейний статус'); ?>
		<?php echo $form->textField($model,'marital_status_m',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'marital_status_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ідентифікаційний код'); ?>
		<?php echo $form->textField($model,'idcode_m',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'idcode_m'); ?>
	</div>

	<hr>

	<p>Інформація про жінку</p>
	<div class="row">
		<?php echo $form->labelEx($model,'ПІП до одруження'); ?>
		<?php echo $form->textField($model,'pipd_w',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pipd_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ПІП після одруження'); ?>
		<?php echo $form->textField($model,'pipp_w',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pipp_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Місце народження'); ?>
		<?php echo $form->textField($model,'place_birth_w',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'place_birth_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Місце проживання'); ?>
		<?php echo $form->textField($model,'place_home_w',array('size'=>20,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'place_home_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Номер паспорту'); ?>
		<?php echo $form->textField($model,'number_passport_w',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'number_passport_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Хто видав?'); ?>
		<?php echo $form->textField($model,'who_gave_w',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'who_gave_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Дата видачі'); ?>
		<?php echo $form->textField($model,'date_gave_w', array ( 'class' =>'datepicker' ));?>
		<?php echo $form->error($model,'date_gave_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Сімейний статус'); ?>
		<?php echo $form->textField($model,'marital_status_w',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'marital_status_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ідентифікаційний код'); ?>
		<?php echo $form->textField($model,'idcode_w',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'idcode_w'); ?>
	</div>

	<hr>
	<div class="row">
		<?php echo $form->labelEx($model,'Дата реєстрації'); ?>
		<?php echo $form->textField($model,'data_registration', array ( 'class' =>'datepickerTime' ));?>
		<?php echo $form->error($model,'data_registration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Церемонія'); ?>
		<?php echo $form->dropDownList($model,'ceremony', CHtml::listData(array(array("id" =>"1", "name" => "Закрита"),array("id" =>"2", "name" => "Відкрита") ),'id','name')); ?>
		<?php echo $form->error($model,'ceremony'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->