<?php
$this->breadcrumbs=array(
	'Employers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Create Employer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('employer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Company_Name',
		'Company_Type',
		'Registration_Number',
		'NTN_Number',
		'Incorporation_Date',
		/*
		'Incorporation_City',
		'First_Name',
		'Last_Name',
		'Email',
		'Alternate_Email',
		'Cell_Number',
		'LandLine',
		'Ext',
		'Reporting_Person',
		'Reporting_Person_Email',
		'Reporting_Person_Cell',
		'Reporting_Person_Landline',
		'Reporting_Person_Ext',
		'City',
		'Address',
		'Province',
		'Postal_Code',
		'Country',
		'Username',
		'Password',
		'IsActive',
		'IsDeleted',
		'Date_Added',
		'Date_Updated',
		'Date_Activated',
		'Status',
		'Remarks',
		'Internal_Remarks',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
