<?php
/* @var $this PresupuestoConvocatoriaController */
/* @var $model PresupuestoConvocatoria */

$this->breadcrumbs=array(
	'Presupuesto Convocatorias'=>array('index'),
	$model->codigo_PresupuestoConvocatoria=>array('view','id'=>$model->codigo_PresupuestoConvocatoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List PresupuestoConvocatoria', 'url'=>array('index')),
	array('label'=>'Create PresupuestoConvocatoria', 'url'=>array('create')),
	array('label'=>'View PresupuestoConvocatoria', 'url'=>array('view', 'id'=>$model->codigo_PresupuestoConvocatoria)),
	array('label'=>'Manage PresupuestoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Update PresupuestoConvocatoria <?php echo $model->codigo_PresupuestoConvocatoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>