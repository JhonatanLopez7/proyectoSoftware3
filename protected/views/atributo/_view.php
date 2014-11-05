<?php
/* @var $this AtributoController */
/* @var $data Atributo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Atributo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Atributo), array('view', 'id'=>$data->codigo_Atributo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>