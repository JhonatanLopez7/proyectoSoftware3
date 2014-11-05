<?php
/* @var $this RequisitoMinimoController */
/* @var $data RequisitoMinimo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_RequisitoMinimo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_RequisitoMinimo), array('view', 'id'=>$data->codigo_RequisitoMinimo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obligatorio')); ?>:</b>
	<?php echo CHtml::encode($data->obligatorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validoHasta')); ?>:</b>
	<?php echo CHtml::encode($data->validoHasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Formulario); ?>
	<br />


</div>