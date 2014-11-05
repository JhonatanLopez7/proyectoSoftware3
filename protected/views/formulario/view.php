<?php
/* @var $this FormularioController */
/* @var $model Formulario */

$this->breadcrumbs=array(
	'Formularios'=>array('index'),
	$model->codigo_Formulario,
);

$this->menu=array(
	array('label'=>'List Formulario', 'url'=>array('index')),
	array('label'=>'Create Formulario', 'url'=>array('create')),
	array('label'=>'Update Formulario', 'url'=>array('update', 'id'=>$model->codigo_Formulario)),
	array('label'=>'Delete Formulario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Formulario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formulario', 'url'=>array('admin')),
);
?>

<h1>View Formulario #<?php echo $model->codigo_Formulario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Formulario',
		'fechaCreacion',
		'activoHasta',
		'estado',
		'orden',
		'tipo',
		'numero_Convocatoria',
		'codigo_Cronograma',
		'codigo_Presupuesto',
	),
)); ?>
