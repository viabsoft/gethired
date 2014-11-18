<fieldset>
<legend><h2>Account Verification</h2></legend>
<?php if(Yii::app()->user->hasFlash('info')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('info'); ?>
    </div>

<?php endif; ?><div >
Please enter verification Code to Verify Your Account.
    </div>

<div class="wide form" style="width:450px">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'action' => Yii::app()->createUrl('employers/employer/verify'),

	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	
	<div class="row">
		<?php echo $form->labelEx($model,'VerificationCode'); ?>
		<?php echo CHtml::textField('VerificationCode'); ?>
		<?php echo $form->error($model,'VerificationCode'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Login',
    'type'=>'primary',
    'buttonType'=>'submit', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'url'=>array('employers/employer/verify'),
    'size'=>'null', // null, 'large', 'small' or 'mini'
)); ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


</fieldset>