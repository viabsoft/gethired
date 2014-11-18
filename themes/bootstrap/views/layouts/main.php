<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="width: 100%; height: 100%; vertical-align:top">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datepicker.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	
<?php echo Yii::app()->bootstrap->registerCoreCss(); ?>
<title></title>
<style type="text/css">
.auto-style2 {
	text-align: right;
}
.auto-style3 {
	text-align: center;
}
.auto-style4 {
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-size: small;
	color: #F4F4F4;
}
.auto-style5 {
	background-color: #787878;
	height:150px;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>
</head>

<body bgcolor="f4f4f4" style="margin: 0px; padding: 0;width: 100%; height: 100%;vertical-align:top" >
<table cellpadding="0" cellspacing="0" style="width: 100%; height: 100%" height="100%" width="100%">
	<tr>
		<td valign="top">
		<table cellpadding="0" cellspacing="0" style="width: 100%; height: 93px">
			<tr>
				<td style="height: 61px">
				<table cellpadding="0" cellspacing="0" style="width: 1024px; height: 61px;" align="center">
					<tr>
					<td width="53px" style="height: 20px">&nbsp;</td>
						<td style="height: 20px">
						&nbsp;</td>
						<td style="height: 20px">
						&nbsp;</td>
					</tr>
					<tr>
					<td width="53px"></td>
						<td>
						<img alt="GetHired" height="35" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" width="120" /></td>
						<td class="auto-style2">
						<img height="29" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/social-icons.png" width="117" />&nbsp;</td>
						<td width="33px">
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td style="height: 32px;background-color: #5BC4D0;
" class="auto-style3"><span class="auto-style4"><strong>Home | About | 
				Categories | Cities | Browse Jobs | Employers | Candidates | 
				Recruiters | FAQ | Contact </strong></span>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td  valign="top"><?php echo $content; ?></td>
	</tr>
	<!--tr>
		<td class="auto-style5" ></td>
	</tr-->
</table>
</body>

</html>
