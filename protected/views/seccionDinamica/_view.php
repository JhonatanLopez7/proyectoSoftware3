<?php
/* @var $this SeccionDinamicaController */
/* @var $data SeccionDinamica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_SeccionDinamica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_SeccionDinamica), array('view', 'id'=>$data->codigo_SeccionDinamica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Formulario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Formulario); ?>
	<br />


</div>