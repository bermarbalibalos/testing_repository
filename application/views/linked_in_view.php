<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>rKruiter</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	</head>

	<body>
<div style="width: 320px; margin: 0 auto;">
<?php echo validation_errors();
$attributes = array('class' => 'well', 'id' => 'frm_login');?>

<?php echo form_open('login'); ?>
<label for="username">Username:</label>
<input type="text" size="20" id="username" name="username"/>
<br/>
<label for="password">Password:</label>
<input type="password" size="20" id="passowrd" name="password"/>
<br/>
<input type="submit" value="Login" class="btn btn-primary"/>
</form>
<a href="linked_in"><div class="btn">Sign-in using LinkedIn</div></a>


</div>

	</body>
</html>