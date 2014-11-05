<?php
/* @var $this PalabraClaveController */
/* @var $model PalabraClave */

$this->breadcrumbs=array(
	'Palabra Claves'=>array('index'),
	$model->codigo_PalabraClave,
);

$this->menu=array(
	array('label'=>'List PalabraClave', 'url'=>array('index')),
	array('label'=>'Create PalabraClave', 'url'=>array('create')),
	array('label'=>'Update PalabraClave', 'url'=>array('update', 'id'=>$model->codigo_PalabraClave)),
	array('label'=>'Delete PalabraClave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo_PalabraClave),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PalabraClave', 'url'=>array('admin')),
);
?>

<h1>View PalabraClave #<?php echo $model->codigo_PalabraClave; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo_PalabraClave',
		'descripcion',
		'codigo_Formulario',
	),
)); ?>
