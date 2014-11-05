<?php
/* @var $this PalabraClaveController */
/* @var $data PalabraClave */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_PalabraClave')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_PalabraClave), array('view', 'id'=>$data->codigo_PalabraClave)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Formulario); ?>
	<br />


</div>