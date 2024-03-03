<!DOCTYPE html>
<?php 
//starting the session
session_start();
require_once('assets/php/navpages.php');

?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/StyleFormulaire.css">
	</head>


<body>
	<nav class="navbar navbar-default"></nav>

	<div class="col-md-6 well">
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting to Login Page -->
		<a href="login.php"><?= __('signIn','Already a member? Log in here...')?></a>
		<br style="clear:both;"/><br/>
		
		<div class="col-md-6">
			<!-- Registration Form -->
			<form method="POST" action="assets/php/save_member.php">	
				<div class="titreformulaire"><?= __('signIn','Registration')?><</div>
				<div class="form-group">
					<input type="text" name="username" class="form-control" required="required" autofocus placeholder = "<?= __('signIn','Username')?>"/>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" required="required" autofocus placeholder = "<?= __('signIn','Password')?>"/>
				</div>
				<div class="form-group">
					<input type="text" name="firstname" class="form-control" required="required" autofocus placeholder = "<?= __('signIn','Firstname')?>"/>
				</div>
				<div class="form-group">
					<input type="text" name="lastname" class="form-control" required="required" autofocus placeholder = "<?= __('signIn','Lastname')?>"/>
				</div>

				<?php
					//checking if the session 'success' is set. Success session is the message that the credetials are successfully saved.
					if(ISSET($_SESSION['success'])){
				?>
				<!-- Display registration success message -->
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php
					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
					}
				?>
				<button class="click" name="register"><span class="glyphicon glyphicon-save"></span> <?= __('signIn','Register')?></button>
			</form>	
		</div>
	</div>
</body>
</html>