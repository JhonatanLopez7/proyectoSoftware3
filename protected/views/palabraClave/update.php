<?php
/* @var $this PalabraClaveController */
/* @var $model PalabraClave */

$this->breadcrumbs=array(
	'Palabra Claves'=>array('index'),
	$model->codigo_PalabraClave=>array('view','id'=>$model->codigo_PalabraClave),
	'Update',
);

$this->menu=array(
	array('label'=>'List PalabraClave', 'url'=>array('index')),
	array('label'=>'Create PalabraClave', 'url'=>array('create')),
	array('label'=>'View PalabraClave', 'url'=>array('view', 'id'=>$model->codigo_PalabraClave)),
	array('label'=>'Manage PalabraClave', 'url'=>array('admin')),
);
?>

<h1>Update PalabraClave <?php echo $model->codigo_PalabraClave; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>