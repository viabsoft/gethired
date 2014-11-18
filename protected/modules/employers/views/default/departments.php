<fieldset><legend>
<h2>Departments</h2>
</legend>
<?php if(Yii::app()->user->hasFlash('info')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('info'); ?>
    </div>

<?php endif; 
$this->menu=array(
    array('label'=>'Create Departments', 'url'=>array('new_dept')),
    
);
?>
<div class="wide form" style="width:450px">
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'menu-grid',
    'dataProvider'=>$dataProvider,
	'enableSorting' => false,
    //'filter'=>$model,
    'columns'=>array(
         array(
            'class'=>'IndexColumn',
        ),
        'Title',
        'Description',
        
        /*array(
            'name'=>'IsActive',
            'header'=>'Active',
            'filter'=>array('1'=>'Yes','0'=>'No'),
            'value'=>'($data->IsActive=="1")?("Yes"):("No")'
        ),*/
        array(
            'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			//'URL'=>Yii::app()->createUrl("account/del_dept/id/"),
			'deleteConfirmation'=>"js:'Are you sure you want to delete \''+$(this).parent().parent().children(':nth-child(2)').text()+'\' ?'",
			'buttons'=>array
			(
				'update' => array
				(
					'label'=>'Send an e-mail to this user',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
					'url'=>'Yii::app()->createUrl("employers/account/edit_dept", array("id"=>$data->Id))',
				),
				'delete' => array
				(
					'label'=>'[-]',
					'url'=>'"#"',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
					'url'=>'Yii::app()->createUrl("employers/account/del_dept", array("id"=>$data->Id))',
					
				),
			),
        ),
		
    ),
));?>

</div><!-- form -->
</fieldset>
