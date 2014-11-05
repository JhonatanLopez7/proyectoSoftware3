<?php
/* @var $this RolOrganizadorController */
/* @var $data RolOrganizador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_RolOrganizador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_RolOrganizador), array('view', 'id'=>$data->codigo_RolOrganizador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Participante')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_Participante); ?>
	<br />


</div>