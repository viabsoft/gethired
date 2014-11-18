<fieldset><legend>
<h2>Update Profile</h2>
</legend>
<?php if(Yii::app()->user->hasFlash('info')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('info'); ?>
    </div>

<?php endif; ?>
<div class="wide form" style="width:450px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'action' => Yii::app()->createUrl('employers/account/profile'),

	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?><?php echo CHtml::errorSummary($model); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
   

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
		<?php echo $form->labelEx($model,'Mobile'); ?>
		<?php echo $form->textField($model,'Mobile'); ?>
		<?php echo $form->error($model,'Mobile'); ?>
	</div>
    <div class="row">
        <?php echo $form->labelEx($model,'Address'); ?>
        <?php echo $form->textArea($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'Address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'CountryId'); ?>
        <?php echo $form->dropDownList($model,'CountryId',CHtml::listData(Countries::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Country',
    'ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('countries/loadprovince'), //or $this->createUrl('loadcities') if '$this' extends CController
    //'update'=>'#Employer_Province', //or 'success' => 'function(data){...handle the data in the way you want...}',
	'success'=>'js:function(data){
	//alert(data);
          $("#Employer_Province").empty(); 
          $("#Employer_Province").append(data);

          $("#Employer_City").empty(); 
          $("#Employer_City").append("<option value=\"\">Select City</option>");
       
    }',
  'data'=>array('country_id'=>'js:this.value'),
  ))); ?>
        <?php echo $form->error($model,'CountryId'); ?>
    </div>
	<div class="row">
        <?php echo $form->labelEx($model,'StateProvinceId'); ?>
        <?php echo $form->dropDownList($model,'StateProvinceId',CHtml::listData(Province::model()->findAllByAttributes(array("CountryId"=>$model->CountryId)),'Id','Name'), array(
    'prompt'=>'Select Province',
    'ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('cities/loadcities'), //or $this->createUrl('loadcities') if '$this' extends CController
    'update'=>'#Employer_City', //or 'success' => 'function(data){...handle the data in the way you want...}',
  'data'=>array('province_id'=>'js:this.value'),
  ))); ?>
        <?php echo $form->error($model,'Province'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'CityId'); ?>
        <?php echo $form->dropDownList($model,'CityId', CHtml::listData(Cities::model()->findAllByAttributes(array("ProvinceId"=>$model->StateProvinceId)),'Id','Name'), array('prompt'=>'Select City')); ?>
        <?php echo $form->error($model,'CityId'); ?>
    </div>








	
		<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Update',
    'type'=>'primary',
    'buttonType'=>'submit', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'url'=>array('employers/account/update'),
    'size'=>'null', // null, 'large', 'small' or 'mini'
)); ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
