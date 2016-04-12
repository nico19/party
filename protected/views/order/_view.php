<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personm_id')); ?>:</b>
	<?php echo CHtml::encode($data->personm_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personw_id')); ?>:</b>
	<?php echo CHtml::encode($data->personw_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organDRATC_id')); ?>:</b>
	<?php echo CHtml::encode($data->organDRATC_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ceremony')); ?>:</b>
	<?php echo CHtml::encode($data->ceremony); ?>
	<br />


</div>