<fieldset><legend>
<h2><?php echo $model->isNewRecord?'Add New':'Update'; ?> Department</h2>
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
	//'action' => Yii::app()->createUrl('employers/account/new_dept'),

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
        <?php echo $form->labelEx($model,'Description'); ?>
        <?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'Description'); ?>
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
