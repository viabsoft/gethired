<?php
$this->breadcrumbs=array(
	'Professional Exps'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List ProfessionalExp','url'=>array('index')),
	array('label'=>'Create ProfessionalExp','url'=>array('create')),
	array('label'=>'Update ProfessionalExp','url'=>array('update','id'=>$model->Id)),
	array('label'=>'Delete ProfessionalExp','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfessionalExp','url'=>array('admin')),
);
?>

<h1>View ProfessionalExp #<?php echo $model->Id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'ResumeId',
		'CompanyName',
		'CompanyWeb',
		'CompanyEmail',
		'CompanyNumber',
		'CityId',
		'ProvinceId',
		'CountryId',
		'JobTitle',
		'JobTypeId',
		'Responsibilities',
		'ReasonForLeaving',
		'DurationStart',
		'DurationEnd',
		'CurrentlyWorking',
		'JoiningSalary',
		'LastSalary',
		'Benefits',
		'Active',
		'Blocked',
		'DateAdded',
		'DateUpdated',
	),
)); ?>
