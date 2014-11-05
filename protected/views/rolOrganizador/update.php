<?php
/* @var $this RolOrganizadorController */
/* @var $model RolOrganizador */

$this->breadcrumbs=array(
	'Rol Organizadors'=>array('index'),
	$model->codigo_RolOrganizador=>array('view','id'=>$model->codigo_RolOrganizador),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolOrganizador', 'url'=>array('index')),
	array('label'=>'Create RolOrganizador', 'url'=>array('create')),
	array('label'=>'View RolOrganizador', 'url'=>array('view', 'id'=>$model->codigo_RolOrganizador)),
	array('label'=>'Manage RolOrganizador', 'url'=>array('admin')),
);
?>

<h1>Update RolOrganizador <?php echo $model->codigo_RolOrganizador; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>