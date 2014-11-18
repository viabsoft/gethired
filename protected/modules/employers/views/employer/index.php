<?php
$this->breadcrumbs=array(
	'Employers',
);

$this->menu=array(
	array('label'=>'Create Employer', 'url'=>array('create')),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>Employers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
