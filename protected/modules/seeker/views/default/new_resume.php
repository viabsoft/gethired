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



<div id="tabs">
  <ul> 
  
 
 
 
    <li><a href="#tabs-1">Personal Information</a></li>
    <li><a href="#tabs-2">Academics</a></li>
    <li><a href="#tabs-3">Experiences</a></li>
    <li><a href="#tabs-3">Projects</a></li>
    <li><a href="#tabs-3">Languages</a></li>
    <li><a href="#tabs-3">Skills</a></li>
    <li><a href="#tabs-3">References</a></li>
    <li><a href="#tabs-3">Publications</a></li>
    <li><a href="#tabs-3">Affiliations</a></li>
    <li><a href="#tabs-3">Honors & Awards</a></li>
    <li><a href="#tabs-3">Target Jobs</a></li>
    <li><a href="#tabs-3">Add Photo</a></li>
    <li><a href="#tabs-3">Preview Resume</a></li>
    <li><a href="#tabs-3">Download</a></li>
  </ul>
  <div id="tabs-1">
    <h2>Content heading 1</h2>
    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id="tabs-2">
    <h2>Content heading 2</h2>
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3">
    <h2>Content heading 3</h2>
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>

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
