<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employer-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'First_Name'); ?>
		<?php echo $form->textField($model,'First_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'First_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Last_Name'); ?>
		<?php echo $form->textField($model,'Last_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Last_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Confirm_Email'); ?>
		<?php echo $form->textField($model,'Confirm_Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Confirm_Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cell_Number'); ?>
		<?php echo $form->textField($model,'Cell_Number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Cell_Number'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Country'); ?>
		<?php echo $form->textField($model,'Country'); ?>
		<?php echo $form->error($model,'Country'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Province'); ?>
		<?php echo $form->textField($model,'Province',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'City'); ?>
		<?php echo $form->textField($model,'City',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'City'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'Postal_Code'); ?>
		<?php echo $form->textField($model,'Postal_Code',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Postal_Code'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'Username'); ?>
		<?php echo $form->textField($model,'Username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Confirm_Password'); ?>
		<?php echo $form->passwordField($model,'Confirm_Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Confirm_Password'); ?>
	</div>

	

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Submit',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
)); ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->