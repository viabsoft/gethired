<?php
$this->breadcrumbs=array(
	'Employers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>Create Employer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>