<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'numero_Convocatoria'); ?>
		<?php echo $form->textField($model,'numero_Convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estilo'); ?>
		<?php echo $form->textField($model,'estilo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaUltimaModificacion'); ?>
		<?php echo $form->textField($model,'fechaUltimaModificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->