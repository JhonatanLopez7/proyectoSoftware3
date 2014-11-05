<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	$model->codigo_Campo,
);

$this->menu=array(
	array('label'=>'List Campo', 'url'=>array('index')),
	array('label'=>'Create Campo', 'url'=>array('create')),
	array('label'=>'Update Campo', 'url'=>array('update', 'id'=>$model->codigo_Campo)),
	array('label'=>'Delete Campo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Campo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Campo', 'url'=>array('admin')),
);
?>

<h1>View Campo #<?php echo $model->codigo_Campo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Campo',
		'nombre',
		'tipo',
		'longitud',
		'obligatorio',
		'visible',
		'codigo_SeccionDinamica',
	),
)); ?>
