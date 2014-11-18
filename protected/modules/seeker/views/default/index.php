<table align="center" width="80%"><tr><td valign="top">
<fieldset><legend>
<h2>Quick Signup</h2>
</legend>
<div class="wide form" style="width:450px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employer-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'action' => Yii::app()->createUrl('seeker/account/create'),

	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	
)); ?>
<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
<?php endif; ?>	<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->hiddenField($model,'[1]User_Type_Id',array('value'=>2)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'[1]First_Name'); ?>
		<?php echo $form->textField($model,'[1]First_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'[1]First_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'[1]Last_Name'); ?>
		<?php echo $form->textField($model,'[1]Last_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'[1]Last_Name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'[1]Mobile'); ?>
		<?php echo $form->textField($model,'[1]Mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'[1]Mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'[1]CountryId'); ?>
		<?php echo $form->dropDownList($model,'[1]CountryId',CHtml::listData(Countries::model()->findAll(),'Id','Name'),array('empty' => 'Select Country','ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('province/loadprovinces'), //or $this->createUrl('loadcities') if '$this' extends CController
    'update'=>'#Users_1_StateProvinceId', //or 'success' => 'function(data){...handle the data in the way you want...}',
  'data'=>array('CountryId'=>'js:this.value'),
  ))); ?>
		<?php echo $form->error($model,'[1]CountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'[1]StateProvinceId'); ?>
		<?php echo $form->dropDownList($model,'[1]StateProvinceId',array(),array('empty' => 'Select Province','ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('province/loadcities'), //or $this->createUrl('loadcities') if '$this' extends CController
    'update'=>'#Users_1_CityId', //or 'success' => 'function(data){...handle the data in the way you want...}',
  'data'=>array('ProvinceId'=>'js:this.value'),
  ))); ?>

		<?php echo $form->error($model,'[1]StateProvinceId'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'[1]CityId'); ?>
		<?php echo $form->dropDownList($model,'[1]CityId',array('empty' => 'Select City')); ?>
		<?php echo $form->error($model,'[1]CityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'[1]Email'); ?>
		<?php echo $form->textField($model,'[1]Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'[1]Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'[1]Password'); ?>
		<?php echo $form->passwordField($model,'[1]Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'[1]Password'); ?>
	</div>
	

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Signup',
    'type'=>'primary',
    'buttonType'=>'submit', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'url'=>array('seeker/account/create'),
    'size'=>'null', // null, 'large', 'small' or 'mini'
)); ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
</td>
<td valign="top">
<?php echo $this->renderPartial('seeker.views.default.login_view', array('model'=>$loginmodel)); ?>
</td>

</tr></table>
