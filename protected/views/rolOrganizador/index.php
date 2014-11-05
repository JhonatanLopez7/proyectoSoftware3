<?php
/* @var $this RolOrganizadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rol Organizadors',
);

$this->menu=array(
	array('label'=>'Create RolOrganizador', 'url'=>array('create')),
	array('label'=>'Manage RolOrganizador', 'url'=>array('admin')),
);
?>

<h1>Rol Organizadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
