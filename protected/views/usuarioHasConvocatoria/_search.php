<?php
/* @var $this UsuarioHasConvocatoriaController */
/* @var $model UsuarioHasConvocatoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo_Usuario'); ?>
		<?php echo $form->textField($model,'codigo_Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_Convocatoria'); ?>
		<?php echo $form->textField($model,'numero_Convocatoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->