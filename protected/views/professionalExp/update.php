<?php
$this->breadcrumbs=array(
	'Professional Exps'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfessionalExp','url'=>array('index')),
	array('label'=>'Create ProfessionalExp','url'=>array('create')),
	array('label'=>'View ProfessionalExp','url'=>array('view','id'=>$model->Id)),
	array('label'=>'Manage ProfessionalExp','url'=>array('admin')),
);
?>

<h1>Update ProfessionalExp <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>