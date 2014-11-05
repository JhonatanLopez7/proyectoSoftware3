<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->numero_Convocatoria=>array('view','id'=>$model->numero_Convocatoria),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Convocatorias', 'url'=>array('index')),
	array('label'=>'Crear Convocatoria', 'url'=>array('create')),
	array('label'=>'Ver Convocatoria', 'url'=>array('view', 'id'=>$model->numero_Convocatoria)),
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Update Convocatoria <?php echo $model->numero_Convocatoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>