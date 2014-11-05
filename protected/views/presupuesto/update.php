<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */

$this->breadcrumbs=array(
	'Presupuestos'=>array('index'),
	$model->codigo_Presupuesto=>array('view','id'=>$model->codigo_Presupuesto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Presupuesto', 'url'=>array('index')),
	array('label'=>'Create Presupuesto', 'url'=>array('create')),
	array('label'=>'View Presupuesto', 'url'=>array('view', 'id'=>$model->codigo_Presupuesto)),
	array('label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<h1>Update Presupuesto <?php echo $model->codigo_Presupuesto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>