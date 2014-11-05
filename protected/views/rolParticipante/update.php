<?php
/* @var $this RolParticipanteController */
/* @var $model RolParticipante */

$this->breadcrumbs=array(
	'Rol Participantes'=>array('index'),
	$model->codigo_RolParticipante=>array('view','id'=>$model->codigo_RolParticipante),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolParticipante', 'url'=>array('index')),
	array('label'=>'Create RolParticipante', 'url'=>array('create')),
	array('label'=>'View RolParticipante', 'url'=>array('view', 'id'=>$model->codigo_RolParticipante)),
	array('label'=>'Manage RolParticipante', 'url'=>array('admin')),
);
?>

<h1>Update RolParticipante <?php echo $model->codigo_RolParticipante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>