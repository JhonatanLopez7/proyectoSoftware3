<?php
/* @var $this AtributoController */
/* @var $model Atributo */

$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	$model->codigo_Atributo=>array('view','id'=>$model->codigo_Atributo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atributo', 'url'=>array('index')),
	array('label'=>'Create Atributo', 'url'=>array('create')),
	array('label'=>'View Atributo', 'url'=>array('view', 'id'=>$model->codigo_Atributo)),
	array('label'=>'Manage Atributo', 'url'=>array('admin')),
);
?>

<h1>Update Atributo <?php echo $model->codigo_Atributo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>