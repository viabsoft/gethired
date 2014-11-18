<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-profile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'User_Type_Id'); ?>
		<?php echo $form->textField($model,'User_Type_Id'); ?>
		<?php echo $form->error($model,'User_Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CountryId'); ?>
		<?php echo $form->textField($model,'CountryId'); ?>
		<?php echo $form->error($model,'CountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StateProvinceId'); ?>
		<?php echo $form->textField($model,'StateProvinceId'); ?>
		<?php echo $form->error($model,'StateProvinceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CityId'); ?>
		<?php echo $form->textField($model,'CityId'); ?>
		<?php echo $form->error($model,'CityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsActive'); ?>
		<?php echo $form->textField($model,'IsActive'); ?>
		<?php echo $form->error($model,'IsActive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsDeleted'); ?>
		<?php echo $form->textField($model,'IsDeleted'); ?>
		<?php echo $form->error($model,'IsDeleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateAdded'); ?>
		<?php echo $form->textField($model,'DateAdded'); ?>
		<?php echo $form->error($model,'DateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateUpdated'); ?>
		<?php echo $form->textField($model,'DateUpdated'); ?>
		<?php echo $form->error($model,'DateUpdated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'First_Name'); ?>
		<?php echo $form->textField($model,'First_Name'); ?>
		<?php echo $form->error($model,'First_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Last_Name'); ?>
		<?php echo $form->textField($model,'Last_Name'); ?>
		<?php echo $form->error($model,'Last_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->textField($model,'Password'); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password_Salt'); ?>
		<?php echo $form->textField($model,'Password_Salt'); ?>
		<?php echo $form->error($model,'Password_Salt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mobile'); ?>
		<?php echo $form->textField($model,'Mobile'); ?>
		<?php echo $form->error($model,'Mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email'); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->