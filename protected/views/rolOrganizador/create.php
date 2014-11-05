<?php
/* @var $this RolOrganizadorController */
/* @var $model RolOrganizador */

$this->breadcrumbs=array(
	'Rol Organizadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolOrganizador', 'url'=>array('index')),
	array('label'=>'Manage RolOrganizador', 'url'=>array('admin')),
);
?>

<h1>Create RolOrganizador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>