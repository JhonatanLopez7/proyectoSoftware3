<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Producto), array('view', 'id'=>$data->codigo_Producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Formulario); ?>
	<br />


</div>