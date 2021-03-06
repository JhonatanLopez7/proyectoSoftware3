<?php
/* @var $this FormularioController */
/* @var $model Formulario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formulario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Formulario'); ?>
		<?php echo $form->textField($model,'codigo_Formulario'); ?>
		<?php echo $form->error($model,'codigo_Formulario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activoHasta'); ?>
		<?php echo $form->textField($model,'activoHasta'); ?>
		<?php echo $form->error($model,'activoHasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden'); ?>
		<?php echo $form->textField($model,'orden'); ?>
		<?php echo $form->error($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_Convocatoria'); ?>
		<?php echo $form->textField($model,'numero_Convocatoria'); ?>
		<?php echo $form->error($model,'numero_Convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Cronograma'); ?>
		<?php echo $form->textField($model,'codigo_Cronograma'); ?>
		<?php echo $form->error($model,'codigo_Cronograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Presupuesto'); ?>
		<?php echo $form->textField($model,'codigo_Presupuesto'); ?>
		<?php echo $form->error($model,'codigo_Presupuesto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->