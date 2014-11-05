<?php
/* @var $this TipoRubroController */
/* @var $model TipoRubro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-rubro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_TipoRubro'); ?>
		<?php echo $form->textField($model,'codigo_TipoRubro'); ?>
		<?php echo $form->error($model,'codigo_TipoRubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rubroEspecial'); ?>
		<?php echo $form->textField($model,'rubroEspecial'); ?>
		<?php echo $form->error($model,'rubroEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_PresupuestoConvocatoria'); ?>
		<?php echo $form->textField($model,'codigo_PresupuestoConvocatoria'); ?>
		<?php echo $form->error($model,'codigo_PresupuestoConvocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Atributo'); ?>
		<?php echo $form->textField($model,'codigo_Atributo'); ?>
		<?php echo $form->error($model,'codigo_Atributo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->