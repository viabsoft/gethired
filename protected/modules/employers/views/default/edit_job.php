<fieldset><legend>
<h2><?php echo $model->isNewRecord?'Add New':'Update'; ?> Job</h2>
</legend>
<?php if(Yii::app()->user->hasFlash('info')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('info'); ?>
    </div>
	<?php endif; ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	//'action' => Yii::app()->createUrl('employers/Jobs/edit_job'),

	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

 <div class="row">
        <?php echo $form->labelEx($model,'Title'); ?>
        <?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'Title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'DepartmentId'); ?>
        <?php echo $form->dropDownList($model,'DepartmentId',CHtml::listData(Departments::model()->findAllByAttributes(array('UserId'=>Yii::app()->user->Id)),'Id','Title'),array(
	
    'prompt'=>'Select Category',
   )); ?>
        <?php echo $form->error($model,'DepartmentId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Description'); ?>
        <?php $this->widget('ext.editMe.widgets.ExtEditMe', array(
    'model'=>$model,
    'attribute'=>'Description',
   // 'optionName'=>'optionValue',
   'width'=>550,
   'toolbar' =>array(
		array(
			'Bold', 'Italic', 'Underline',
		),
		array(
			'NumberedList', 'BulletedList', 
		),		
)
)); ?>
        <?php echo $form->error($model,'Description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Specs'); ?>
             <?php $this->widget('ext.editMe.widgets.ExtEditMe', array(
    'model'=>$model,
    'attribute'=>'Specs',
   // 'optionName'=>'optionValue',
   'width'=>550,
   'toolbar' =>array(
		array(
			'Bold', 'Italic', 'Underline',
		),
		array(
			'NumberedList', 'BulletedList', 
		),		
)
)); ?>
        <?php echo $form->error($model,'Specs'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Qualification'); ?>
        <?php echo $form->textField($model,'Qualification',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'Qualification'); ?>
    </div>

  <div class="row">
        <?php echo $form->labelEx($model,'CategoryId'); ?>
        <?php echo $form->dropDownList($model,'CategoryId',CHtml::listData(Catagories::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Category',
   )); ?>
        <?php echo $form->error($model,'CategoryId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'CareerLevelId'); ?>
        <?php echo $form->dropDownList($model,'CareerLevelId',CHtml::listData(Career_Level::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Career Level',
   )); ?>
        <?php echo $form->error($model,'CareerLevelId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ExperianceLevelId'); ?>
        <?php echo $form->dropDownList($model,'ExperianceLevelId',CHtml::listData(Experiance_Level::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Experiance Level',
   )); ?>
        <?php echo $form->error($model,'ExperianceLevelId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'JobTypeId'); ?>
        <?php echo $form->dropDownList($model,'JobTypeId',CHtml::listData(Job_Type::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Job Type',
   )); ?>
        <?php echo $form->error($model,'JobTypeId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ShiftsId'); ?>
        <?php echo $form->dropDownList($model,'ShiftsId',CHtml::listData(Shifts::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Shift',
   )); ?>
        <?php echo $form->error($model,'ShiftsId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'RequiredTraveling'); ?>
        <?php echo $form->radioButtonList($model,'RequiredTraveling',array('1'=>'Yes','0'=>'No'),array(
    'labelOptions'=>array('style'=>'display:inline'), // add this code
    'separator'=>'  ',
) ); ?>
        <?php echo $form->error($model,'RequiredTraveling'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'SalaryMin'); ?>
        <?php echo $form->textField($model,'SalaryMin',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'SalaryMin'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'SalaryMax'); ?>
        <?php echo $form->textField($model,'SalaryMax',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'SalaryMax'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'CurrencyId'); ?>
        <?php echo $form->dropDownList($model,'CurrencyId',CHtml::listData(Currency::model()->findAll(),'Id','Name'),array(
	
    'prompt'=>'Select Currency',
   )); ?>
        <?php echo $form->error($model,'CurrencyId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'NoVacancies'); ?>
        <?php echo $form->textField($model,'NoVacancies'); ?>
        <?php echo $form->error($model,'NoVacancies'); ?>
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
          $("#Job_ProvinceId").empty(); 
          $("#Job_ProvinceId").append(data);

          $("#Job_CityId").empty(); 
          $("#Job_CityId").append("<option value=\"\">Select City</option>");
       
    }',
  'data'=>array('country_id'=>'js:this.value'),
  ))); ?>
        <?php echo $form->error($model,'CountryId'); ?>
    </div>
	<div class="row">
        <?php echo $form->labelEx($model,'ProvinceId'); ?>
        <?php echo $form->dropDownList($model,'ProvinceId',CHtml::listData(Province::model()->findAllByAttributes(array("CountryId"=>$model->CountryId)),'Id','Name'), array(
    'prompt'=>'Select Province',
    'ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('cities/loadcities'), //or $this->createUrl('loadcities') if '$this' extends CController
    'update'=>'#Job_CityId', //or 'success' => 'function(data){...handle the data in the way you want...}',
  'data'=>array('province_id'=>'js:this.value'),
  ))); ?>
        <?php echo $form->error($model,'Province'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'CityId'); ?>
        <?php echo $form->dropDownList($model,'CityId', CHtml::listData(Cities::model()->findAllByAttributes(array("ProvinceId"=>$model->ProvinceId)),'Id','Name'), array('prompt'=>'Select City')); ?>
        <?php echo $form->error($model,'CityId'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model,'ExpirationDate'); ?>
        <?php $model->ExpirationDate = date("m/d/Y", time()+2635200);  // default date
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
 'model'=>$model,
 'value'=>date("m/d/Y",strtotime($model->ExpirationDate)),
    'name'=>'Job[ExpirationDate]',
   

    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'drop',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'showOn'=>'both',
                                                'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.jpg',
                                                'buttonImageOnly'=>true,
                                        'changeMonth'=>true,
										'yearRange'=>'1972:2099',
                                        'changeYear'=>true,
                                            ),
   
));
?>
        <?php echo $form->error($model,'ExpirationDate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'EmailResume'); ?>
        <?php echo $form->checkBox($model,'EmailResume'); ?>
        <?php echo $form->error($model,'EmailResume'); ?>
    </div>




<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Submit',
    'type'=>'primary',
    'buttonType'=>'submit', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
   // 'url'=>array('employers/account/update'),
    'size'=>'null', // null, 'large', 'small' or 'mini'
)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
