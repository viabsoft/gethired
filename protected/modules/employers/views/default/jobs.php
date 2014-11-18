<fieldset><legend>
<h2>Account Management</h2>
</legend>
<?php if(Yii::app()->user->hasFlash('info')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('info'); ?>
    </div>

<?php endif; ?>
Jobs

<table class="auto-style1" style="width: 90%" align="center">
	<tr>
	<td class="auto-style2" style="width: 166px; height: 90px"><a href="account/org">Update Organization</a></td>
		<td class="auto-style2" style="width: 166px; height: 90px"><a href="account/profile">Update Profile</a></td>
		<td class="auto-style2" style="width: 166px; height: 90px"><a href="account/departments">Departments</a></td>
		<td class="auto-style2" style="width: 166px; height: 90px">Compnay Logo</td>
		<td class="auto-style2" style="width: 167px; height: 90px"><a href="account/jobs">My Jobs</a></td>
		<td class="auto-style2" style="width: 167px; height: 90px">Other link</td>
		<td class="auto-style2" style="width: 167px; height: 90px">Other link</td>
		<td class="auto-style2" style="width: 167px; height: 90px">Other link</td>

	</tr>
</table>

</fieldset>
<style type="text/css">
.auto-style1 {
	border-collapse: collapse;
	border-style: 1px solid #C0C0C0;
	background-color: #FDFFFD;
}
.auto-style2 {
	border-left: 1px solid #C0C0C0;
	border-right-style: solid;
	border-right-width: 1px;
	border-top: 1px solid #C0C0C0;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	text-align: center;
}

</style>

<?php 
$this->menu=array(
    array('label'=>'New Job', 'url'=>array('jobs/new_job')),    
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
					'url'=>'Yii::app()->createUrl("employers/jobs/edit_job", array("id"=>$data->Id))',
				),
				'delete' => array
				(
					'label'=>'[-]',
					'url'=>'"#"',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
					'url'=>'Yii::app()->createUrl("employers/jobs/del_job", array("id"=>$data->Id))',
					
				),
			),
        ),
		
    ),
));?>
</div>
?>
