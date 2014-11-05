<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->codigo_Usuario,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->codigo_Usuario)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>View Usuario #<?php echo $model->codigo_Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Usuario',
		'nombre',
		'identificacion',
	),
)); ?>
