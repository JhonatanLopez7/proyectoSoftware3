<?php
/* @var $this ConvocatoriaController */
/* @var $data Convocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_Convocatoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->numero_Convocatoria), array('view', 'id'=>$data->numero_Convocatoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estilo')); ?>:</b>
	<?php echo CHtml::encode($data->estilo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaUltimaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaUltimaModificacion); ?>
	<br />


</div>