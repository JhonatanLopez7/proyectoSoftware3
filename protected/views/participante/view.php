<?php
/* @var $this ParticipanteController */
/* @var $model Participante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->codigo_Participante,
);

$this->menu=array(
	array('label'=>'List Participante', 'url'=>array('index')),
	array('label'=>'Create Participante', 'url'=>array('create')),
	array('label'=>'Update Participante', 'url'=>array('update', 'id'=>$model->codigo_Participante)),
	array('label'=>'Delete Participante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_Participante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participante', 'url'=>array('admin')),
);
?>

<h1>View Participante #<?php echo $model->codigo_Participante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_Participante',
		'cantidad',
		'seccion',
		'rol',
		'codigo_Formulario',
	),
)); ?>
