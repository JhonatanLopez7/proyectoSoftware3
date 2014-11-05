<?php
/* @var $this PresupuestoConvocatoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presupuesto Convocatorias',
);

$this->menu=array(
	array('label'=>'Create PresupuestoConvocatoria', 'url'=>array('create')),
	array('label'=>'Manage PresupuestoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Presupuesto Convocatorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
