<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->codigo_Cronograma,
);

$this->menu=array(
	array('label'=>'List Cronograma', 'url'=>array('index')),
	array('label'=>'Create Cronograma', 'url'=>array('create')),
	array('label'=>'Update Cronograma', 'url'=>array('update', 'id'=>$model->codigo_Cronograma)),
	array('label'=>'Delete Cronograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Cronograma),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cronograma', 'url'=>array('admin')),
);
?>

<h1>View Cronograma #<?php echo $model->codigo_Cronograma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Cronograma',
		'descripcion',
	),
)); ?>
