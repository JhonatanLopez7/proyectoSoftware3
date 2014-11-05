<?php
/* @var $this FormularioController */
/* @var $data Formulario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Formulario), array('view', 'id'=>$data->codigo_Formulario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activoHasta')); ?>:</b>
	<?php echo CHtml::encode($data->activoHasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden')); ?>:</b>
	<?php echo CHtml::encode($data->orden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_Convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->numero_Convocatoria); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Cronograma')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Cronograma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Presupuesto); ?>
	<br />

	*/ ?>

</div>