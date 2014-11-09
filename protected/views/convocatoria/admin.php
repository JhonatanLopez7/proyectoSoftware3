<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Convocatorias', 'url'=>array('index')),
	array('label'=>'Crear Convocatoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#convocatoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración Convocatorias</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'convocatoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'numero_Convocatoria',
		'nombre',
		'objetivo',
		'tipo',
		'estilo',
		'fechaCreacion',
		'fechaUltimaModificacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
