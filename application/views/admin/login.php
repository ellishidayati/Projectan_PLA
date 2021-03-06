<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SINDANISTRA</title>
	

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
     <link rel="icon" type="image/png" href="<?php echo base_url('asset/img/4.png');?>">
	<link href="<?php echo base_url('asset/admin2/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('asset/admin2/css/bootstrap-responsive.min.css');?>" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url('asset/admin2/css/font-awesome.css');?>" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		
	<link href="<?php echo base_url('asset/admin2/css/style.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('asset/admin2/css/pages/signin.css');?>" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				SISTEM INVENTORY DATA TEKNIS TRANSPORT
			</a>			
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<?php echo form_open('Home/login')?>
		
			<h1>Member Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>

				<div class="form-bottom">
					<?php echo validation_errors(); ?>
					<p style="color:red;"><?php echo $this->session->flashdata('notification')?></p> 
					
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" value="<?php echo set_value('username')?>" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" value="<?php echo set_value('password')?>" />
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<button class="button btn btn-success btn-large" type="submit" name="masuk">Sign In</button>
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="<?php echo base_url('asset/admin2/js/jquery-1.7.2.min.js');?>"></script>
<script src="<?php echo base_url('asset/admin2/js/bootstrap.js')?>"></script>

<script src="<?php echo base_url('asset/admin2/js/signin.js');?>"></script>

</body>

</html>
