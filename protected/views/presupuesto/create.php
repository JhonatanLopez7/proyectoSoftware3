<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */

$this->breadcrumbs=array(
	'Presupuestos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Presupuesto', 'url'=>array('index')),
	array('label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<h1>Create Presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>