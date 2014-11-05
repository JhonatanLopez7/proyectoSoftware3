<?php
/* @var $this PlantillaController */
/* @var $data Plantilla */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_Plantilla')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->numero_Plantilla), array('view', 'id'=>$data->numero_Plantilla)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaModificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Formulario); ?>
	<br />


</div>