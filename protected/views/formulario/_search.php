<?php
/* @var $this FormularioController */
/* @var $model Formulario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo_Formulario'); ?>
		<?php echo $form->textField($model,'codigo_Formulario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activoHasta'); ?>
		<?php echo $form->textField($model,'activoHasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orden'); ?>
		<?php echo $form->textField($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_Convocatoria'); ?>
		<?php echo $form->textField($model,'numero_Convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_Cronograma'); ?>
		<?php echo $form->textField($model,'codigo_Cronograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_Presupuesto'); ?>
		<?php echo $form->textField($model,'codigo_Presupuesto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->