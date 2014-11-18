<?php
$this->breadcrumbs=array(
	'Employers'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Create Employer', 'url'=>array('create')),
	array('label'=>'View Employer', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>Update Employer <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>