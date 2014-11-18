<?php
$this->breadcrumbs=array(
	'Employers'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Create Employer', 'url'=>array('create')),
	array('label'=>'Update Employer', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Employer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>View Employer #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Company_Name',
		'Company_Type',
		'Registration_Number',
		'NTN_Number',
		'Incorporation_Date',
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
	),
)); ?>
