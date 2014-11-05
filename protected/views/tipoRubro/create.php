<?php
/* @var $this TipoRubroController */
/* @var $model TipoRubro */

$this->breadcrumbs=array(
	'Tipo Rubros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoRubro', 'url'=>array('index')),
	array('label'=>'Manage TipoRubro', 'url'=>array('admin')),
);
?>

<h1>Create TipoRubro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>