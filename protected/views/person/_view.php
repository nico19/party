<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pipd')); ?>:</b>
	<?php echo CHtml::encode($data->pipd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pipp')); ?>:</b>
	<?php echo CHtml::encode($data->pipp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_home')); ?>:</b>
	<?php echo CHtml::encode($data->place_home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_birth')); ?>:</b>
	<?php echo CHtml::encode($data->place_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_passport')); ?>:</b>
	<?php echo CHtml::encode($data->number_passport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('who_gave')); ?>:</b>
	<?php echo CHtml::encode($data->who_gave); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idcode')); ?>:</b>
	<?php echo CHtml::encode($data->idcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->marital_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	*/ ?>

</div>