<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $model UsuarioHasConvocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-has-convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_Usuario'); ?>
		<?php echo $form->textField($model,'codigo_Usuario'); ?>
		<?php echo $form->error($model,'codigo_Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_Convocatoria'); ?>
		<?php echo $form->textField($model,'numero_Convocatoria'); ?>
		<?php echo $form->error($model,'numero_Convocatoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->