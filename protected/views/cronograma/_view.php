<?php
/* @var $this CronogramaController */
/* @var $data Cronograma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_Cronograma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_Cronograma), array('view', 'id'=>$data->codigo_Cronograma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>