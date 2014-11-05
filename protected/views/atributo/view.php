<?php
/* @var $this AtributoController */
/* @var $model Atributo */

$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	$model->codigo_Atributo,
);

$this->menu=array(
	array('label'=>'List Atributo', 'url'=>array('index')),
	array('label'=>'Create Atributo', 'url'=>array('create')),
	array('label'=>'Update Atributo', 'url'=>array('update', 'id'=>$model->codigo_Atributo)),
	array('label'=>'Delete Atributo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Atributo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atributo', 'url'=>array('admin')),
);
?>

<h1>View Atributo #<?php echo $model->codigo_Atributo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Atributo',
		'nombre',
		'tipo',
	),
)); ?>
