<?php
/* @var $this CampoController */
/* @var $data Campo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Campo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Campo), array('view', 'id'=>$data->codigo_Campo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitud')); ?>:</b>
	<?php echo CHtml::encode($data->longitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obligatorio')); ?>:</b>
	<?php echo CHtml::encode($data->obligatorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visible')); ?>:</b>
	<?php echo CHtml::encode($data->visible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_SeccionDinamica')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_SeccionDinamica); ?>
	<br />


</div>