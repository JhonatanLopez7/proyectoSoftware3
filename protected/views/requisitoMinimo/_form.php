<?php
/* @var $this RequisitoMinimoController */
/* @var $model RequisitoMinimo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'requisito-minimo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_RequisitoMinimo'); ?>
		<?php echo $form->textField($model,'codigo_RequisitoMinimo'); ?>
		<?php echo $form->error($model,'codigo_RequisitoMinimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obligatorio'); ?>
		<?php echo $form->textField($model,'obligatorio'); ?>
		<?php echo $form->error($model,'obligatorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validoHasta'); ?>
		<?php echo $form->textField($model,'validoHasta'); ?>
		<?php echo $form->error($model,'validoHasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria'); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Formulario'); ?>
		<?php echo $form->textField($model,'codigo_Formulario'); ?>
		<?php echo $form->error($model,'codigo_Formulario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->