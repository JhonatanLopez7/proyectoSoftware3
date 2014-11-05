<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->numero_Convocatoria,
);

$this->menu=array(
	array('label'=>'Lista Convocatorias', 'url'=>array('admin')),
	array('label'=>'Crear Convocatoria', 'url'=>array('create')),
	array('label'=>'Editar Convocatoria', 'url'=>array('update', 'id'=>$model->numero_Convocatoria)),
	array('label'=>'Eliminar Convocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numero_Convocatoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Convocatoria', 'url'=>array('admin')),
);
?>

<h1>Ver Convocatoria #<?php echo $model->numero_Convocatoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numero_Convocatoria',
		'nombre',
		'objetivo',
		'tipo',
		'estilo',
		'fechaCreacion',
		'fechaUltimaModificacion',
	),
)); ?>
