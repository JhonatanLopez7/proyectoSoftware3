<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Usuario), array('view', 'id'=>$data->codigo_Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion); ?>
	<br />


</div>