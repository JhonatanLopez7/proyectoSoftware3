<?php
/* @var $this RolParticipanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rol Participantes',
);

$this->menu=array(
	array('label'=>'Create RolParticipante', 'url'=>array('create')),
	array('label'=>'Manage RolParticipante', 'url'=>array('admin')),
);
?>

<h1>Rol Participantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
