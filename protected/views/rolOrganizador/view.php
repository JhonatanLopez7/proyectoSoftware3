<?php
/* @var $this RolOrganizadorController */
/* @var $model RolOrganizador */

$this->breadcrumbs=array(
	'Rol Organizadors'=>array('index'),
	$model->codigo_RolOrganizador,
);

$this->menu=array(
	array('label'=>'List RolOrganizador', 'url'=>array('index')),
	array('label'=>'Create RolOrganizador', 'url'=>array('create')),
	array('label'=>'Update RolOrganizador', 'url'=>array('update', 'id'=>$model->codigo_RolOrganizador)),
	array('label'=>'Delete RolOrganizador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_RolOrganizador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolOrganizador', 'url'=>array('admin')),
);
?>

<h1>View RolOrganizador #<?php echo $model->codigo_RolOrganizador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_RolOrganizador',
		'nombre',
		'codigo_Participante',
	),
)); ?>
