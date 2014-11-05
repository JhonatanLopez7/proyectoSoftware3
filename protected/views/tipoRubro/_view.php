<?php
/* @var $this TipoRubroController */
/* @var $data TipoRubro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_TipoRubro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_TipoRubro), array('view', 'id'=>$data->codigo_TipoRubro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubroEspecial')); ?>:</b>
	<?php echo CHtml::encode($data->rubroEspecial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_PresupuestoConvocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_PresupuestoConvocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Atributo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Atributo); ?>
	<br />


</div>