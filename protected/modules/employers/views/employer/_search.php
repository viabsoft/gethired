<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Company_Name'); ?>
		<?php echo $form->textField($model,'Company_Name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Company_Type'); ?>
		<?php echo $form->textField($model,'Company_Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Registration_Number'); ?>
		<?php echo $form->textField($model,'Registration_Number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NTN_Number'); ?>
		<?php echo $form->textField($model,'NTN_Number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Incorporation_Date'); ?>
		<?php echo $form->textField($model,'Incorporation_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Incorporation_City'); ?>
		<?php echo $form->textField($model,'Incorporation_City',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'First_Name'); ?>
		<?php echo $form->textField($model,'First_Name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Last_Name'); ?>
		<?php echo $form->textField($model,'Last_Name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Alternate_Email'); ?>
		<?php echo $form->textField($model,'Alternate_Email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cell_Number'); ?>
		<?php echo $form->textField($model,'Cell_Number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LandLine'); ?>
		<?php echo $form->textField($model,'LandLine',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ext'); ?>
		<?php echo $form->textField($model,'Ext',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reporting_Person'); ?>
		<?php echo $form->textField($model,'Reporting_Person',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reporting_Person_Email'); ?>
		<?php echo $form->textField($model,'Reporting_Person_Email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reporting_Person_Cell'); ?>
		<?php echo $form->textField($model,'Reporting_Person_Cell',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reporting_Person_Landline'); ?>
		<?php echo $form->textField($model,'Reporting_Person_Landline',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reporting_Person_Ext'); ?>
		<?php echo $form->textField($model,'Reporting_Person_Ext',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'City'); ?>
		<?php echo $form->textField($model,'City',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Province'); ?>
		<?php echo $form->textField($model,'Province',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Postal_Code'); ?>
		<?php echo $form->textField($model,'Postal_Code',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Country'); ?>
		<?php echo $form->textField($model,'Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Username'); ?>
		<?php echo $form->textField($model,'Username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsActive'); ?>
		<?php echo $form->textField($model,'IsActive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsDeleted'); ?>
		<?php echo $form->textField($model,'IsDeleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Added'); ?>
		<?php echo $form->textField($model,'Date_Added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Updated'); ?>
		<?php echo $form->textField($model,'Date_Updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Activated'); ?>
		<?php echo $form->textField($model,'Date_Activated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Internal_Remarks'); ?>
		<?php echo $form->textField($model,'Internal_Remarks',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->