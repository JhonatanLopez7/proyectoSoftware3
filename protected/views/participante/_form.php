<?php
/* @var $this ParticipanteController */
/* @var $model Participante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Participante'); ?>
		<?php echo $form->textField($model,'codigo_Participante'); ?>
		<?php echo $form->error($model,'codigo_Participante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seccion'); ?>
		<?php echo $form->textField($model,'seccion',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rol'); ?>
		<?php echo $form->textField($model,'rol'); ?>
		<?php echo $form->error($model,'rol'); ?>
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