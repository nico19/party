<?php
/* @var $this OrganDRATCController */
/* @var $model OrganDRATC */

$this->breadcrumbs=array(
	'Organ Dratcs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganDRATC', 'url'=>array('index')),
	array('label'=>'Create OrganDRATC', 'url'=>array('create')),
	array('label'=>'View OrganDRATC', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrganDRATC', 'url'=>array('admin')),
);
?>

<h1>Update OrganDRATC <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>