<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $model UsuarioHasConvocatoria */

$this->breadcrumbs=array(
	'Usuario Has Convocatorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioHasConvocatoria', 'url'=>array('index')),
	array('label'=>'Manage UsuarioHasConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioHasConvocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>