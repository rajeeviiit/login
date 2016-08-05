<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Welcome</h1>
	<?php
		include 'core/init.php';

	?>

	<table align="center" cellspacing="0" cellpadding="0" class="caption">
		<tr>
			<td class="form">
				<h2>Login</h2>
				<form>
					<div class="input-container">
			        	<input type="text" id="Username" required="required"/>
			        	<label for="Username">Username</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="input-container">
			        	<input type="password" id="Password" required="required"/>
			        	<label for="Password">Password</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="button-container">
			        	<button><span>Login</span></button>
			      	</div>
			      	<div class="footer">
			      		Forgot your <a href="#">username</a> or <a href="#">password?</a>
			      	</div>
			      	<div class="footer">New User? 
			      		<a href="register.php">Register</a>
			      	</div>
				</form>



			</td>
		</tr>
	</table>
</body>
</html>