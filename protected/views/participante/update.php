<?php
/* @var $this ParticipanteController */
/* @var $model Participante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->codigo_Participante=>array('view','id'=>$model->codigo_Participante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participante', 'url'=>array('index')),
	array('label'=>'Create Participante', 'url'=>array('create')),
	array('label'=>'View Participante', 'url'=>array('view', 'id'=>$model->codigo_Participante)),
	array('label'=>'Manage Participante', 'url'=>array('admin')),
);
?>

<h1>Update Participante <?php echo $model->codigo_Participante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>