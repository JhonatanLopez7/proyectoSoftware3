<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $data UsuarioHasConvocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Usuario), array('view', 'id'=>$data->codigo_Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_Convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->numero_Convocatoria); ?>
	<br />


</div>