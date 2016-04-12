<?php
/* @var $this OrganDRATCController */
/* @var $model OrganDRATC */

$this->breadcrumbs=array(
	'Organ Dratcs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganDRATC', 'url'=>array('index')),
	array('label'=>'Manage OrganDRATC', 'url'=>array('admin')),
);
?>

<h1>Create OrganDRATC</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>