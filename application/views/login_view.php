<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>rKruiter</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<!--Initialize Jquery-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
		
		<!--My JS Initial-->
		<script type='text/javascript' src='<?php echo base_url(); ?>my_js/my_js.js'></script>

		<!--basic styles-->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-fonts.css" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
		
		<!--LinkedIn Intitiation -->
		<script src="//platform.linkedin.com/in.js" type="text/javascript">
		api_key: 75fc93lj388wal
		authorize: true		
		lang:  en_US
		</script>
		

	</head>

	<body>
	<div style="width: 320px; margin: 0 auto;">
	<?php //echo validation_errors();
	$attributes_login = array('class' => 'well', 'id' => 'frm_login');?>
	<br/>
	<?php echo form_open('login', $attributes_login); ?>
	<label for="username">Username:</label>
	<?php echo form_error('username', '<div class="error_password">', '</div>'); ?>
	<input type="text" size="20" id="username" name="username"/>
	<br/>	
	<label for="password">Password:</label>
	<?php echo form_error('password', '<div class="error_password">', '</div>'); ?>
	<input type="password" size="20" id="passowrd" name="password"/>
	<br/>
	<input type="submit" value="Login" class="btn btn-primary" id="submit_login"/>
	</form>
	<script>
	$( document ).ready(function() {	
		$('#submit_login').click( function() {
					
		});
	});
	</script>
	<br/>
	<br/>
	<br/>

<!--Linked-in-->
<script type="IN/Login">

</script>

</div>
	</body>
</html>