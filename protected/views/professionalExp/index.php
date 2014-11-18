<?php
$this->breadcrumbs=array(
	'Professional Exps',
);

$this->menu=array(
	array('label'=>'Create ProfessionalExp','url'=>array('create')),
	array('label'=>'Manage ProfessionalExp','url'=>array('admin')),
);
?>

<h1>Professional Exps</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
