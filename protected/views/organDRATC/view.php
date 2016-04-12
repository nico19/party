<?php
/* @var $this OrganDRATCController */
/* @var $model OrganDRATC */

$this->breadcrumbs=array(
	'Organ Dratcs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OrganDRATC', 'url'=>array('index')),
	array('label'=>'Create OrganDRATC', 'url'=>array('create')),
	array('label'=>'Update OrganDRATC', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrganDRATC', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganDRATC', 'url'=>array('admin')),
);
?>

<h1>View OrganDRATC #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		array(
            'label' => 'Region name',
            'value' => function($model){
                return $model->region->name;
            }
        )
	),
)); ?>
