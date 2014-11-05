<?php
/* @var $this PlantillaController */
/* @var $model Plantilla */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	$model->numero_Plantilla=>array('view','id'=>$model->numero_Plantilla),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plantilla', 'url'=>array('index')),
	array('label'=>'Create Plantilla', 'url'=>array('create')),
	array('label'=>'View Plantilla', 'url'=>array('view', 'id'=>$model->numero_Plantilla)),
	array('label'=>'Manage Plantilla', 'url'=>array('admin')),
);
?>

<h1>Update Plantilla <?php echo $model->numero_Plantilla; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>