<?php
/* @var $this RolParticipanteController */
/* @var $model RolParticipante */

$this->breadcrumbs=array(
	'Rol Participantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolParticipante', 'url'=>array('index')),
	array('label'=>'Manage RolParticipante', 'url'=>array('admin')),
);
?>

<h1>Create RolParticipante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>