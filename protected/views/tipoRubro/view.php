<?php
/* @var $this TipoRubroController */
/* @var $model TipoRubro */

$this->breadcrumbs=array(
	'Tipo Rubros'=>array('index'),
	$model->codigo_TipoRubro,
);

$this->menu=array(
	array('label'=>'List TipoRubro', 'url'=>array('index')),
	array('label'=>'Create TipoRubro', 'url'=>array('create')),
	array('label'=>'Update TipoRubro', 'url'=>array('update', 'id'=>$model->codigo_TipoRubro)),
	array('label'=>'Delete TipoRubro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_TipoRubro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoRubro', 'url'=>array('admin')),
);
?>

<h1>View TipoRubro #<?php echo $model->codigo_TipoRubro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_TipoRubro',
		'nombre',
		'rubroEspecial',
		'descripcion',
		'codigo_PresupuestoConvocatoria',
		'codigo_Atributo',
	),
)); ?>
