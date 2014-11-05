<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $model UsuarioHasConvocatoria */

$this->breadcrumbs=array(
	'Usuario Has Convocatorias'=>array('index'),
	$model->codigo_Usuario=>array('view','id'=>$model->codigo_Usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioHasConvocatoria', 'url'=>array('index')),
	array('label'=>'Create UsuarioHasConvocatoria', 'url'=>array('create')),
	array('label'=>'View UsuarioHasConvocatoria', 'url'=>array('view', 'id'=>$model->codigo_Usuario)),
	array('label'=>'Manage UsuarioHasConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioHasConvocatoria <?php echo $model->codigo_Usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>