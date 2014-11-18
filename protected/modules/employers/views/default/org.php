<fieldset><legend>
<h2>Update Orgination</h2>
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
	'action' => Yii::app()->createUrl('employers/account/org'),

	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
        <?php echo $form->labelEx($model,'Company_Name'); ?>
		<?php if($model->Company_Name==''){ ?>
        <?php echo $form->textField($model,'Company_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php }else {?>
		<?php echo $model->Company_Name; ?>
		<?php }?>
        <?php echo $form->error($model,'Company_Name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Company_Type'); ?>
        <?php echo $form->dropDownList($model,'Company_Type',CHtml::listData(IncorporationType::model()->findAll(),'Id','Name'),array(
    'prompt'=>'Select Company Type',
   )); ?>
        <?php echo $form->error($model,'Company_Type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Registration_Number'); ?>
        <?php echo $form->textField($model,'Registration_Number',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'Registration_Number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'NTN_Number'); ?>
        <?php echo $form->textField($model,'NTN_Number',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'NTN_Number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Incorporation_Date'); ?>
        
		<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
 'model'=>$model,
 'value'=>date("m/d/Y",strtotime($model->Incorporation_Date)),
    'name'=>'Employer[Incorporation_Date]',
   

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
        <?php echo $form->error($model,'Incorporation_Date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Incorporation_City'); ?>
        <?php echo $form->textField($model,'Incorporation_City',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'Incorporation_City'); ?>
    </div>

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
        <?php echo $form->labelEx($model,'Cell_Number'); ?>
        <?php echo $form->textField($model,'Cell_Number',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'Cell_Number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'LandLine'); ?>
        <?php echo $form->textField($model,'LandLine',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'LandLine'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Fax'); ?>
        <?php echo $form->textField($model,'Fax',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'Fax'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'CompanyProfile'); ?>
        <?php echo $form->textArea($model,'CompanyProfile',array('size'=>8000,'maxlength'=>8000,'rows' => 10)); ?>
        <?php echo $form->error($model,'CompanyProfile'); ?>
    </div>
   
    <div class="row">
        <?php echo $form->labelEx($model,'Country'); ?>
        <?php echo $form->dropDownList($model,'Country',CHtml::listData(Countries::model()->findAll(),'Id','Name'),array(
	
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
        <?php echo $form->error($model,'Country'); ?>
    </div>
	<div class="row">
        <?php echo $form->labelEx($model,'Province'); ?>
        <?php echo $form->dropDownList($model,'Province',CHtml::listData(Province::model()->findAllByAttributes(array("CountryId"=>$model->Country)),'Id','Name'), array(
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
        <?php echo $form->labelEx($model,'City'); ?>
        <?php echo $form->dropDownList($model,'City', CHtml::listData(Cities::model()->findAllByAttributes(array("ProvinceId"=>$model->Province)),'Id','Name'), array('prompt'=>'Select City')); ?>
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
        <?php echo $form->labelEx($model,'Total_Emp'); ?>
        <?php echo $form->textField($model,'Total_Emp',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'Total_Emp'); ?>
    </div>
	    <div class="row">
        <?php echo $form->labelEx($model,'Url'); ?>
        <?php echo $form->textField($model,'Url',array('size'=>500,'maxlength'=>500)); ?>
        <?php echo $form->error($model,'Url'); ?>
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

<script>
$( document ).ready(function() {
   // $('#Employer_Country').live("click","alert('hi')");
	/*$('#Employer_Country').change(function(e){
		var $getvalue = $(this).val();
		$.post( 'http://localhost/gethired.pk/countries/loadprovince', { country_id: $getvalue})
					  .done(function( data ) {
						$("#Employer_Province").empty(); 
          $("#Employer_Province").append(data);
					  });	
		
	});	
	$('#Employer_Country').trigger('change');
	
	
	$('#Employer_Province').change(function(e){
		var $getvalue = $(this).val();
		$.post( 'http://localhost/gethired.pk/countries/loadcities', { province_id: $getvalue})
					  .done(function( data ) {
						$("#Employer_City").empty(); 
          $("#Employer_City").append(data);
					  });	
		
	});	
	$('#Employer_Province').trigger('change');*/
});
</script>
