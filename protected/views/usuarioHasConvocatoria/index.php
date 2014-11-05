<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Has Convocatorias',
);

$this->menu=array(
	array('label'=>'Create UsuarioHasConvocatoria', 'url'=>array('create')),
	array('label'=>'Manage UsuarioHasConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Usuario Has Convocatorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
