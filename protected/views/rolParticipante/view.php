<?php
/* @var $this RolParticipanteController */
/* @var $model RolParticipante */

$this->breadcrumbs=array(
	'Rol Participantes'=>array('index'),
	$model->codigo_RolParticipante,
);

$this->menu=array(
	array('label'=>'List RolParticipante', 'url'=>array('index')),
	array('label'=>'Create RolParticipante', 'url'=>array('create')),
	array('label'=>'Update RolParticipante', 'url'=>array('update', 'id'=>$model->codigo_RolParticipante)),
	array('label'=>'Delete RolParticipante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_RolParticipante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolParticipante', 'url'=>array('admin')),
);
?>

<h1>View RolParticipante #<?php echo $model->codigo_RolParticipante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_RolParticipante',
		'nombre',
		'codigo_Participante',
	),
)); ?>
