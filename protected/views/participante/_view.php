<?php
/* @var $this ParticipanteController */
/* @var $data Participante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Participante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Participante), array('view', 'id'=>$data->codigo_Participante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seccion')); ?>:</b>
	<?php echo CHtml::encode($data->seccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rol')); ?>:</b>
	<?php echo CHtml::encode($data->rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Formulario); ?>
	<br />


</div>