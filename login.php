<!DOCTYPE html>
<?php 
//starting the session
session_start();
$_SESSION['username'] = $username;
require_once 'assets/php/navpages.php';
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting page to Registration page -->
		<a href="formulaire.php"> <?= __('signIn','Not a member yet? Register here...')?></a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Login Form Starts -->
			<form method="POST" action="assets/php/login_query.php">	
				<div class="alert alert-info"><?= __('signIn','Login')?></div>
				<div class="form-group">
					<label><?= __('signIn','Username')?></label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label><?= __('signIn','Password')?></label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				<button class="btn btn-primary btn-block" name="login"><span class="glyphicon glyphicon-log-in"></span><?= __('signIn','Login')?></button>
			</form>	
			<!-- Login Form Ends -->
		</div>
	</div>
</body>
</html>