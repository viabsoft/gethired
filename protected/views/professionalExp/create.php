<?php
$this->breadcrumbs=array(
	'Professional Exps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfessionalExp','url'=>array('index')),
	array('label'=>'Manage ProfessionalExp','url'=>array('admin')),
);
?>

<h1>Create ProfessionalExp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>