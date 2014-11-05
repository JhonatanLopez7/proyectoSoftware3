<?php
/* @var $this PresupuestoConvocatoriaController */
/* @var $model PresupuestoConvocatoria */

$this->breadcrumbs=array(
	'Presupuesto Convocatorias'=>array('index'),
	$model->codigo_PresupuestoConvocatoria,
);

$this->menu=array(
	array('label'=>'List PresupuestoConvocatoria', 'url'=>array('index')),
	array('label'=>'Create PresupuestoConvocatoria', 'url'=>array('create')),
	array('label'=>'Update PresupuestoConvocatoria', 'url'=>array('update', 'id'=>$model->codigo_PresupuestoConvocatoria)),
	array('label'=>'Delete PresupuestoConvocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_PresupuestoConvocatoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresupuestoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>View PresupuestoConvocatoria #<?php echo $model->codigo_PresupuestoConvocatoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_PresupuestoConvocatoria',
		'nombre',
		'codigo_Presupuesto',
	),
)); ?>
