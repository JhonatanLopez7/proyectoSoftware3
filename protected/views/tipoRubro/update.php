<?php
/* @var $this TipoRubroController */
/* @var $model TipoRubro */

$this->breadcrumbs=array(
	'Tipo Rubros'=>array('index'),
	$model->codigo_TipoRubro=>array('view','id'=>$model->codigo_TipoRubro),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoRubro', 'url'=>array('index')),
	array('label'=>'Create TipoRubro', 'url'=>array('create')),
	array('label'=>'View TipoRubro', 'url'=>array('view', 'id'=>$model->codigo_TipoRubro)),
	array('label'=>'Manage TipoRubro', 'url'=>array('admin')),
);
?>

<h1>Update TipoRubro <?php echo $model->codigo_TipoRubro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>