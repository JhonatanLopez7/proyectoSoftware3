<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo_Presupuesto'); ?>
		<?php echo $form->textField($model,'codigo_Presupuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_maximo'); ?>
		<?php echo $form->textField($model,'porcentaje_maximo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->