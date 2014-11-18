<script>
$( document ).ready(function() {
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 
var checkin = $('#ProfessionalExp_DurationStart').datepicker({
  onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
  }
  checkin.hide();
  $('#ProfessionalExp_DurationEnd')[0].focus();
}).data('datepicker');
var checkout = $('#ProfessionalExp_DurationEnd').datepicker({
  onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  checkout.hide();
}).data('datepicker');


$('#ProfessionalExp_CurrentlyWorking').on('change', function(){
	if($(this).is(':checked'))
	{
		$('#ProfessionalExp_DurationEnd').val('');
		$('#ProfessionalExp_DurationEnd').attr("disabled","disabled");
	}
	else
	{
		$('#ProfessionalExp_DurationEnd').removeAttr("disabled","disabled");
	}
    
});
});





</script>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'professional-exp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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

	<?php echo $form->checkBoxRow($model,'CurrentlyWorking',array('class'=>'span5')); ?>

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
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
