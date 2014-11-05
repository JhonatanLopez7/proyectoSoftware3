<?php
/* @var $this RolParticipanteController */
/* @var $data RolParticipante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_RolParticipante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_RolParticipante), array('view', 'id'=>$data->codigo_RolParticipante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Participante')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Participante); ?>
	<br />


</div>