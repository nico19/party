<?php
/* @var $this OrganDRATCController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organ Dratcs',
);

$this->menu=array(
	array('label'=>'Create OrganDRATC', 'url'=>array('create')),
	array('label'=>'Manage OrganDRATC', 'url'=>array('admin')),
);
?>

<h1>Organ Dratcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
