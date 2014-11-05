<?php
/* @var $this TipoRubroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Rubros',
);

$this->menu=array(
	array('label'=>'Create TipoRubro', 'url'=>array('create')),
	array('label'=>'Manage TipoRubro', 'url'=>array('admin')),
);
?>

<h1>Tipo Rubros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
