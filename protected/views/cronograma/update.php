<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->codigo_Cronograma=>array('view','id'=>$model->codigo_Cronograma),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cronograma', 'url'=>array('index')),
	array('label'=>'Create Cronograma', 'url'=>array('create')),
	array('label'=>'View Cronograma', 'url'=>array('view', 'id'=>$model->codigo_Cronograma)),
	array('label'=>'Manage Cronograma', 'url'=>array('admin')),
);
?>

<h1>Update Cronograma <?php echo $model->codigo_Cronograma; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>