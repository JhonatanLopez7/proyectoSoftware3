<?php
/* @var $this PalabraClaveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Palabra Claves',
);

$this->menu=array(
	array('label'=>'Create PalabraClave', 'url'=>array('create')),
	array('label'=>'Manage PalabraClave', 'url'=>array('admin')),
);
?>

<h1>Palabra Claves</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
