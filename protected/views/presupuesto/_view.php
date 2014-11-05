<?php
/* @var $this PresupuestoController */
/* @var $data Presupuesto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Presupuesto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Presupuesto), array('view', 'id'=>$data->codigo_Presupuesto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_maximo')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_maximo); ?>
	<br />


</div>