<fieldset><legend>
<h2>Account Management</h2>
</legend>
<?php if(Yii::app()->user->hasFlash('info')):?>
    <div class="alert alert-block alert-error">
        <?php echo Yii::app()->user->getFlash('info'); ?>
    </div>

<?php endif; ?>


<table class="auto-style1" style="width: 90%" align="center">
	<tr>
	<td class="auto-style2" style="width: 166px; height: 90px"><a href="resume/new">Add Resume</a></td>
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
