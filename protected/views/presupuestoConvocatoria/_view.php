<?php
/* @var $this PresupuestoConvocatoriaController */
/* @var $data PresupuestoConvocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_PresupuestoConvocatoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_PresupuestoConvocatoria), array('view', 'id'=>$data->codigo_PresupuestoConvocatoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Presupuesto); ?>
	<br />


</div>