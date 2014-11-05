<?php
/* @var $this PlantillaController */
/* @var $model Plantilla */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	$model->numero_Plantilla,
);

$this->menu=array(
	array('label'=>'List Plantilla', 'url'=>array('index')),
	array('label'=>'Create Plantilla', 'url'=>array('create')),
	array('label'=>'Update Plantilla', 'url'=>array('update', 'id'=>$model->numero_Plantilla)),
	array('label'=>'Delete Plantilla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numero_Plantilla),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plantilla', 'url'=>array('admin')),
);
?>

<h1>View Plantilla #<?php echo $model->numero_Plantilla; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numero_Plantilla',
		'nombre',
		'tipo',
		'fechaCreacion',
		'fechaModificacion',
		'codigo_Formulario',
	),
)); ?>
