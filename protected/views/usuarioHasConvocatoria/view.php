<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $model UsuarioHasConvocatoria */

$this->breadcrumbs=array(
	'Usuario Has Convocatorias'=>array('index'),
	$model->codigo_Usuario,
);

$this->menu=array(
	array('label'=>'List UsuarioHasConvocatoria', 'url'=>array('index')),
	array('label'=>'Create UsuarioHasConvocatoria', 'url'=>array('create')),
	array('label'=>'Update UsuarioHasConvocatoria', 'url'=>array('update', 'id'=>$model->codigo_Usuario)),
	array('label'=>'Delete UsuarioHasConvocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioHasConvocatoria', 'url'=>array('admin')),
);
?>

<h1>View UsuarioHasConvocatoria #<?php echo $model->codigo_Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Usuario',
		'numero_Convocatoria',
	),
)); ?>
