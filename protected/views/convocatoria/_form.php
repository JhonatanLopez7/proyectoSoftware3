<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required"></span></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_Convocatoria'); ?>
		<?php echo $form->textField($model,'numero_Convocatoria'); ?>
		<?php echo $form->error($model,'numero_Convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estilo'); ?>
		<?php echo $form->textField($model,'estilo'); ?>
		<?php echo $form->error($model,'estilo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaUltimaModificacion'); ?>
		<?php echo $form->textField($model,'fechaUltimaModificacion'); ?>
		<?php echo $form->error($model,'fechaUltimaModificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar Cambios' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->