<?php
/* @var $this TipoRubroController */
/* @var $model TipoRubro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo_TipoRubro'); ?>
		<?php echo $form->textField($model,'codigo_TipoRubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubroEspecial'); ?>
		<?php echo $form->textField($model,'rubroEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_PresupuestoConvocatoria'); ?>
		<?php echo $form->textField($model,'codigo_PresupuestoConvocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_Atributo'); ?>
		<?php echo $form->textField($model,'codigo_Atributo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->