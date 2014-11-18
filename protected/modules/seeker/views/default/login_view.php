<fieldset><legend>
<h2>Login</h2>
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
	'action' => Yii::app()->createUrl('seeker/login'),

	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	
	<div class="row">
		<?php echo $form->labelEx($model,'[2]Email'); ?>
		<?php echo $form->textField($model,'[2]Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'[2]Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'[2]Password'); ?>
		<?php echo $form->passwordField($model,'[2]Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'[2]Password'); ?>
	</div>
	
		<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Login',
    'type'=>'primary',
    'buttonType'=>'submit', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'url'=>array('seeker/login'),
    'size'=>'null', // null, 'large', 'small' or 'mini'
)); ?>	<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Need Help?',
    'type'=>'link',
    'buttonType'=>'link', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'url'=>array('seeker/forgot'),
    'size'=>'null', // null, 'large', 'small' or 'mini'
)); ?></div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
