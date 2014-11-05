<?php
/* @var $this PalabraClaveController */
/* @var $model PalabraClave */

$this->breadcrumbs=array(
	'Palabra Claves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PalabraClave', 'url'=>array('index')),
	array('label'=>'Manage PalabraClave', 'url'=>array('admin')),
);
?>

<h1>Create PalabraClave</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>