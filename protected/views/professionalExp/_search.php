<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'Id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ResumeId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'CompanyName',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'CompanyWeb',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'CompanyEmail',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'CompanyNumber',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'CityId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ProvinceId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'CountryId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'JobTitle',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'JobTypeId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Responsibilities',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'ReasonForLeaving',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'DurationStart',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'DurationEnd',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'CurrentlyWorking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'JoiningSalary',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'LastSalary',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'Benefits',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'Active',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Blocked',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'DateAdded',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'DateUpdated',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
