<?php
/* @var $this PresupuestoConvocatoriaController */
/* @var $model PresupuestoConvocatoria */

$this->breadcrumbs=array(
	'Presupuesto Convocatorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresupuestoConvocatoria', 'url'=>array('index')),
	array('label'=>'Manage PresupuestoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Create PresupuestoConvocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>