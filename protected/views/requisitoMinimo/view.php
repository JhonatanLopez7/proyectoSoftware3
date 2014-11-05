<?php
/* @var $this RequisitoMinimoController */
/* @var $model RequisitoMinimo */

$this->breadcrumbs=array(
	'Requisito Minimos'=>array('index'),
	$model->codigo_RequisitoMinimo,
);

$this->menu=array(
	array('label'=>'List RequisitoMinimo', 'url'=>array('index')),
	array('label'=>'Create RequisitoMinimo', 'url'=>array('create')),
	array('label'=>'Update RequisitoMinimo', 'url'=>array('update', 'id'=>$model->codigo_RequisitoMinimo)),
	array('label'=>'Delete RequisitoMinimo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_RequisitoMinimo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RequisitoMinimo', 'url'=>array('admin')),
);
?>

<h1>View RequisitoMinimo #<?php echo $model->codigo_RequisitoMinimo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_RequisitoMinimo',
		'nombre',
		'obligatorio',
		'validoHasta',
		'categoria',
		'codigo_Formulario',
	),
)); ?>
